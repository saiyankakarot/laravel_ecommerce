<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Your Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CSS CDN (remove if you use Laravel Mix or other bundlers) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-50 to-blue-100 min-h-screen font-sans">

    <!-- Hero Section -->
    <section class="bg-white shadow-lg rounded-b-3xl px-8 py-16 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-blue-700 mb-4">Discover Unique Products</h1>
        <p class="text-lg text-gray-600 mb-8">A new experience for shopping. Explore our curated collection of must-haves!</p>
        <a href="/shop" class="inline-block px-8 py-3 bg-blue-600 text-white rounded-full font-semibold hover:bg-blue-700 transition">Shop Now</a>
    </section>

    <!-- Featured Products Grid -->
    <section class="max-w-6xl mx-auto mt-16 px-4">
        <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">Featured Products</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Example Product Card -->
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <img src="https://source.unsplash.com/featured/?watch" alt="Product 1" class="rounded-md w-full mb-4 h-48 object-cover">
                <h3 class="font-semibold text-lg text-blue-700">Elegant Wrist Watch</h3>
                <p class="text-gray-500 mb-2">Classic design for all occasions.</p>
                <div class="flex items-center justify-between mt-2">
                    <span class="text-blue-600 font-bold">$49.99</span>
                    <button class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700">Add to Cart</button>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <img src="https://source.unsplash.com/featured/?headphones" alt="Product 2" class="rounded-md w-full mb-4 h-48 object-cover">
                <h3 class="font-semibold text-lg text-blue-700">Premium Headphones</h3>
                <p class="text-gray-500 mb-2">Immersive sound experience.</p>
                <div class="flex items-center justify-between mt-2">
                    <span class="text-blue-600 font-bold">$89.99</span>
                    <button class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700">Add to Cart</button>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <img src="https://source.unsplash.com/featured/?backpack" alt="Product 3" class="rounded-md w-full mb-4 h-48 object-cover">
                <h3 class="font-semibold text-lg text-blue-700">Travel Backpack</h3>
                <p class="text-gray-500 mb-2">Your perfect travel companion.</p>
                <div class="flex items-center justify-between mt-2">
                    <span class="text-blue-600 font-bold">$39.99</span>
                    <button class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-20 py-8 text-center text-gray-500 text-sm">
        &copy; {{ date('Y') }} Your Store. All rights reserved.
    </footer>
</body>
</html>