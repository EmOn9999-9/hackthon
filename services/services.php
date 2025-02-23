<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - HomeFix</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-gray-800">HomeFix</span>
                </div>
                <!-- Navigation Links -->
                <div class="hidden md:flex space-x-10">
                    <a href="index.html" class="text-gray-800 hover:text-gray-600">Home</a>
                    <a href="about.html" class="text-gray-800 hover:text-gray-600">About Us</a>
                    <a href="services.html" class="text-gray-800 hover:text-gray-600">Services</a>
                    <a href="contact.html" class="text-gray-800 hover:text-gray-600">Contact</a>
                </div>
                <!-- Sign In Button -->
                <div>
                    <a href="signin.php" class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800">Sign In</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-[url('images/services-hero.jpg')] bg-cover bg-center h-64 flex items-center justify-center">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Our Services</h1>
            <p class="text-lg text-gray-200">Find the best professionals for your needs.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Explore Our Services</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Carpenter -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <img src="images/carpenter.png" alt="Carpenter" class="w-20 h-20 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Carpenter</h3>
                    <p class="text-gray-600">Skilled carpenters for furniture, repairs, and custom woodwork.</p>
                </div>

                <!-- Plumber -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <img src="images/plumber.png" alt="Plumber" class="w-20 h-20 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Plumber</h3>
                    <p class="text-gray-600">Expert plumbers for leaks, installations, and maintenance.</p>
                </div>

                <!-- Electrician -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <img src="images/electrician.png" alt="Electrician" class="w-20 h-20 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Electrician</h3>
                    <p class="text-gray-600">Certified electricians for wiring, repairs, and installations.</p>
                </div>

                <!-- Barber -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <img src="images/barber.png" alt="Barber" class="w-20 h-20 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Barber</h3>
                    <p class="text-gray-600">Professional barbers for haircuts, shaves, and grooming.</p>
                </div>

                <!-- Painter -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <img src="images/painter.png" alt="Painter" class="w-20 h-20 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Painter</h3>
                    <p class="text-gray-600">Experienced painters for walls, ceilings, and exteriors.</p>
                </div>

                <!-- Cleaner -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <img src="images/cleaner.png" alt="Cleaner" class="w-20 h-20 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Cleaner</h3>
                    <p class="text-gray-600">Professional cleaners for homes, offices, and more.</p>
                </div>

                <!-- Gardener -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <img src="images/gardener.png" alt="Gardener" class="w-20 h-20 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Gardener</h3>
                    <p class="text-gray-600">Expert gardeners for landscaping and lawn care.</p>
                </div>

                <!-- Mechanic -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow duration-300">
                    <img src="images/mechanic.png" alt="Mechanic" class="w-20 h-20 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Mechanic</h3>
                    <p class="text-gray-600">Skilled mechanics for vehicle repairs and maintenance.</p>
                </div>
            </div>
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