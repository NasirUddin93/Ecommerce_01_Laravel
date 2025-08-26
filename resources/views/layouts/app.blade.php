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
        <!-- Desktop Nav -->
        <nav class="hidden md:flex space-x-6 items-center">
            <a href="#" class="hover:text-blue-600">Home</a>
            <a href="#" class="hover:text-blue-600">Products</a>
            <a href="#" class="hover:text-blue-600">About Us</a>
            <a href="#" class="hover:text-blue-600">Contact</a>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.35 2.7A1 1 0 007 18h12a1 1 0 00.9-1.45L17 13H7z" />
                </svg>
                <span>Cart (0)</span>
            </button>
        </nav>
        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="menu-btn" class="text-blue-600 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>
    <!-- Mobile Nav -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
        <a href="#" class="block px-6 py-2 hover:bg-gray-100">Home</a>
        <a href="#" class="block px-6 py-2 hover:bg-gray-100">Products</a>
        <a href="#" class="block px-6 py-2 hover:bg-gray-100">About Us</a>
        <a href="#" class="block px-6 py-2 hover:bg-gray-100">Contact</a>
        <button class="m-4 w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center justify-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.35 2.7A1 1 0 007 18h12a1 1 0 00.9-1.45L17 13H7z" />
            </svg>
            <span>Cart (0)</span>
        </button>
    </div>
</header>

@yield('content')
<!-- Hero Section -->
{{-- <section class="bg-blue-100 py-16 text-center">
    <h2 class="text-4xl font-bold mb-4">Welcome to SoftNova E-commerce</h2>
    <p class="text-lg mb-6">Find the best deals on our curated products.</p>
    <button class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">Shop Now</button>
</section> --}}

<!-- Categories -->
{{-- <section class="py-12 container mx-auto px-6">
    <h3 class="text-2xl font-semibold mb-6">Shop by Category</h3>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <div class="bg-white shadow rounded-lg p-4 text-center hover:shadow-lg">Electronics</div>
        <div class="bg-white shadow rounded-lg p-4 text-center hover:shadow-lg">Fashion</div>
        <div class="bg-white shadow rounded-lg p-4 text-center hover:shadow-lg">Home</div>
        <div class="bg-white shadow rounded-lg p-4 text-center hover:shadow-lg">Books</div>
    </div>
</section> --}}

<!-- Featured Products -->
{{-- <section class="py-12 bg-white">
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
</section> --}}

<!-- Footer -->
<footer class="bg-gray-900 text-gray-300 py-6 text-center mt-12">
    <p>&copy; 2025 SoftNova E-commerce. All Rights Reserved.</p>
</footer>

<script>
    // Mobile menu toggle
    $('#menu-btn').on('click', function() {
        $('#mobile-menu').slideToggle();
    });
</script>

</body>
</html>
