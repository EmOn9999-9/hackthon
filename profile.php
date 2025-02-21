<?php include 'header.php'; ?>

    <!-- Profile Section -->
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-10 mb-16"> <!-- Added mb-16 for margin-bottom -->
        <!-- Name and ID -->
        <div class="text-center">
            <h1 class="text-3xl font-bold">Name here</h1>
            <p class="text-gray-600">ID name here</p>
        </div>

        <!-- Bio Section -->
        <div class="mt-8">
            <h2 class="text-xl font-semibold">Bio</h2>
            <p class="text-gray-700 mt-2">
                about here
            </p>
        </div>

        <!-- Ratings Section -->
        <div class="mt-8">
            <h2 class="text-xl font-semibold">Ratings</h2>
            <div class="flex items-center mt-2">
                <span class="text-yellow-400 text-2xl">★★★★☆</span>
                <span class="text-gray-600 ml-2">4.2/5.0</span>
            </div>
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