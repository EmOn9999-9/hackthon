<?php
require_once __DIR__ . '/includes/auth.php';

$slug = $_GET['category'] ?? '';
$category = CATEGORIES[$slug] ?? null;

if ($category) {
    $stmt = db()->prepare('
        SELECT p.*, ROUND(AVG(r.rating), 1) AS avg_rating, COUNT(r.id) AS review_count
        FROM providers p
        LEFT JOIN reviews r ON r.provider_id = p.id
        WHERE p.category = ?
        GROUP BY p.id
        ORDER BY avg_rating DESC, p.name
    ');
    $stmt->execute([$slug]);
    $providers = $stmt->fetchAll();
} else {
    http_response_code(404);
}

include 'header.php';
?>

    <header class="h-[300px] flex items-center justify-center relative">
        <div class="text-center relative z-10 animate-fadeInUp">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                <?= $category ? 'Hire a ' . e($category['label']) : 'Service not found' ?>
            </h1>
            <p class="text-lg text-gray-200">
                <?= $category ? e($category['about']) : 'Pick a service from the list below.' ?>
            </p>
        </div>
    </header>

    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <?php if (!$category): ?>
                <div class="flex flex-wrap justify-center gap-3">
                    <?php foreach (CATEGORIES as $s => $c): ?>
                        <a href="providers.php?category=<?= e($s) ?>" class="px-4 py-2 rounded-full bg-[#00ADB5] text-white hover:opacity-90"><?= e($c['label']) ?></a>
                    <?php endforeach; ?>
                </div>
            <?php elseif (!$providers): ?>
                <p class="text-center text-gray-600">No <?= e(strtolower($category['label'])) ?>s are listed yet. Check back soon!</p>
            <?php else: ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($providers as $p): ?>
                        <a href="profile.php?id=<?= (int) $p['id'] ?>" class="block bg-white rounded-lg shadow-lg overflow-hidden border-4 border-[#EEEEEE] transition-all duration-300 hover:-translate-y-2.5">
                            <img src="<?= e($p['photo']) ?>" alt="<?= e($p['name']) ?>" class="w-full h-56 object-cover">
                            <div class="p-6">
                                <h2 class="text-xl font-bold mb-1"><?= e($p['name']) ?></h2>
                                <p class="text-yellow-500 mb-2">
                                    <?php if ($p['review_count']): ?>
                                        <?= str_repeat('★', (int) round($p['avg_rating'])) . str_repeat('☆', 5 - (int) round($p['avg_rating'])) ?>
                                        <span class="text-gray-600 text-sm"><?= e($p['avg_rating']) ?> (<?= (int) $p['review_count'] ?> review<?= $p['review_count'] == 1 ? '' : 's' ?>)</span>
                                    <?php else: ?>
                                        <span class="text-gray-500 text-sm">No reviews yet</span>
                                    <?php endif; ?>
                                </p>
                                <p class="text-gray-600"><?= e($p['bio']) ?></p>
                                <span class="inline-block mt-4 bg-[#00ADB5] text-white px-4 py-2 rounded">View profile</span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

<?php include 'footer.php'; ?>
