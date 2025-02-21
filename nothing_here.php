<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* CSS for smooth dropdown */
        .dropdown-menu {
            display: none;
            opacity: 0;
            transform: translateY(-10px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        /* Custom animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 1s ease-out;
        }

        @keyframes scaleIn {
            from {
                transform: scale(0.9);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .animate-scaleIn {
            animation: scaleIn 0.8s ease-out;
        }

        .hover-scale:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }
    </style>
</head>
<body class="h-screen bg-[url('images/background.jpg')] bg-cover bg-center">
    
    <!-- Navbar here -->
    <nav>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">

                    <!-- Logo here -->
                    <a href="home.php" class="flex-shrink-0 flex items-center text-lg font-semibold text-gray-700">
                        <!-- Increased logo size from h-20 to h-28 -->
                        <img src="images/Flixit.svg" alt="logo" class="h-28">
                    </a>
                    <!-- Hamburger Menu (Mobile) -->
                    <button class="md:hidden ml-2 inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-gray-900 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                

                <!-- Navbar Menu -->
                <div class="hidden md:flex items-center space-x-4">
                    <!-- Services Dropdown -->
                    <div class="relative dropdown">
                        <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium flex items-center">
                            Services
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="dropdown-menu absolute bg-white shadow-lg rounded-md mt-2 py-2 w-48">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Electrician</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Plumber</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Carpenter</a>
                        </div>
                    </div>

                    <!-- More Dropdown -->
                    <div class="relative dropdown">
                        <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium flex items-center">
                            More
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="dropdown-menu absolute bg-white shadow-lg rounded-md mt-2 py-2 w-48">
                            <a href="about_us.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">About us</a>
                            <a href="contact.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- JavaScript for Delayed Dropdown Closing -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
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
                    clearTimeout(timeoutId); // Cancel the closing timeout
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
        });
    </script>
</body>
</html>