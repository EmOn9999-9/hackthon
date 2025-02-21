<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeFix - Find Skilled Workers</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
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
<body class="bg-gray-100">
    <!-- Navigation Bar -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-gray-800">HomeFix</span>
                </div>
                <!-- Navigation Links -->
                <div class="hidden md:flex space-x-10">
                    <a href="#" class="text-gray-800 hover:text-gray-600">Home</a>
                    <a href="#services" class="text-gray-800 hover:text-gray-600">Services</a>
                    <a href="#workers" class="text-gray-800 hover:text-gray-600">Workers</a>
                    <a href="#testimonials" class="text-gray-800 hover:text-gray-600">Testimonials</a>
                    <a href="#contact" class="text-gray-800 hover:text-gray-600">Contact</a>
                </div>
                <!-- Sign In Button -->
                <div>
                    <a href="signin.php" class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800">Sign In</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-[url('images/hero-bg.jpg')] bg-cover bg-center h-screen flex items-center justify-center relative">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="text-center relative z-10 animate-fadeInUp">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Find Skilled Workers Near You</h1>
            <p class="text-lg text-gray-200 mb-8">Carpenters, Plumbers, Electricians, and More</p>
            <a href="#services" class="bg-black text-white px-8 py-4 rounded-lg hover:bg-gray-800 text-lg">Explore Services</a>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 animate-fadeInUp">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Carpenter -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center hover-scale animate-scaleIn">
                    <img src="images/carpenter.png" alt="Carpenter" class="w-20 h-20 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Carpenter</h3>
                    <p class="text-gray-600">Skilled carpenters for furniture, repairs, and custom woodwork.</p>
                </div>
                <!-- Plumber -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center hover-scale animate-scaleIn">
                    <img src="images/plumber.png" alt="Plumber" class="w-20 h-20 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Plumber</h3>
                    <p class="text-gray-600">Expert plumbers for leaks, installations, and maintenance.</p>
                </div>
                <!-- Electrician -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center hover-scale animate-scaleIn">
                    <img src="images/electrician.png" alt="Electrician" class="w-20 h-20 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Electrician</h3>
                    <p class="text-gray-600">Certified electricians for wiring, repairs, and installations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Workers Section -->
    <section id="workers" class="py-16 bg-gray-100">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 animate-fadeInUp">Featured Workers</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Worker 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center hover-scale animate-scaleIn">
                    <img src="images/worker1.jpg" alt="Worker 1" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">John Doe</h3>
                    <p class="text-gray-600 mb-4">Carpenter</p>
                    <p class="text-gray-600">⭐️⭐️⭐️⭐️⭐️ (4.9/5)</p>
                </div>
                <!-- Worker 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center hover-scale animate-scaleIn">
                    <img src="images/worker2.jpg" alt="Worker 2" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Jane Smith</h3>
                    <p class="text-gray-600 mb-4">Plumber</p>
                    <p class="text-gray-600">⭐️⭐️⭐️⭐️⭐️ (5.0/5)</p>
                </div>
                <!-- Worker 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center hover-scale animate-scaleIn">
                    <img src="images/worker3.jpg" alt="Worker 3" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Mike Johnson</h3>
                    <p class="text-gray-600 mb-4">Electrician</p>
                    <p class="text-gray-600">⭐️⭐️⭐️⭐️⭐️ (4.8/5)</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 animate-fadeInUp">What Our Clients Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md hover-scale animate-scaleIn">
                    <p class="text-gray-600 mb-4">"HomeFix helped me find a great carpenter for my custom furniture. Highly recommended!"</p>
                    <p class="font-semibold">- Sarah Lee</p>
                </div>
                <!-- Testimonial 2 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md hover-scale animate-scaleIn">
                    <p class="text-gray-600 mb-4">"The plumber was professional and fixed my leaky faucet in no time. Great service!"</p>
                    <p class="font-semibold">- David Brown</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section id="contact" class="py-16 bg-black text-white text-center">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-4 animate-fadeInUp">Need a Skilled Worker?</h2>
            <p class="text-gray-300 mb-8 animate-fadeInUp">Join thousands of satisfied customers and find the perfect professional for your needs.</p>
            <a href="signup.php" class="bg-white text-black px-6 py-3 rounded-lg hover:bg-gray-200 animate-scaleIn">Sign Up Today</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p>&copy; 2023 HomeFix. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>