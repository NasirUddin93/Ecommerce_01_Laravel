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
            <a href="/" class="hover:text-blue-600">Home</a>
            <a href="{{route('products.index')}}" class="hover:text-blue-600">Products</a>
            <a href="{{route('categories.index')}}" class="hover:text-blue-600">Categories</a>
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
@yield('scripts')

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
