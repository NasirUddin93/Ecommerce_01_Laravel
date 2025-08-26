<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoftNova E-commerce</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-50 text-gray-900">

<!-- Header -->
<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-blue-600">SoftNova Shop</h1>
        <nav class="space-x-6">
            <a href="#" class="hover:text-blue-600">Home</a>
            <a href="#" class="hover:text-blue-600">Products</a>
            <a href="#" class="hover:text-blue-600">About Us</a>
            <a href="#" class="hover:text-blue-600">Contact</a>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Cart (0)</button>
        </nav>
    </div>
</header>

<!-- Hero Section -->
<section class="bg-blue-100 py-16 text-center">
    <h2 class="text-4xl font-bold mb-4">Welcome to SoftNova E-commerce</h2>
    <p class="text-lg mb-6">Find the best deals on our curated products.</p>
    <button class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">Shop Now</button>
</section>

<!-- Categories -->
<section class="py-12 container mx-auto px-6">
    <h3 class="text-2xl font-semibold mb-6">Shop by Category</h3>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <div class="bg-white shadow rounded-lg p-4 text-center hover:shadow-lg">Electronics</div>
        <div class="bg-white shadow rounded-lg p-4 text-center hover:shadow-lg">Fashion</div>
        <div class="bg-white shadow rounded-lg p-4 text-center hover:shadow-lg">Home</div>
        <div class="bg-white shadow rounded-lg p-4 text-center hover:shadow-lg">Books</div>
    </div>
</section>

<!-- Featured Products -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-6">
        <h3 class="text-2xl font-semibold mb-6">Featured Products</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <div class="border rounded-lg shadow p-4">
                <img src="https://via.placeholder.com/200" alt="Product" class="rounded mb-4">
                <h4 class="text-lg font-semibold">Product Name</h4>
                <p class="text-blue-600 font-bold">$99.00</p>
                <button class="mt-3 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add to Cart</button>
            </div>
            <!-- Repeat product cards -->
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-gray-300 py-6 text-center mt-12">
    <p>&copy; 2025 SoftNova E-commerce. All Rights Reserved.</p>
</footer>

</body>
</html>
