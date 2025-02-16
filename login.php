<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex">
    <!-- Left side with pattern -->
    <div class="w-full md:w-1/2 flex items-center justify-center p-6">
        <div class="max-w-md w-full space-y-6">
            <h1 class="text-3xl font-bold text-gray-900 flex items-center space-x-2">
                <span class="text-black">Nexus</span>
            </h1>
            <p class="text-gray-500">Welcome back!</p>
            
            <form class="space-y-4">
                <div>
                    <input type="email" placeholder="name@email.com" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900">
                </div>
                <div>
                    <input type="password" placeholder="Password" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900">
                </div>
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center">
                        <input type="checkbox" class="mr-2"> Remember me
                    </label>
                    <a href="#" class="text-gray-600 hover:underline">Reset password</a>
                </div>
                <button class="w-full bg-black text-white py-3 rounded-lg hover:bg-gray-800">Sign in</button>
            </form>
            
            <p class="text-center text-sm">Don't have an account? <a href="#" class="text-black font-medium hover:underline">Sign up</a></p>
            
            <div class="flex items-center justify-center space-x-2">
                <div class="w-1/3 border-t"></div>
                <span class="text-gray-500">or</span>
                <div class="w-1/3 border-t"></div>
            </div>
            
            <button class="w-full flex items-center justify-center border py-3 rounded-lg hover:bg-gray-100 space-x-2">
                <img src="https://www.svgrepo.com/show/303108/google-icon-logo.svg" class="w-5 h-5"> 
                <span>Continue with Google</span>
            </button>
            
        </div>
    </div>
    
    <!-- Right side login form -->
     <div>

     </div>

</body>
</html>