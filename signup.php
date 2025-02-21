<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus - Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex bg-[url('images/background2.avif')] bg-cover bg-center">
    <!-- Left side with form -->
    <div class="w-full md:w-1/2 flex items-center justify-center p-6">
        <div class="max-w-md w-full space-y-6">
            <h1 class="text-3xl font-bold text-gray-900 flex items-center space-x-2">
                <span class="text-black">Nexus</span>
            </h1>
            <p class="text-gray-500">Create your account</p>
            
            <!-- Sign Up Form -->
            <form id="signupForm" class="space-y-4">
                <!-- Full Name -->
                <div>
                    <input type="text" placeholder="Full Name" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900" required>
                </div>
                <!-- Email -->
                <div>
                    <input type="email" placeholder="name@email.com" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900" required>
                </div>
                <!-- Password -->
                <div class="relative">
                    <input type="password" id="password" placeholder="Password" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900" required>
                    <!-- Eye icon for password -->
                    <span class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer" onclick="togglePasswordVisibility('password')">
                        <svg id="password-eye" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </span>
                </div>
                <!-- Confirm Password -->
                <div class="relative">
                    <input type="password" id="confirmPassword" placeholder="Confirm Password" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900" required>
                    <!-- Eye icon for confirm password -->
                    <span class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer" onclick="togglePasswordVisibility('confirmPassword')">
                        <svg id="confirmPassword-eye" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </span>
                </div>
                <!-- Error Message -->
                <div id="errorMessage" class="text-red-500 text-sm hidden">Passwords do not match!</div>
                
                <!-- Sign Up Button -->
                <button type="submit" class="w-full bg-black text-white py-3 rounded-lg hover:bg-gray-800">Sign Up</button>
            </form>
            
            <!-- Already have an account? -->
            <p class="text-center text-sm">Already have an account? <a href="signin.php" class="text-black font-medium hover:underline">Sign in</a></p>
            
            <!-- Divider -->
            <div class="flex items-center justify-center space-x-2">
                <div class="w-1/3 border-t"></div>
                <span class="text-gray-500">or</span>
                <div class="w-1/3 border-t"></div>
            </div>
            
            <!-- Continue with Google -->
            <button class="w-full flex items-center justify-center border py-3 rounded-lg hover:bg-gray-100 space-x-2">
                <img src="https://www.svgrepo.com/show/303108/google-icon-logo.svg" class="w-5 h-5"> 
                <span>Continue with Google</span>
            </button>
        </div>
    </div>

    <script>
        // Function to toggle password visibility
        function togglePasswordVisibility(fieldId) {
            const passwordField = document.getElementById(fieldId);
            const eyeIcon = document.getElementById(`${fieldId}-eye`);

            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>`;
            } else {
                passwordField.type = "password";
                eyeIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>`;
            }
        }

        // Form submission handling
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent form submission
            
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const errorMessage = document.getElementById('errorMessage');

            if (password !== confirmPassword) {
                errorMessage.classList.remove('hidden');
                return;
            }

            errorMessage.classList.add('hidden');
            
            // If passwords match, redirect to home.php
            window.location.href = 'home.php';
        });
    </script>
</body>
</html>