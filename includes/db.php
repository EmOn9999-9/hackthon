<?php
// Database connection (SQLite via PDO).
// The database file is created automatically in data/ on first run,
// together with the tables and some sample providers.

const CATEGORIES = [
    'carpenter'   => ['label' => 'Carpenter',   'logo' => 'Services_img/carpenter_logo.jpg',   'about' => 'Skilled carpenters for furniture, repairs, and custom woodwork.'],
    'plumber'     => ['label' => 'Plumber',     'logo' => 'Services_img/plumber_logo.jpg',     'about' => 'Expert plumbers for leaks, installations, and maintenance.'],
    'electrician' => ['label' => 'Electrician', 'logo' => 'Services_img/electrician_logo.jpg', 'about' => 'Certified electricians for wiring, repairs, and installations.'],
    'barber'      => ['label' => 'Barber',      'logo' => 'Services_img/barber_logo.jpg',      'about' => 'Professional barbers for haircuts, shaves, and grooming.'],
    'painter'     => ['label' => 'Painter',     'logo' => 'Services_img/painter_logo.jpg',     'about' => 'Experienced painters for walls, ceilings, and exteriors.'],
    'cleaner'     => ['label' => 'Cleaner',     'logo' => 'Services_img/cleaner_logo.jpg',     'about' => 'Professional cleaners for homes, offices, and more.'],
    'gardener'    => ['label' => 'Gardener',    'logo' => 'Services_img/gardener_logo.avif',   'about' => 'Expert gardeners for landscaping and lawn care.'],
    'mechanic'    => ['label' => 'Mechanic',    'logo' => 'Services_img/mechanic_logo.avif',   'about' => 'Skilled mechanics for vehicle repairs and maintenance.'],
];

function db(): PDO
{
    static $pdo = null;
    if ($pdo !== null) {
        return $pdo;
    }

    $dir = __DIR__ . '/../data';
    if (!is_dir($dir)) {
        mkdir($dir, 0775, true);
    }

    $pdo = new PDO('sqlite:' . $dir . '/fixit.sqlite', null, null, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
    $pdo->exec('PRAGMA foreign_keys = ON');

    migrate($pdo);
    return $pdo;
}

function migrate(PDO $pdo): void
{
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS users (
            id            INTEGER PRIMARY KEY AUTOINCREMENT,
            name          TEXT NOT NULL,
            email         TEXT NOT NULL UNIQUE,
            password_hash TEXT NOT NULL,
            created_at    TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP
        );
        CREATE TABLE IF NOT EXISTS providers (
            id         INTEGER PRIMARY KEY AUTOINCREMENT,
            name       TEXT NOT NULL,
            category   TEXT NOT NULL,
            phone      TEXT,
            email      TEXT,
            bio        TEXT,
            photo      TEXT,
            created_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP
        );
        CREATE TABLE IF NOT EXISTS reviews (
            id          INTEGER PRIMARY KEY AUTOINCREMENT,
            provider_id INTEGER NOT NULL REFERENCES providers(id) ON DELETE CASCADE,
            user_id     INTEGER NOT NULL REFERENCES users(id) ON DELETE CASCADE,
            rating      INTEGER NOT NULL CHECK (rating BETWEEN 1 AND 5),
            comment     TEXT NOT NULL,
            created_at  TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP
        );
        CREATE TABLE IF NOT EXISTS contact_messages (
            id         INTEGER PRIMARY KEY AUTOINCREMENT,
            name       TEXT NOT NULL,
            email      TEXT NOT NULL,
            message    TEXT NOT NULL,
            created_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP
        );
        CREATE TABLE IF NOT EXISTS service_requests (
            id           INTEGER PRIMARY KEY AUTOINCREMENT,
            provider_id  INTEGER NOT NULL REFERENCES providers(id) ON DELETE CASCADE,
            user_id      INTEGER NOT NULL REFERENCES users(id) ON DELETE CASCADE,
            details      TEXT NOT NULL,
            phone        TEXT NOT NULL,
            address      TEXT NOT NULL,
            preferred_on TEXT,
            status       TEXT NOT NULL DEFAULT 'pending'
                         CHECK (status IN ('pending', 'accepted', 'declined', 'completed')),
            created_at   TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP
        );
    ");

    // Providers created through "Become a pro" are linked to a user account.
    $columns = array_column($pdo->query('PRAGMA table_info(providers)')->fetchAll(), 'name');
    if (!in_array('user_id', $columns, true)) {
        $pdo->exec('ALTER TABLE providers ADD COLUMN user_id INTEGER REFERENCES users(id) ON DELETE SET NULL');
        $pdo->exec('CREATE UNIQUE INDEX IF NOT EXISTS providers_user_id ON providers(user_id)');
    }

    if ((int) $pdo->query('SELECT COUNT(*) FROM providers')->fetchColumn() === 0) {
        seed($pdo);
    }
}

function seed(PDO $pdo): void
{
    $providers = [
        ['Ram Bahadur Thapa',  'carpenter',   'images/carpenter1.avif',   'Furniture maker with 10 years of experience in custom cabinets and home renovation.'],
        ['Sita Gurung',        'carpenter',   'images/carpenter2.avif',   'Specialises in wooden doors, windows and kitchen fittings.'],
        ['Hari Shrestha',      'carpenter',   'images/carpenter3.avif',   'Flooring and deck installation, quick repairs on short notice.'],
        ['Krishna Adhikari',   'plumber',     'images/plumber1.jpg',      'Leak fixing, bathroom fittings and water tank installation.'],
        ['Bikash Magar',       'plumber',     'images/plumber2.jpg',      'Licensed plumber for new buildings and maintenance contracts.'],
        ['Suman Rai',          'plumber',     'images/plumber3.jpg',      'Available 24/7 for emergency pipe bursts and blockages.'],
        ['Prakash Karki',      'electrician', 'images/electrician1.jpg',  'House wiring, inverter and solar panel installation.'],
        ['Anil Tamang',        'electrician', 'images/electrician2.jpg',  'Certified electrician for residential and commercial work.'],
        ['Deepak Bhandari',    'electrician', 'images/electrician3.jpg',  'Appliance repair, lighting design and safety checks.'],
        ['Rajesh Sharma',      'barber',      'Services_img/barber.png',      'Classic and modern haircuts, home visits available.'],
        ['Kamal Poudel',       'painter',     'Services_img/painter.png',     'Interior and exterior painting, waterproof coatings.'],
        ['Gita Khadka',        'cleaner',     'Services_img/cleaner.png',     'Deep cleaning for homes and offices, eco-friendly products.'],
        ['Mohan Lama',         'gardener',    'Services_img/gardener.png',    'Garden design, lawn care and seasonal planting.'],
        ['Sanjay Yadav',       'mechanic',    'Services_img/Mechanic.png',    'Bike and car servicing, engine diagnostics and repairs.'],
    ];

    $insert = $pdo->prepare('INSERT INTO providers (name, category, phone, email, bio, photo) VALUES (?, ?, ?, ?, ?, ?)');
    foreach ($providers as $i => [$name, $category, $photo, $bio]) {
        $email = strtolower(str_replace(' ', '.', $name)) . '@fixit.test';
        $phone = '+977 98' . str_pad((string) (10000000 + $i * 1234567), 8, '0', STR_PAD_LEFT);
        $insert->execute([$name, $category, $phone, $email, $bio, $photo]);
    }

    // A demo customer account (see README) with a couple of reviews.
    $pdo->prepare('INSERT INTO users (name, email, password_hash) VALUES (?, ?, ?)')
        ->execute(['Demo User', 'demo@fixit.test', password_hash('demo1234', PASSWORD_DEFAULT)]);
    $demoId = (int) $pdo->lastInsertId();

    $review = $pdo->prepare('INSERT INTO reviews (provider_id, user_id, rating, comment) VALUES (?, ?, ?, ?)');
    $review->execute([1, $demoId, 5, 'Built a beautiful wardrobe for us, on time and on budget.']);
    $review->execute([4, $demoId, 4, 'Fixed our kitchen leak quickly. Friendly and professional.']);
    $review->execute([7, $demoId, 5, 'Rewired the whole flat, very neat work.']);
}

/** The provider listing owned by a user, if they have one. */
function provider_for_user(int $userId): ?array
{
    $stmt = db()->prepare('SELECT * FROM providers WHERE user_id = ?');
    $stmt->execute([$userId]);
    return $stmt->fetch() ?: null;
}

/**
 * Save an uploaded profile photo into uploads/ and return its path.
 * Returns null when no file was chosen; throws on an invalid file.
 */
function save_photo_upload(string $field): ?string
{
    $file = $_FILES[$field] ?? null;
    if (!$file || $file['error'] === UPLOAD_ERR_NO_FILE) {
        return null;
    }
    if ($file['error'] !== UPLOAD_ERR_OK || $file['size'] > 2 * 1024 * 1024) {
        throw new RuntimeException('Photo upload failed. Use an image under 2 MB.');
    }
    $types = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/webp' => 'webp'];
    $mime = (new finfo(FILEINFO_MIME_TYPE))->file($file['tmp_name']);
    if (!isset($types[$mime])) {
        throw new RuntimeException('Photo must be a JPG, PNG or WebP image.');
    }
    $dir = __DIR__ . '/../uploads';
    if (!is_dir($dir)) {
        mkdir($dir, 0775, true);
    }
    $name = bin2hex(random_bytes(12)) . '.' . $types[$mime];
    if (!move_uploaded_file($file['tmp_name'], "$dir/$name")) {
        throw new RuntimeException('Could not save the photo.');
    }
    return "uploads/$name";
}
