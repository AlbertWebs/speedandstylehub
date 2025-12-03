<!-- Mobile Bottom Navigation -->
<nav class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 shadow-lg z-[9999] md:hidden">
    <div class="flex items-center justify-around h-16 px-2">
        <!-- Home -->
        <a href="{{ route('home') }}" class="flex flex-col items-center justify-center flex-1 py-2 {{ request()->routeIs('home') ? 'text-blue-600' : 'text-gray-600' }} hover:text-blue-600 transition-colors">
            <i class="fas fa-home text-xl mb-1"></i>
            <span class="text-xs font-medium">Home</span>
        </a>

        <!-- Products -->
        <a href="{{ route('products.index') }}" class="flex flex-col items-center justify-center flex-1 py-2 {{ request()->routeIs('products.*') ? 'text-blue-600' : 'text-gray-600' }} hover:text-blue-600 transition-colors">
            <i class="fas fa-shopping-bag text-xl mb-1"></i>
            <span class="text-xs font-medium">Products</span>
        </a>

        <!-- Cart -->
        <a href="{{ route('cart.index') }}" class="flex flex-col items-center justify-center flex-1 py-2 relative {{ request()->routeIs('cart.*') ? 'text-blue-600' : 'text-gray-600' }} hover:text-blue-600 transition-colors">
            <div class="relative">
                <i class="fas fa-shopping-cart text-xl mb-1"></i>
                <span class="absolute -top-2 -right-2 bg-blue-600 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center cart-count-mobile">0</span>
            </div>
            <span class="text-xs font-medium">Cart</span>
        </a>

        <!-- Wishlist -->
        <a href="{{ route('wishlist.index') }}" class="flex flex-col items-center justify-center flex-1 py-2 relative {{ request()->routeIs('wishlist.*') ? 'text-blue-600' : 'text-gray-600' }} hover:text-blue-600 transition-colors">
            <div class="relative">
                <i class="fas fa-heart text-xl mb-1"></i>
                <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center wishlist-count-mobile">0</span>
            </div>
            <span class="text-xs font-medium">Wishlist</span>
        </a>

        <!-- Account -->
        @auth
            <a href="{{ route('profile.edit') }}" class="flex flex-col items-center justify-center flex-1 py-2 {{ request()->routeIs('profile.*') || request()->routeIs('dashboard') ? 'text-blue-600' : 'text-gray-600' }} hover:text-blue-600 transition-colors">
                <i class="fas fa-user text-xl mb-1"></i>
                <span class="text-xs font-medium">Account</span>
            </a>
        @else
            <a href="{{ route('login') }}" class="flex flex-col items-center justify-center flex-1 py-2 {{ request()->routeIs('login') ? 'text-blue-600' : 'text-gray-600' }} hover:text-blue-600 transition-colors">
                <i class="fas fa-sign-in-alt text-xl mb-1"></i>
                <span class="text-xs font-medium">Login</span>
            </a>
        @endauth
    </div>
</nav>

