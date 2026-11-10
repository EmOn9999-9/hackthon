<?php
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/includes/provider_input.php';

$user = require_login();
$provider = provider_for_user($user['id']);
$errors = [];

// Allowed status changes a professional can make: from => [to, ...]
const TRANSITIONS = ['pending' => ['accepted', 'declined'], 'accepted' => ['completed']];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    check_csrf();
    $action = $_POST['action'] ?? '';

    if ($action === 'update_profile' && $provider) {
        [$values, $errors, $photo] = read_provider_form();
        if (!$errors) {
            db()->prepare('UPDATE providers SET category = ?, phone = ?, bio = ?, photo = COALESCE(?, photo) WHERE id = ?')
                ->execute([$values['category'], $values['phone'], $values['bio'], $photo, $provider['id']]);
            flash('Profile updated.');
            redirect('dashboard.php');
        }
    }

    if ($action === 'set_status' && $provider) {
        $stmt = db()->prepare('SELECT status FROM service_requests WHERE id = ? AND provider_id = ?');
        $stmt->execute([(int) ($_POST['request_id'] ?? 0), $provider['id']]);
        $current = $stmt->fetchColumn();
        $next = $_POST['status'] ?? '';
        if ($current && in_array($next, TRANSITIONS[$current] ?? [], true)) {
            db()->prepare('UPDATE service_requests SET status = ? WHERE id = ?')
                ->execute([$next, (int) $_POST['request_id']]);
            flash('Request marked as ' . $next . '.');
        }
        redirect('dashboard.php');
    }

    if ($action === 'cancel') {
        $stmt = db()->prepare("DELETE FROM service_requests WHERE id = ? AND user_id = ? AND status = 'pending'");
        $stmt->execute([(int) ($_POST['request_id'] ?? 0), $user['id']]);
        if ($stmt->rowCount()) {
            flash('Request cancelled.');
        }
        redirect('dashboard.php');
    }
}

$values ??= $provider ? ['category' => $provider['category'], 'phone' => $provider['phone'], 'bio' => $provider['bio']] : null;

$stmt = db()->prepare('
    SELECT sr.*, p.name AS provider_name, p.category, p.phone AS provider_phone
    FROM service_requests sr JOIN providers p ON p.id = sr.provider_id
    WHERE sr.user_id = ? ORDER BY sr.created_at DESC, sr.id DESC
');
$stmt->execute([$user['id']]);
$myRequests = $stmt->fetchAll();

$incoming = [];
if ($provider) {
    $stmt = db()->prepare('
        SELECT sr.*, u.name AS customer_name, u.email AS customer_email
        FROM service_requests sr JOIN users u ON u.id = sr.user_id
        WHERE sr.provider_id = ? ORDER BY sr.created_at DESC, sr.id DESC
    ');
    $stmt->execute([$provider['id']]);
    $incoming = $stmt->fetchAll();
}

const BADGES = [
    'pending'   => 'bg-yellow-100 text-yellow-800',
    'accepted'  => 'bg-blue-100 text-blue-800',
    'declined'  => 'bg-red-100 text-red-800',
    'completed' => 'bg-green-100 text-green-800',
];
function badge(string $status): string
{
    return '<span class="text-xs font-semibold px-2 py-1 rounded-full ' . BADGES[$status] . '">' . e(ucfirst($status)) . '</span>';
}

$submitLabel = 'Save changes';
include 'header.php';
?>
    <div class="max-w-5xl mx-auto px-4 mt-10 mb-16 space-y-8">
        <h1 class="text-3xl font-bold text-white drop-shadow">My dashboard</h1>

        <?php if ($provider): ?>
            <!-- Incoming job requests -->
            <section class="bg-white/90 rounded-lg shadow-lg p-6">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-semibold">Job requests for you</h2>
                    <a href="profile.php?id=<?= (int) $provider['id'] ?>" class="text-[#497D74] underline">View my public profile</a>
                </div>
                <?php if (!$incoming): ?>
                    <p class="text-gray-600">No requests yet. Share your profile link to get your first customer!</p>
                <?php endif; ?>
                <div class="space-y-4">
                    <?php foreach ($incoming as $r): ?>
                        <div class="border rounded-lg p-4">
                            <div class="flex items-center justify-between">
                                <p class="font-semibold"><?= e($r['customer_name']) ?> <span class="text-gray-500 font-normal text-sm">· <?= e(date('M j, Y', strtotime($r['created_at']))) ?></span></p>
                                <?= badge($r['status']) ?>
                            </div>
                            <p class="text-gray-700 mt-2"><?= nl2br(e($r['details'])) ?></p>
                            <p class="text-sm text-gray-600 mt-2">
                                📍 <?= e($r['address']) ?> · 📞 <a class="underline" href="tel:<?= e($r['phone']) ?>"><?= e($r['phone']) ?></a>
                                · ✉️ <a class="underline" href="mailto:<?= e($r['customer_email']) ?>"><?= e($r['customer_email']) ?></a>
                                <?php if ($r['preferred_on']): ?> · 📅 <?= e(date('M j, Y', strtotime($r['preferred_on']))) ?><?php endif; ?>
                            </p>
                            <?php if (!empty(TRANSITIONS[$r['status']])): ?>
                                <form method="post" class="flex gap-2 mt-3">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="action" value="set_status">
                                    <input type="hidden" name="request_id" value="<?= (int) $r['id'] ?>">
                                    <?php foreach (TRANSITIONS[$r['status']] as $next): ?>
                                        <button name="status" value="<?= e($next) ?>" class="px-4 py-1 rounded-full text-white <?= $next === 'declined' ? 'bg-red-500 hover:bg-red-600' : 'bg-[#497D74] hover:bg-[#3a645d]' ?>">
                                            <?= e(['accepted' => 'Accept', 'declined' => 'Decline', 'completed' => 'Mark completed'][$next]) ?>
                                        </button>
                                    <?php endforeach; ?>
                                </form>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- Edit profile -->
            <section class="bg-white/90 rounded-lg shadow-lg p-6">
                <h2 class="text-xl font-semibold mb-4">Edit my professional profile</h2>
                <?php include __DIR__ . '/includes/provider_form.php'; ?>
            </section>
        <?php else: ?>
            <section class="bg-white/90 rounded-lg shadow-lg p-6 flex flex-col md:flex-row items-center justify-between gap-4">
                <div>
                    <h2 class="text-xl font-semibold">Are you a professional?</h2>
                    <p class="text-gray-600">List your services on FixIt and receive job requests from customers.</p>
                </div>
                <a href="become_pro.php" class="bg-[#497D74] text-white px-6 py-2 rounded-full hover:bg-[#3a645d] whitespace-nowrap">Become a pro</a>
            </section>
        <?php endif; ?>

        <!-- Requests I sent -->
        <section class="bg-white/90 rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Services I requested</h2>
            <?php if (!$myRequests): ?>
                <p class="text-gray-600">You haven't requested any services yet. <a href="services.php" class="text-[#497D74] underline">Browse services</a></p>
            <?php endif; ?>
            <div class="space-y-4">
                <?php foreach ($myRequests as $r): ?>
                    <div class="border rounded-lg p-4">
                        <div class="flex items-center justify-between">
                            <p class="font-semibold">
                                <a href="profile.php?id=<?= (int) $r['provider_id'] ?>" class="hover:underline"><?= e($r['provider_name']) ?></a>
                                <span class="text-gray-500 font-normal text-sm">· <?= e(CATEGORIES[$r['category']]['label'] ?? $r['category']) ?> · <?= e(date('M j, Y', strtotime($r['created_at']))) ?></span>
                            </p>
                            <?= badge($r['status']) ?>
                        </div>
                        <p class="text-gray-700 mt-2"><?= nl2br(e($r['details'])) ?></p>
                        <?php if ($r['status'] === 'accepted'): ?>
                            <p class="text-sm text-gray-600 mt-2">They accepted! Call them on <a class="underline" href="tel:<?= e($r['provider_phone']) ?>"><?= e($r['provider_phone']) ?></a> to confirm the details.</p>
                        <?php elseif ($r['status'] === 'pending'): ?>
                            <form method="post" class="mt-3" onsubmit="return confirm('Cancel this request?')">
                                <?= csrf_field() ?>
                                <input type="hidden" name="action" value="cancel">
                                <input type="hidden" name="request_id" value="<?= (int) $r['id'] ?>">
                                <button class="text-sm text-red-600 underline">Cancel request</button>
                            </form>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
<?php include 'footer.php'; ?>
