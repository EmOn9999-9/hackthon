<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleDropdown() {
            document.getElementById("servicesDropdown").classList.toggle("hidden");
        }
    </script>
</head>
<body>
    <nav class="flex justify-between items-center py-3 px-20 bg-gray-100 text-black relative">
        <a href="home.php">
            <img src="" alt="logo" class="h-12">
        </a>
        <div class="flex gap-4 relative">
            <div class="relative">
                <button onclick="toggleDropdown()" class="focus:outline-none">Services ▼</button>
                <div id="servicesDropdown" class="absolute hidden bg-white shadow-md mt-2 rounded-md w-40">
                    <a href="#" class="block px-4 py-2 hover:bg-gray-200">Electrician</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-200">Plumber</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-200">Barber</a>
                </div>
            </div>
            <a href="#">Blog</a>
            <a href="#">Help</a>
            <a href="#">More</a>
        </div>
    </nav>
</body>
</html>
