<?php require_once __DIR__ . '/includes/auth.php'; $user = current_user(); $notice = flash(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FixIt - Find trusted local professionals</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- link for card  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css"
        integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="h-screen bg-[url('images/backgroundimg.jpg')] bg-cover bg-center">
   
    <!-- Navbar here -->
    <nav id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <a href="home.php" class="flex items-center text-lg font-semibold text-gray-700">
            <img src="images/logo2.png" alt="logo" class="h-20">
            </a>
        </div>

        <!-- Hamburger Menu (Mobile) -->
        <button id="mobile-menu-button" aria-label="Open menu" class="md:hidden ml-2 inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-gray-900 focus:outline-none">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Navbar Menu (Centered) -->
        <div class="hidden md:flex items-center space-x-4 flex-grow justify-center">
            <a href="home.php" class="text-gray-700 hover:text-gray-900">Home</a>

            <!-- Services Dropdown -->
            <div class="relative dropdown">
            <a href="services.php" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium flex items-center">
                Services
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </a>
            <div class="dropdown-menu absolute bg-white bg-opacity-50 shadow-lg rounded-md mt-2 py-2 w-48">
                <?php foreach (CATEGORIES as $slug => $category): ?>
                <a href="providers.php?category=<?= e($slug) ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><?= e($category['label']) ?></a>
                <?php endforeach; ?>
            </div>
            </div>

            <!-- About Us -->
            <a href="about_us.php" class="text-gray-700 hover:text-gray-900">About Us</a>
        </div>

        <!-- Account + Contact Us Button (Right Side) -->
        <div class="hidden md:flex items-center gap-4">
            <?php if ($user): ?>
                <a href="dashboard.php" class="text-gray-700 hover:text-gray-900">Hi, <?= e($user['name']) ?> · Dashboard</a>
                <a href="logout.php" class="text-gray-700 hover:text-gray-900 underline">Logout</a>
            <?php else: ?>
                <a href="become_pro.php" class="text-gray-700 hover:text-gray-900">Become a pro</a>
                <a href="signin.php" class="text-gray-700 hover:text-gray-900">Sign in</a>
            <?php endif; ?>
            <a href="contact.php">
                <button class="group/button relative inline-flex items-center justify-center overflow-hidden rounded-md bg-gray-800/30 backdrop-blur-lg px-6 py-2 text-base font-semibold text-white transition-all duration-300 ease-in-out hover:scale-110 hover:shadow-xl hover:shadow-gray-600/50 border border-white/20">
                    <span class="text-lg">Contact Us</span>
                    <div class="absolute inset-0 flex h-full w-full justify-center [transform:skew(-13deg)_translateX(-100%)] group-hover/button:duration-1000 group-hover/button:[transform:skew(-13deg)_translateX(100%)]">
                        <div class="relative h-full w-10 bg-white/20"></div>
                    </div>
                </button>
            </a>
        </div>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white/95 shadow-lg mx-4 rounded-lg px-4 py-3 space-y-2">
        <a href="home.php" class="block text-gray-700">Home</a>
        <a href="services.php" class="block text-gray-700">Services</a>
        <a href="about_us.php" class="block text-gray-700">About Us</a>
        <a href="contact.php" class="block text-gray-700">Contact Us</a>
        <?php if ($user): ?>
            <a href="dashboard.php" class="block text-gray-700">Dashboard</a>
            <a href="logout.php" class="block text-gray-700">Logout</a>
        <?php else: ?>
            <a href="become_pro.php" class="block text-gray-700">Become a pro</a>
            <a href="signin.php" class="block text-gray-700">Sign in</a>
        <?php endif; ?>
    </div>
    </nav>

    <?php if ($notice): ?>
    <div class="max-w-3xl mx-auto mt-4 px-4">
        <div class="bg-white/90 border border-[#00ADB5] text-gray-800 rounded-lg px-4 py-3 shadow"><?= e($notice) ?></div>
    </div>
    <?php endif; ?>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('mobile-menu-button').addEventListener('click', () => {
                document.getElementById('mobile-menu').classList.toggle('hidden');
            });

            const dropdowns = document.querySelectorAll('.dropdown');

            dropdowns.forEach(dropdown => {
                const menu = dropdown.querySelector('.dropdown-menu');
                let timeoutId;

                // Show dropdown on hover
                dropdown.addEventListener('mouseenter', () => {
                    clearTimeout(timeoutId); // Clear any existing timeout
                    menu.style.display = 'block';
                    setTimeout(() => {
                        menu.style.opacity = '1';
                        menu.style.transform = 'translateY(0)';
                    }, 10);
                });

                // Hide dropdown after a delay when mouse leaves
                dropdown.addEventListener('mouseleave', () => {
                    timeoutId = setTimeout(() => {
                        menu.style.opacity = '0';
                        menu.style.transform = 'translateY(-10px)';
                        setTimeout(() => {
                            menu.style.display = 'none';
                        }, 300); // Match the transition duration
                    }, 500); // Delay before closing (500ms)
                });

                // Keep dropdown open if the mouse re-enters before the delay ends
                menu.addEventListener('mouseenter', () => {
                    clearTimeout(timeoutId);
                });

                // Close dropdown when mouse leaves the menu
                menu.addEventListener('mouseleave', () => {
                    timeoutId = setTimeout(() => {
                        menu.style.opacity = '0';
                        menu.style.transform = 'translateY(-10px)';
                        setTimeout(() => {
                            menu.style.display = 'none';
                        }, 300); // Match the transition duration
                    }, 500); // Delay before closing (500ms)
                });
            });

            // Scroll effect for navbar
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 40) { 
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        });

    </script>
