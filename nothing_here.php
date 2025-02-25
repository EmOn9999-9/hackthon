<?php include 'header.php'; ?>

    <!-- Profile Section -->
    <div class="max-w-4xl mx-auto p-6 bg-black bg-opacity-20 shadow-lg rounded-lg mt-10 mb-16">
        <!-- Profile Photo -->
        <div class="flex justify-center">
            <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-gray-200">
                <img src="images/plumber2.jpg" alt="Profile Photo" class="w-full h-full object-cover">
            </div>
        </div>

        <!-- Name and Rating -->
        <div class="text-center mt-6">
            <h1 class="text-3xl font-bold">Name here</h1>
            <div class="flex items-center justify-center mt-2">
                <span class="text-yellow-400 text-2xl">★★★★☆</span>
                <span class="text-gray-600 ml-2">4.2/5.0</span>
            </div>
        </div>

        <!-- Message Button -->
        <div class="flex justify-center mt-6">
            <button class="bg-[#497D74] text-white px-6 py-2 rounded-full hover:bg-[#3a645d] transition duration-300 transform hover:scale-105">
                <i class="fas fa-envelope mr-2"></i> Message
            </button>
        </div>

        <!-- Contact Section -->
        <div class="mt-8">
            <h2 class="text-xl font-semibold">Contact Information</h2>
            <div class="mt-4 space-y-2">
                <p class="text-gray-700"><i class="fas fa-phone-alt mr-2"></i> Phone: <a href="tel:+1234567890" class="text-[#497D74] hover:underline">+123 456 7890</a></p>
                <p class="text-gray-700"><i class="fas fa-envelope mr-2"></i> Email: <a href="mailto:example@example.com" class="text-[#497D74] hover:underline">example@example.com</a></p>
            </div>
        </div>

        <!-- Bio Section -->
        <div class="mt-8">
            <h2 class="text-xl font-semibold">Bio</h2>
            <p class="text-gray-700 mt-2">
                about here
            </p>
        </div>

        <!-- Reviews Section -->
        <div class="mt-8">
            <h2 class="text-xl font-semibold">Reviews</h2>
            <div class="space-y-4 mt-4">
                <!-- Review 1 -->
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/40" alt="Reviewer" class="w-8 h-8 rounded-full">
                        <div class="ml-3">
                            <p class="font-semibold">Jane Smith</p>
                            <p class="text-sm text-gray-600">2 days ago</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mt-2">
                        John is an amazing professional! He delivered the project on time and exceeded my expectations.
                    </p>
                </div>

                <!-- Review 2 -->
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/40" alt="Reviewer" class="w-8 h-8 rounded-full">
                        <div class="ml-3">
                            <p class="font-semibold">Mike Johnson</p>
                            <p class="text-sm text-gray-600">1 week ago</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mt-2">
                        Great work! John is very responsive and detail-oriented. Highly recommended!
                    </p>
                </div>

                <!-- Review 3 -->
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/40" alt="Reviewer" class="w-8 h-8 rounded-full">
                        <div class="ml-3">
                            <p class="font-semibold">Emily Davis</p>
                            <p class="text-sm text-gray-600">2 weeks ago</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mt-2">
                        John is a true expert in his field. I will definitely work with him again in the future.
                    </p>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>