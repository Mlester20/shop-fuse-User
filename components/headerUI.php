<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <button id="menuBtn" class="lg:hidden mr-3 text-gray-600 hover:text-gray-900">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <h1 class="text-2xl font-bold text-indigo-600"> <?php require '../includes/title.php';?></h1>
            </div>

            <!-- Search Bar (Desktop) -->
            <div class="hidden md:flex flex-1 max-w-2xl mx-8">
                <div class="relative w-full">
                    <input type="text" placeholder="Search products or Shop..."
                        class="w-full px-4 py-2 pr-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none">
                    <button
                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Right Side Icons -->
            <div class="flex items-center space-x-4">
                <!-- Search Icon (Mobile) -->
                <button class="md:hidden text-gray-600 hover:text-gray-900">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>

                <!-- Notifications -->
                <button id="notifBtn" class="relative text-gray-600 hover:text-gray-900">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span
                        class="absolute top-0 right-0 inline-flex items-center justify-center px-1.5 py-0.5 text-xs font-bold leading-none text-white transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">
                        3
                    </span>
                </button>

                <!-- Cart -->
                <button class="relative text-gray-600 hover:text-gray-900">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span
                        class="absolute top-0 right-0 inline-flex items-center justify-center px-1.5 py-0.5 text-xs font-bold leading-none text-white transform translate-x-1/2 -translate-y-1/2 bg-indigo-600 rounded-full">
                        5
                    </span>
                </button>

                <!-- User Profile Dropdown -->
                <div class="relative" id="userInitials">
                    <button id="profileBtn" class="flex items-center space-x-2 text-gray-700 hover:text-gray-900">
                        <div
                            class="w-8 h-8 bg-indigo-600 rounded-full flex items-center justify-center text-white font-semibold">
                            JD
                        </div>
                        <svg class="hidden sm:block w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div id="profileDropdown"
                        class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 border border-gray-200">
                        <div class="px-4 py-2 border-b border-gray-200">
                            <p class="text-sm font-semibold text-gray-900"> <?php echo htmlspecialchars($_SESSION['name']); ?> </p>
                            <p class="text-xs text-gray-500"> <?php echo htmlspecialchars($_SESSION['email']); ?> </p>
                        </div>

                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                My Profile
                            </div>
                        </a>

                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                                Orders
                            </div>
                        </a>

                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                Wishlist
                            </div>
                        </a>

                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Settings
                            </div>
                        </a>

                        <hr class="my-2">

                        <a href="../controllers/logout.php" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100" onclick="return confirm('Are you sure you want to logout?')">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                Logout
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Links (Desktop) -->
    <div class="hidden lg:block border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex space-x-8 py-3">
                <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium text-sm transition">Home</a>
                <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium text-sm transition">Shop</a>
                <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium text-sm transition">Categories</a>
                <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium text-sm transition">Deals</a>
                <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium text-sm transition">New Arrivals</a>
                <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium text-sm transition">Contact</a>
            </nav>
        </div>
    </div>
</header>

<!-- Mobile Menu Sidebar -->
<div id="mobileMenu" class="hidden fixed inset-0 z-40 lg:hidden">
    <div class="fixed inset-0 bg-black bg-opacity-50" id="overlay"></div>

    <div id="sidebar"
        class="fixed left-0 top-0 bottom-0 w-64 bg-white shadow-xl transform -translate-x-full transition-transform duration-300">
        <div class="p-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-bold text-indigo-600">Menu</h2>
                <button id="closeMenu" class="text-gray-600 hover:text-gray-900">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <nav class="p-4 space-y-2">
            <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg font-medium">Home</a>
            <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg font-medium">Shop</a>
            <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg font-medium">Categories</a>
            <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg font-medium">Deals</a>
            <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg font-medium">New Arrivals</a>
            <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg font-medium">Contact</a>
        </nav>
    </div>
</div>

<!-- Notification Dropdown -->
<div id="notifDropdown"
    class="hidden fixed top-16 right-4 w-80 bg-white rounded-lg shadow-lg border border-gray-200 z-50">
    <div class="p-4 border-b border-gray-200">
        <h3 class="font-semibold text-gray-900">Notifications</h3>
    </div>

    <div class="max-h-96 overflow-y-auto">
        <div class="p-4 border-b border-gray-100 hover:bg-gray-50 cursor-pointer">
            <div class="flex items-start">
                <div class="w-2 h-2 bg-indigo-600 rounded-full mt-2 mr-3"></div>
                <div class="flex-1">
                    <p class="text-sm text-gray-900 font-medium">Order Shipped</p>
                    <p class="text-xs text-gray-500 mt-1">Your order #12345 has been shipped</p>
                    <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                </div>
            </div>
        </div>

        <div class="p-4 border-b border-gray-100 hover:bg-gray-50 cursor-pointer">
            <div class="flex items-start">
                <div class="w-2 h-2 bg-indigo-600 rounded-full mt-2 mr-3"></div>
                <div class="flex-1">
                    <p class="text-sm text-gray-900 font-medium">New Deal Available</p>
                    <p class="text-xs text-gray-500 mt-1">50% off on electronics</p>
                    <p class="text-xs text-gray-400 mt-1">5 hours ago</p>
                </div>
            </div>
        </div>

        <div class="p-4 hover:bg-gray-50 cursor-pointer">
            <div class="flex items-start">
                <div class="w-2 h-2 bg-indigo-600 rounded-full mt-2 mr-3"></div>
                <div class="flex-1">
                    <p class="text-sm text-gray-900 font-medium">Payment Confirmed</p>
                    <p class="text-xs text-gray-500 mt-1">Payment received for order #12344</p>
                    <p class="text-xs text-gray-400 mt-1">1 day ago</p>
                </div>
            </div>
        </div>
    </div>

    <div class="p-3 border-t border-gray-200 text-center">
        <a href="#" class="text-sm text-indigo-600 hover:text-indigo-700 font-medium">
            View all notifications
        </a>
    </div>
</div>


<script>
    // Profile Dropdown Toggle
    const profileBtn = document.getElementById('profileBtn');
    const profileDropdown = document.getElementById('profileDropdown');

    profileBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        profileDropdown.classList.toggle('hidden');
        notifDropdown.classList.add('hidden');
    });

    // Notification Dropdown Toggle
    const notifBtn = document.getElementById('notifBtn');
    const notifDropdown = document.getElementById('notifDropdown');

    notifBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        notifDropdown.classList.toggle('hidden');
        profileDropdown.classList.add('hidden');
    });

    // Mobile Menu Toggle
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const sidebar = document.getElementById('sidebar');
    const closeMenu = document.getElementById('closeMenu');
    const overlay = document.getElementById('overlay');

    function openMobileMenu() {
        mobileMenu.classList.remove('hidden');
        setTimeout(() => {
            sidebar.classList.remove('-translate-x-full');
        }, 10);
    }

    function closeMobileMenu() {
        sidebar.classList.add('-translate-x-full');
        setTimeout(() => {
            mobileMenu.classList.add('hidden');
        }, 300);
    }

    menuBtn.addEventListener('click', openMobileMenu);
    closeMenu.addEventListener('click', closeMobileMenu);
    overlay.addEventListener('click', closeMobileMenu);

    // Close dropdowns when clicking outside
    document.addEventListener('click', () => {
        profileDropdown.classList.add('hidden');
        notifDropdown.classList.add('hidden');
    });
    
</script>