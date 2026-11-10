<?php
// "Gorkhey" chatbot: a small rule-based assistant that answers from the database.
// POST message=... → JSON { reply: string, links: [{label, url}] }
require_once __DIR__ . '/includes/auth.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['reply' => 'Send me a message!', 'links' => []]);
    exit;
}

$message = mb_strtolower(trim((string) ($_POST['message'] ?? '')));
echo json_encode(chatbot_reply(mb_substr($message, 0, 500)));

function chatbot_reply(string $msg): array
{
    if ($msg === '') {
        return reply('Type a question, for example "I need a plumber" or "my lights are not working".');
    }

    // Words people use for each service, mapped to a category.
    $keywords = [
        'carpenter'   => ['carpenter', 'wood', 'furniture', 'door', 'window', 'cabinet', 'table', 'chair', 'shelf', 'wardrobe'],
        'plumber'     => ['plumb', 'leak', 'pipe', 'tap', 'faucet', 'toilet', 'drain', 'water tank', 'sink', 'bathroom'],
        'electrician' => ['electric', 'wiring', 'wire', 'light', 'switch', 'socket', 'power', 'fan', 'inverter', 'solar', 'fuse'],
        'barber'      => ['barber', 'haircut', 'hair', 'shave', 'beard', 'trim'],
        'painter'     => ['paint', 'wall colour', 'wall color', 'ceiling'],
        'cleaner'     => ['clean', 'dust', 'maid', 'housekeep', 'wash'],
        'gardener'    => ['garden', 'lawn', 'grass', 'plant', 'tree', 'landscap'],
        'mechanic'    => ['mechanic', 'car', 'bike', 'motorcycle', 'scooter', 'engine', 'tyre', 'tire', 'vehicle', 'brake'],
    ];
    foreach ($keywords as $slug => $words) {
        foreach ($words as $word) {
            // Short words must match whole (so "car" doesn't match "care"); longer ones match as prefixes.
            $suffix = mb_strlen($word) <= 4 ? '(s|es|ing|ed)?\b' : '';
            if (preg_match('/\b' . preg_quote($word, '/') . $suffix . '/u', $msg)) {
                return suggest_providers($slug);
            }
        }
    }

    if (preg_match('/\b(hi|hello|hey|namaste|good (morning|afternoon|evening))\b/u', $msg)) {
        $name = current_user()['name'] ?? null;
        return reply(($name ? "Namaste, $name! " : 'Namaste! ') . 'Tell me what needs fixing and I will find the right professional for you.');
    }
    if (preg_match('/\b(service|services|what do you|offer|categories)\b/u', $msg)) {
        $labels = implode(', ', array_column(CATEGORIES, 'label'));
        return reply("We have: $labels. Which one do you need?", [['label' => 'See all services', 'url' => 'services.php']]);
    }
    if (preg_match('/\b(sign ?up|register|account|log ?in|sign ?in)\b/u', $msg)) {
        return current_user()
            ? reply('You are already signed in. Your dashboard shows your requests.', [['label' => 'My dashboard', 'url' => 'dashboard.php']])
            : reply('You can create a free account in a few seconds.', [['label' => 'Sign up', 'url' => 'signup.php'], ['label' => 'Sign in', 'url' => 'signin.php']]);
    }
    if (preg_match('/\b(pro|professional|work for|join|list my|job|earn)\b/u', $msg)) {
        return reply('Are you a professional? List your services on FixIt and get job requests from customers.', [['label' => 'Become a pro', 'url' => 'become_pro.php']]);
    }
    if (preg_match('/\b(request|book|hire|status|my order)\b/u', $msg)) {
        return reply('Open a professional\'s profile and press "Request service". You can track every request on your dashboard.', [['label' => 'My dashboard', 'url' => 'dashboard.php']]);
    }
    if (preg_match('/\b(contact|support|help|phone|email|complain)\b/u', $msg)) {
        return reply('You can reach our team at support@fixit.com or +977 9818749730, or send us a message.', [['label' => 'Contact us', 'url' => 'contact.php']]);
    }
    if (preg_match('/\b(price|cost|charge|rate|fee|how much)\b/u', $msg)) {
        return reply('Prices depend on the job. Send a request to a professional and they will call you with a quote. Using FixIt is free.');
    }
    if (preg_match('/\b(thank|thanks|dhanyabad|ok|great)\b/u', $msg)) {
        return reply('Happy to help! Anything else you need fixed?');
    }

    return reply('Sorry, I didn\'t get that. Try telling me the problem, like "my tap is leaking" or "I need a haircut".',
        [['label' => 'Browse all services', 'url' => 'services.php']]);
}

function suggest_providers(string $slug): array
{
    $stmt = db()->prepare('
        SELECT p.id, p.name, ROUND(AVG(r.rating), 1) AS avg_rating
        FROM providers p LEFT JOIN reviews r ON r.provider_id = p.id
        WHERE p.category = ?
        GROUP BY p.id ORDER BY avg_rating DESC, p.name LIMIT 3
    ');
    $stmt->execute([$slug]);
    $providers = $stmt->fetchAll();
    $label = CATEGORIES[$slug]['label'];

    if (!$providers) {
        return reply("Sounds like you need a $label, but none are listed yet. Check back soon!");
    }
    $links = array_map(fn ($p) => [
        'label' => $p['name'] . ($p['avg_rating'] ? " ★ {$p['avg_rating']}" : ''),
        'url'   => 'profile.php?id=' . $p['id'],
    ], $providers);
    $links[] = ['label' => "All {$label}s", 'url' => 'providers.php?category=' . $slug];

    return reply("Sounds like you need a $label. Here are our top-rated ones:", $links);
}

function reply(string $text, array $links = []): array
{
    return ['reply' => $text, 'links' => $links];
}
