<?php include 'header.php'; ?>

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

<?php include 'footer.php'; ?>