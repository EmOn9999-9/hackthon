<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
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

        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: transparent;
            transition: background 0.3s ease;
        }

        nav.scrolled {
            background-color: rgba(60, 139, 161, 0.17);
            transition: opacity 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            backdrop-filter: blur(5px);
            width: 80%;
            left: 10%;
            right: 10%;
        }

        body {
            padding-top: 64px;
        }

        h1 {
            font-family: urbanist;
        }
    </style>
</head>
<body class="h-screen bg-[url('images/backgroundimg.jpg')] bg-cover bg-center">
   
    <!-- Navbar here -->
    <nav id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex">
                    <!-- Logo here -->
                    <a href="home.php" class="flex-shrink-0 flex items-center text-lg font-semibold text-gray-700">
                        <img src="images/logo2.png" alt="logo" class="h-20">
                    </a>
                    <!-- Hamburger Menu (Mobile) -->
                    <button class="md:hidden ml-2 inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-gray-900 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

                <!-- Navbar Menu -->
                <div class="hidden md:flex items-center space-x-4 flex-grow justify-center">
                    <a href="home.php">Home</a>

                    <!-- Services Dropdown -->
                    <div class="relative dropdown">
                        <a href="services.php" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium flex items-center">
                            Services
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="dropdown-menu absolute bg-white bg-opacity-30 shadow-lg rounded-md mt-2 py-2 w-48">
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
                        <div class="dropdown-menu absolute bg-white bg-opacity-30 shadow-lg rounded-md mt-2 py-2 w-48">
                            <a href="about_us.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">About us</a>
                            <a href="contact.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Contact</a>
                        </div>
                    </div>
                </div>

                <!-- Button on the right side -->
                <a href="contact.php"> 
                    <button class="w-40 h-10 bg-white cursor-pointer rounded-3xl border-2 border-[#9748FF] shadow-[inset_0px_-2px_0px_1px_#9748FF] group hover:bg-[#9748FF] transition duration-300 ease-in-out">
                    <span class="font-medium text-[#333] group-hover:text-white">Contact Us</span>
                    </button>
                </a>
            </div>
        </div>
    </nav>

    <!-- JavaScript -->
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
