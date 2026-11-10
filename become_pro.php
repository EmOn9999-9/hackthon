<?php
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/includes/provider_input.php';

$user = require_login();
if (provider_for_user($user['id'])) {
    redirect('dashboard.php');
}

$values = ['category' => $_GET['category'] ?? '', 'phone' => '', 'bio' => ''];
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    check_csrf();
    [$values, $errors, $photo] = read_provider_form();
    if (!$errors) {
        db()->prepare('INSERT INTO providers (user_id, name, category, phone, email, bio, photo) VALUES (?, ?, ?, ?, ?, ?, ?)')
            ->execute([$user['id'], $user['name'], $values['category'], $values['phone'], $user['email'], $values['bio'],
                       $photo ?? CATEGORIES[$values['category']]['logo']]);
        flash('Your profile is live! Customers can now find and contact you.');
        redirect('profile.php?id=' . db()->lastInsertId());
    }
}

$submitLabel = 'Create my profile';
include 'header.php';
?>
    <div class="max-w-2xl mx-auto p-8 bg-white/90 shadow-lg rounded-lg mt-10 mb-16">
        <h1 class="text-3xl font-bold mb-2">Become a FixIt professional</h1>
        <p class="text-gray-600 mb-6">List your services and start getting job requests from customers near you. Your profile will use your account name (<?= e($user['name']) ?>) and email.</p>
        <?php include __DIR__ . '/includes/provider_form.php'; ?>
    </div>
<?php include 'footer.php'; ?>
