<?php include 'header.php'; ?>

<!-- Hero Section -->
<header class="bg-cover bg-center h-screen flex items-center justify-center relative">
    <div class="absolute inset-0"></div>
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
            <div class="bg-[#2cb5a0] p-6 border-4 border-[#7cdacc] rounded-lg shadow-lg text-center text-white font-poppins transition-all duration-300 hover:-translate-y-2.5">
                <!-- User Picture -->
                <div class="w-20 h-20 border-4 border-[#7cdacc] rounded-full overflow-hidden mx-auto flex items-center justify-center">
                    <svg viewBox="0 0 448 512" class="w-10 fill-current">
                        <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path>
                    </svg>
                </div>
                <!-- Client Name -->
                <p class="mt-5 font-semibold text-lg">
                    Jhon Doe
                    <span class="block font-light text-base">CEO of WritBook</span>
                </p>
                <!-- Rating -->
                <div class="relative my-5">
                    <div class="w-full h-0.5 bg-[#7cdacc]"></div>
                    <p class="text-gray-600">⭐️⭐️⭐️⭐️⭐️ (5.0/5)</p>
                </div>
            </div>
            <!-- Worker 2 -->
            <div class="bg-[#2cb5a0] p-6 border-4 border-[#7cdacc] rounded-lg shadow-lg text-center text-white font-poppins transition-all duration-300 hover:-translate-y-2.5">
                <!-- User Picture -->
                <div class="w-20 h-20 border-4 border-[#7cdacc] rounded-full overflow-hidden mx-auto flex items-center justify-center">
                    <svg viewBox="0 0 448 512" class="w-10 fill-current">
                        <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path>
                    </svg>
                </div>
                <!-- Client Name -->
                <p class="mt-5 font-semibold text-lg">
                    Jane Smith
                    <span class="block font-light text-base">Homeowner</span>
                </p>
                <!-- Rating -->
                <div class="relative my-5">
                    <div class="w-full h-0.5 bg-[#7cdacc]"></div>
                    <p class="text-gray-600">⭐️⭐️⭐️⭐️⭐️ (5.0/5)</p>
                </div>
            </div>
            <!-- Worker 3 -->
            <div class="bg-[#2cb5a0] p-6 border-4 border-[#7cdacc] rounded-lg shadow-lg text-center text-white font-poppins transition-all duration-300 hover:-translate-y-2.5">
                <!-- User Picture -->
                <div class="w-20 h-20 border-4 border-[#7cdacc] rounded-full overflow-hidden mx-auto flex items-center justify-center">
                    <svg viewBox="0 0 448 512" class="w-10 fill-current">
                        <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path>
                    </svg>
                </div>
                <!-- Client Name -->
                <p class="mt-5 font-semibold text-lg">
                    Mike Johnson
                    <span class="block font-light text-base">Business Owner</span>
                </p>
                <!-- Rating -->
                <div class="relative my-5">
                    <div class="w-full h-0.5 bg-[#7cdacc]"></div>
                    <p class="text-gray-600">⭐️⭐️⭐️⭐️⭐️ (5.0/5)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 animate-fadeInUp">What Our Clients Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Worker 1 -->
            <div class="bg-[#2cb5a0] p-6 border-4 border-[#7cdacc] rounded-lg shadow-lg text-center text-white font-poppins transition-all duration-300 hover:-translate-y-2.5">
                <!-- User Picture -->
                <div class="w-20 h-20 border-4 border-[#7cdacc] rounded-full overflow-hidden mx-auto flex items-center justify-center">
                    <svg viewBox="0 0 448 512" class="w-10 fill-current">
                        <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path>
                    </svg>
                </div>
                <!-- Client Name -->
                <p class="mt-5 font-semibold text-lg">
                    Sarah Lee
                    <span class="block font-light text-base">Homeowner</span>
                </p>
                <!-- Rating -->
                <div class="relative my-5">
                    <div class="w-full h-0.5 bg-[#7cdacc]"></div>
                    <p class="text-gray-600">⭐️⭐️⭐️⭐️⭐️ (5.0/5)</p>
                </div>
            </div>
            <!-- Worker 2 -->
            <div class="bg-[#2cb5a0] p-6 border-4 border-[#7cdacc] rounded-lg shadow-lg text-center text-white font-poppins transition-all duration-300 hover:-translate-y-2.5">
                <!-- User Picture -->
                <div class="w-20 h-20 border-4 border-[#7cdacc] rounded-full overflow-hidden mx-auto flex items-center justify-center">
                    <svg viewBox="0 0 448 512" class="w-10 fill-current">
                        <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path>
                    </svg>
                </div>
                <!-- Client Name -->
                <p class="mt-5 font-semibold text-lg">
                    David Brown
                    <span class="block font-light text-base">Business Owner</span>
                </p>
                <!-- Rating -->
                <div class="relative my-5">
                    <div class="w-full h-0.5 bg-[#7cdacc]"></div>
                    <p class="text-gray-600">⭐️⭐️⭐️⭐️⭐️ (5.0/5)</p>
                </div>
            </div>
            <!-- Worker 3 -->
            <div class="bg-[#2cb5a0] p-6 border-4 border-[#7cdacc] rounded-lg shadow-lg text-center text-white font-poppins transition-all duration-300 hover:-translate-y-2.5">
                <!-- User Picture -->
                <div class="w-20 h-20 border-4 border-[#7cdacc] rounded-full overflow-hidden mx-auto flex items-center justify-center">
                    <svg viewBox="0 0 448 512" class="w-10 fill-current">
                        <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path>
                    </svg>
                </div>
                <!-- Client Name -->
                <p class="mt-5 font-semibold text-lg">
                    Emily Davis
                    <span class="block font-light text-base">Homeowner</span>
                </p>
                <!-- Rating -->
                <div class="relative my-5">
                    <div class="w-full h-0.5 bg-[#7cdacc]"></div>
                    <p class="text-gray-600">⭐️⭐️⭐️⭐️⭐️ (5.0/5)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>