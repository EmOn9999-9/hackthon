<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="max-w-[350px] bg-gradient-to-b from-white to-[#f4f7fb] rounded-[40px] p-[25px] border-4 border-white shadow-[0_30px_30px_-20px_rgba(133,189,215,0.88)] mx-5">
        <!-- Heading -->
        <div class="text-center font-black text-3xl text-[#1089d3]">Sign In</div>

        <!-- Form -->
        <form class="mt-5">
            <input type="email" placeholder="E-mail" class="w-full bg-white border-none rounded-[20px] py-3 px-5 mt-3 shadow-[0_10px_10px_-5px_#cff0ff] focus:outline-none focus:border-2 focus:border-[#12B1D1]" required>
            <input type="password" placeholder="Password" class="w-full bg-white border-none rounded-[20px] py-3 px-5 mt-3 shadow-[0_10px_10px_-5px_#cff0ff] focus:outline-none focus:border-2 focus:border-[#12B1D1]" required>
            <a href="#" class="block text-[11px] text-[#0099ff] mt-2 ml-2">Forgot Password ?</a>
            <button type="submit" class="w-full font-bold bg-gradient-to-r from-[#1089d3] to-[#12b1d1] text-white py-3 rounded-[20px] mt-5 shadow-[0_20px_10px_-15px_rgba(133,189,215,0.88)] hover:scale-105 hover:shadow-[0_23px_10px_-20px_rgba(133,189,215,0.88)] active:scale-95 active:shadow-[0_15px_10px_-10px_rgba(133,189,215,0.88)] transition-all duration-200 ease-in-out">Sign In</button>
        </form>

        <!-- Social Accounts -->
        <div class="mt-6">
            <span class="block text-center text-[10px] text-gray-400">Or Sign in with</span>
            <div class="flex justify-center gap-3 mt-1">
                <button class="bg-gradient-to-r from-black to-[#707070] border-4 border-white rounded-full w-10 h-10 flex items-center justify-center shadow-[0_12px_10px_-8px_rgba(133,189,215,0.88)] hover:scale-110 active:scale-90 transition-all duration-200 ease-in-out">
                    <svg class="w-5 h-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                        <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                    </svg>
                </button>
                <button class="bg-gradient-to-r from-black to-[#707070] border-4 border-white rounded-full w-10 h-10 flex items-center justify-center shadow-[0_12px_10px_-8px_rgba(133,189,215,0.88)] hover:scale-110 active:scale-90 transition-all duration-200 ease-in-out">
                    <svg class="w-5 h-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path>
                    </svg>
                </button>
                <button class="bg-gradient-to-r from-black to-[#707070] border-4 border-white rounded-full w-10 h-10 flex items-center justify-center shadow-[0_12px_10px_-8px_rgba(133,189,215,0.88)] hover:scale-110 active:scale-90 transition-all duration-200 ease-in-out">
                    <svg class="w-5 h-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Agreement -->
        <div class="mt-4 text-center">
            <a href="#" class="text-[9px] text-[#0099ff]">Learn user licence agreement</a>
        </div>
    </div>

    <div class="container">
  <div class="glass-box">
    This is a glass-like box!
  </div>
</div>

<style>
  /* Container with a background image for demonstration */
.container {
  background-image: url('https://via.placeholder.com/800x600');
  background-size: cover;
  background-position: center;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Glass-like box */
.glass-box {
  background-color: rgba(255, 255, 255, 0.2); /* Semi-transparent white */
  backdrop-filter: blur(10px); /* Blur effect */
  border-radius: 15px; /* Rounded corners */
  border: 1px solid rgba(255, 255, 255, 0.3); /* Light border */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
  padding: 20px;
  width: 300px;
  text-align: center;
  color: white;
  font-size: 1.2rem;
}
</style>
</body>
</html>