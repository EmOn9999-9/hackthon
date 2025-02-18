<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus - Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex">
    <!-- Left side with form -->
    <div class="w-full md:w-1/2 flex items-center justify-center p-6">
        <div class="max-w-md w-full space-y-6">
            <h1 class="text-3xl font-bold text-gray-900 flex items-center space-x-2">
                <span class="text-black">Nexus</span>
            </h1>
            <p class="text-gray-500">Create your account</p>
            
            <!-- Sign Up Form -->
            <form action="signup.php" class="space-y-4">
                <!-- Full Name -->
                <div>
                    <input type="text" placeholder="Full Name" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900">
                </div>
                <!-- Email -->
                <div>
                    <input type="email" placeholder="name@email.com" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900">
                </div>
                <!-- Password -->
                <div>
                    <input type="password" placeholder="Password" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900">
                </div>
                <!-- Confirm Password -->
                <div>
                    <input type="password" placeholder="Confirm Password" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900">
                </div>
                <!-- Terms and Conditions -->
                <div class="flex items-center text-sm">
                    <input type="checkbox" class="mr-2">
                    <span>I agree to the <a href="#" class="text-black hover:underline">terms and conditions</a></span>
                </div>
                <!-- Sign Up Button -->
                <button class="w-full bg-black text-white py-3 rounded-lg hover:bg-gray-800">Sign Up</button>
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
    
    <!-- Right side with image -->
    <div class="hidden md:block w-1/2 bg-gray-900 h-full relative overflow-hidden">
        <img src="https://as1.ftcdn.net/v2/jpg/04/13/24/78/1000_F_413247834_RVsMB3VgSMb7UyzRzBhU5Uooow1jd0iv.jpg" alt="" class="h-full mt-5">
    </div>
</body>
</html>