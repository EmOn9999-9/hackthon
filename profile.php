<?php
require_once __DIR__ . '/includes/auth.php';

$id = (int) ($_GET['id'] ?? 0);
$stmt = db()->prepare('SELECT * FROM providers WHERE id = ?');
$stmt->execute([$id]);
$provider = $stmt->fetch();

$reviewError = null;
$requestErrors = [];
$request = ['details' => '', 'phone' => '', 'address' => '', 'preferred_on' => ''];
$isOwnProfile = $provider && current_user() && (int) $provider['user_id'] === (int) current_user()['id'];

if ($provider && $_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['action'] ?? '') === 'request') {
    check_csrf();
    $user = require_login();
    foreach ($request as $key => $_) {
        $request[$key] = trim($_POST[$key] ?? '');
    }
    if ($isOwnProfile) {
        $requestErrors[] = "You can't request your own service.";
    }
    if (mb_strlen($request['details']) < 10) {
        $requestErrors[] = 'Please describe the job in a bit more detail.';
    }
    if (!preg_match('/^\+?[0-9 \-]{7,20}$/', $request['phone'])) {
        $requestErrors[] = 'Please enter a valid phone number.';
    }
    if ($request['address'] === '') {
        $requestErrors[] = 'Please enter the address where the work is needed.';
    }
    if ($request['preferred_on'] !== '' && (!strtotime($request['preferred_on']) || $request['preferred_on'] < date('Y-m-d'))) {
        $requestErrors[] = 'Please pick a date from today onwards.';
    }
    if (!$requestErrors) {
        db()->prepare('INSERT INTO service_requests (provider_id, user_id, details, phone, address, preferred_on) VALUES (?, ?, ?, ?, ?, ?)')
            ->execute([$id, $user['id'], $request['details'], $request['phone'], $request['address'], $request['preferred_on'] ?: null]);
        flash('Request sent to ' . $provider['name'] . '! Track it on your dashboard.');
        redirect('profile.php?id=' . $id);
    }
} elseif ($provider && $_SERVER['REQUEST_METHOD'] === 'POST') {
    check_csrf();
    $user = require_login();
    $rating = (int) ($_POST['rating'] ?? 0);
    $comment = trim($_POST['comment'] ?? '');

    if ($isOwnProfile) {
        $reviewError = "You can't review yourself.";
    } elseif ($rating < 1 || $rating > 5) {
        $reviewError = 'Please choose a rating from 1 to 5.';
    } elseif ($comment === '') {
        $reviewError = 'Please write a short comment.';
    } else {
        db()->prepare('INSERT INTO reviews (provider_id, user_id, rating, comment) VALUES (?, ?, ?, ?)')
            ->execute([$id, $user['id'], $rating, $comment]);
        flash('Thanks! Your review was posted.');
        redirect('profile.php?id=' . $id);
    }
}

if ($provider) {
    $stmt = db()->prepare('
        SELECT r.rating, r.comment, r.created_at, u.name AS reviewer
        FROM reviews r JOIN users u ON u.id = r.user_id
        WHERE r.provider_id = ?
        ORDER BY r.created_at DESC, r.id DESC
    ');
    $stmt->execute([$id]);
    $reviews = $stmt->fetchAll();
    $avg = $reviews ? round(array_sum(array_column($reviews, 'rating')) / count($reviews), 1) : null;
} else {
    http_response_code(404);
}

function stars(float $rating): string
{
    $full = (int) round($rating);
    return str_repeat('★', $full) . str_repeat('☆', 5 - $full);
}

include 'header.php';
?>

<?php if (!$provider): ?>
    <div class="max-w-xl mx-auto p-10 bg-white/80 shadow-lg rounded-lg mt-16 mb-16 text-center">
        <h1 class="text-3xl font-bold mb-4">Profile not found</h1>
        <p class="text-gray-700 mb-6">We couldn't find that professional.</p>
        <a href="services.php" class="bg-[#497D74] text-white px-6 py-2 rounded-full hover:bg-[#3a645d]">Browse services</a>
    </div>
<?php else: ?>
    <!-- Profile Section -->
    <div class="max-w-4xl mx-auto p-6 bg-black bg-opacity-20 shadow-lg rounded-lg mt-10 mb-16">
        <!-- Profile Photo -->
        <div class="flex justify-center">
            <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-gray-200 bg-white">
                <img src="<?= e($provider['photo']) ?>" alt="<?= e($provider['name']) ?>" class="w-full h-full object-cover">
            </div>
        </div>

        <!-- Name and Rating -->
        <div class="text-center mt-6">
            <h1 class="text-3xl font-bold"><?= e($provider['name']) ?></h1>
            <p class="text-gray-700 mt-1">
                <a href="providers.php?category=<?= e($provider['category']) ?>" class="hover:underline">
                    <?= e(CATEGORIES[$provider['category']]['label'] ?? ucfirst($provider['category'])) ?>
                </a>
            </p>
            <div class="flex items-center justify-center mt-2">
                <?php if ($avg !== null): ?>
                    <span class="text-yellow-400 text-2xl"><?= stars($avg) ?></span>
                    <span class="text-gray-600 ml-2"><?= e(number_format($avg, 1)) ?>/5.0 (<?= count($reviews) ?>)</span>
                <?php else: ?>
                    <span class="text-gray-600">No reviews yet</span>
                <?php endif; ?>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-center gap-3 mt-6">
            <?php if ($isOwnProfile): ?>
                <a href="dashboard.php" class="bg-[#00ADB5] text-white px-6 py-2 rounded-full hover:opacity-90 transition duration-300 transform hover:scale-105">
                    <i class="ri-edit-line mr-2"></i> Edit my profile
                </a>
            <?php else: ?>
                <a href="#request" class="bg-[#00ADB5] text-white px-6 py-2 rounded-full hover:opacity-90 transition duration-300 transform hover:scale-105">
                    <i class="ri-tools-line mr-2"></i> Request service
                </a>
            <?php endif; ?>
            <a href="mailto:<?= e($provider['email']) ?>" class="bg-[#497D74] text-white px-6 py-2 rounded-full hover:bg-[#3a645d] transition duration-300 transform hover:scale-105">
                <i class="ri-mail-line mr-2"></i> Message
            </a>
        </div>

        <!-- Contact Section -->
        <div class="mt-8">
            <h2 class="text-xl font-semibold">Contact Information</h2>
            <div class="mt-4 space-y-2">
                <p class="text-gray-700"><i class="ri-phone-line mr-2"></i> Phone: <a href="tel:<?= e(str_replace(' ', '', $provider['phone'])) ?>" class="text-[#497D74] hover:underline"><?= e($provider['phone']) ?></a></p>
                <p class="text-gray-700"><i class="ri-mail-line mr-2"></i> Email: <a href="mailto:<?= e($provider['email']) ?>" class="text-[#497D74] hover:underline"><?= e($provider['email']) ?></a></p>
            </div>
        </div>

        <!-- Bio Section -->
        <div class="mt-8">
            <h2 class="text-xl font-semibold">Bio</h2>
            <p class="text-gray-700 mt-2"><?= e($provider['bio']) ?></p>
        </div>

        <?php if (!$isOwnProfile): ?>
        <!-- Request Service Section -->
        <div class="mt-8" id="request">
            <h2 class="text-xl font-semibold">Request this service</h2>
            <div class="bg-gray-50 p-4 rounded-lg mt-4">
                <?php if (current_user()): ?>
                    <form method="post" action="profile.php?id=<?= (int) $provider['id'] ?>#request" class="space-y-3">
                        <?= csrf_field() ?>
                        <input type="hidden" name="action" value="request">
                        <?php if ($requestErrors): ?>
                            <div class="text-red-500 text-sm space-y-1">
                                <?php foreach ($requestErrors as $error): ?><p><?= e($error) ?></p><?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <textarea name="details" rows="3" placeholder="What do you need done?" class="w-full px-3 py-2 border rounded-lg" required><?= e($request['details']) ?></textarea>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                            <input type="tel" name="phone" value="<?= e($request['phone']) ?>" placeholder="Your phone number" class="px-3 py-2 border rounded-lg" required>
                            <input type="text" name="address" value="<?= e($request['address']) ?>" placeholder="Address" class="px-3 py-2 border rounded-lg" required>
                            <input type="date" name="preferred_on" value="<?= e($request['preferred_on']) ?>" min="<?= date('Y-m-d') ?>" class="px-3 py-2 border rounded-lg" title="Preferred date (optional)">
                        </div>
                        <button type="submit" class="bg-[#00ADB5] text-white px-6 py-2 rounded-full hover:opacity-90">Send request</button>
                    </form>
                <?php else: ?>
                    <p class="text-gray-700"><a href="signin.php" class="text-[#497D74] underline">Sign in</a> to request this service.</p>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- Reviews Section -->
        <div class="mt-8">
            <h2 class="text-xl font-semibold">Reviews</h2>

            <!-- Write a review -->
            <div class="bg-gray-50 p-4 rounded-lg mt-4">
                <?php if ($isOwnProfile): ?>
                    <p class="text-gray-700">This is your profile. Reviews come from your customers.</p>
                <?php elseif (current_user()): ?>
                    <form method="post" action="profile.php?id=<?= (int) $provider['id'] ?>" class="space-y-3">
                        <?= csrf_field() ?>
                        <p class="font-semibold">Leave a review</p>
                        <select name="rating" class="w-full px-3 py-2 border rounded-lg" required>
                            <option value="">Your rating…</option>
                            <?php for ($i = 5; $i >= 1; $i--): ?>
                                <option value="<?= $i ?>"><?= str_repeat('★', $i) ?> (<?= $i ?>)</option>
                            <?php endfor; ?>
                        </select>
                        <textarea name="comment" rows="3" placeholder="How was your experience?" class="w-full px-3 py-2 border rounded-lg" required></textarea>
                        <?php if ($reviewError): ?><p class="text-red-500 text-sm"><?= e($reviewError) ?></p><?php endif; ?>
                        <button type="submit" class="bg-[#497D74] text-white px-6 py-2 rounded-full hover:bg-[#3a645d]">Post review</button>
                    </form>
                <?php else: ?>
                    <p class="text-gray-700"><a href="signin.php" class="text-[#497D74] underline">Sign in</a> to leave a review.</p>
                <?php endif; ?>
            </div>

            <div class="space-y-4 mt-4">
                <?php foreach ($reviews as $review): ?>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <div class="flex items-center">
                            <div class="w-8 h-8 rounded-full bg-[#00ADB5] text-white flex items-center justify-center font-semibold">
                                <?= e(mb_strtoupper(mb_substr($review['reviewer'], 0, 1))) ?>
                            </div>
                            <div class="ml-3">
                                <p class="font-semibold"><?= e($review['reviewer']) ?> <span class="text-yellow-400"><?= stars($review['rating']) ?></span></p>
                                <p class="text-sm text-gray-600"><?= e(date('M j, Y', strtotime($review['created_at']))) ?></p>
                            </div>
                        </div>
                        <p class="text-gray-700 mt-2"><?= nl2br(e($review['comment'])) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php include 'footer.php'; ?>
