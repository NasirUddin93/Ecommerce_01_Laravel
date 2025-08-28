<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body class="bg-gray-100 flex" x-data="{ sidebarOpen: false }" x-init="lucide.createIcons()">

    <header class="bg-white shadow-md flex justify-between items-center p-4">
    <!-- Sidebar Toggle for Mobile -->
    <button id="sidebarToggle" class="lg:hidden text-gray-600 hover:text-gray-900">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Search Bar -->
    <div class="flex-1 mx-4">
        <form action="{{ route('admin.search') }}" method="GET" class="relative">
            <input type="text"
                   name="query"
                   placeholder="Search..."
                   class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button type="submit"
                    class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <!-- Profile Menu -->
    <div class="relative">
        <button id="profileMenuButton" class="flex items-center space-x-2 focus:outline-none">
            <img src="{{ asset('images/default-avatar.png') }}" alt="Avatar" class="w-8 h-8 rounded-full">
            <span class="hidden sm:block">{{ Auth::user()->name ?? 'Admin' }}</span>
            <i class="fas fa-chevron-down"></i>
        </button>

        <!-- Dropdown -->
        <div id="profileMenu"
             class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded shadow-md z-50">
            <a href="{{ route('admin.profile') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
            <a href="{{ route('admin.settings') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Settings</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                    Logout
                </button>
            </form>
        </div>
    </div>
</header>

    <!-- Mobile Toggle Button -->
    <button @click="sidebarOpen = !sidebarOpen"
        class="p-2 m-2 bg-blue-700 text-white rounded md:hidden fixed z-50">
        <i data-lucide="menu"></i>
    </button>

    <!-- Sidebar -->
    <aside
        class="fixed md:static inset-y-0 left-0 transform md:translate-x-0 w-64 bg-blue-700 text-white h-screen flex flex-col transition-transform duration-300 ease-in-out"
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">
        <div class="p-4 text-2xl font-bold border-b border-blue-500 flex justify-between items-center">
            Admin Panel
            <button @click="sidebarOpen = false" class="md:hidden"><i data-lucide="x"></i></button>
        </div>
        <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center space-x-2 py-2 px-3 rounded hover:bg-blue-600">
               <i data-lucide="layout-dashboard"></i> <span>Dashboard</span>
            </a>

            <!-- Dropdown Example -->
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="flex items-center justify-between w-full py-2 px-3 rounded hover:bg-blue-600 focus:outline-none">
                    <span class="flex items-center space-x-2">
                        <i data-lucide="boxes"></i> <span>Manage Products</span>
                    </span>
                    <i data-lucide="chevron-down" :class="open ? 'rotate-180' : ''" class="transition-transform"></i>
                </button>
                <div x-show="open" x-collapse class="ml-6 mt-1 space-y-1">
                    <a href="{{ route('categories.index') }}" class="flex items-center space-x-2 py-1 px-3 rounded hover:bg-blue-500">
                        <i data-lucide="list"></i> <span>Categories</span>
                    </a>
                    <a href="{{ route('products.index') }}" class="flex items-center space-x-2 py-1 px-3 rounded hover:bg-blue-500">
                        <i data-lucide="package"></i> <span>Products</span>
                    </a>
                </div>
            </div>

            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="flex items-center justify-between w-full py-2 px-3 rounded hover:bg-blue-600 focus:outline-none">
                    <span class="flex items-center space-x-2">
                        <i data-lucide="users"></i> <span>Manage Customers</span>
                    </span>
                    <i data-lucide="chevron-down" :class="open ? 'rotate-180' : ''" class="transition-transform"></i>
                </button>
                <div x-show="open" x-collapse class="ml-6 mt-1 space-y-1">
                    <a href="{{ route('customers.index') }}" class="flex items-center space-x-2 py-1 px-3 rounded hover:bg-blue-500">
                        <i data-lucide="user"></i> <span>Customer List</span>
                    </a>
                </div>
            </div>
        </nav>

        <form action="{{ route('logout') }}" method="POST" class="p-4 border-t border-blue-500">
            @csrf
            <button type="submit" class="flex items-center justify-center space-x-2 w-full py-2 bg-red-600 hover:bg-red-700 rounded text-white">
                <i data-lucide="log-out"></i> <span>Logout</span>
            </button>
        </form>
    </aside>

    <!-- Overlay for mobile -->
    <div
        class="fixed inset-0 bg-black bg-opacity-50 md:hidden"
        x-show="sidebarOpen"
        @click="sidebarOpen = false"
        x-transition.opacity>
    </div>

    <!-- Main Content -->
    <main class="flex-1 p-6 ml-0 md:ml-64">
        <h1 class="text-2xl font-bold mb-4">@yield('title', 'Dashboard')</h1>
        @yield('content')
    </main>
    <script>
document.addEventListener("DOMContentLoaded", function () {
    // Profile dropdown
    const profileMenuButton = document.getElementById('profileMenuButton');
    const profileMenu = document.getElementById('profileMenu');

    profileMenuButton.addEventListener('click', function () {
        profileMenu.classList.toggle('hidden');
    });

    // Close dropdown if clicked outside
    window.addEventListener('click', function (e) {
        if (!profileMenuButton.contains(e.target)) {
            profileMenu.classList.add('hidden');
        }
    });

    // Sidebar toggle (if not implemented already)
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
    }
});
</script>

</body>
</html>
