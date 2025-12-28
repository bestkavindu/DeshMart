<nav x-data="{ mobileMenuOpen: false, searchOpen: false }" x-cloak
        class="bg-gradient-to-r from-purple-900 via-black to-purple-950 shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-3 group">
                        <div class="bg-white p-2 rounded-lg transform transition-transform group-hover:scale-110">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <span class="text-2xl font-bold text-white">DeshaEmart</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-white hover:text-purple-300 transition-colors font-medium">Home</a>
                    <a href="{{ route('client.services') }}"
                        class="text-white hover:text-purple-300 transition-colors font-medium">Services</a>
                    <a href="{{ route('client.blogs') }}" class="text-white hover:text-purple-300 transition-colors font-medium">Blogs</a>
                    <a href="#brands" class="text-white hover:text-purple-300 transition-colors font-medium">Brands</a>
                    <a href="{{ route('client.contact') }}"
                        class="text-white hover:text-purple-300 transition-colors font-medium">Contact</a>
                </div>

                <!-- Right Side Icons -->
                <div class="hidden md:flex items-center space-x-4">
                    <!-- Search Button -->
                    <button @click="searchOpen = !searchOpen"
                        class="text-white hover:text-purple-300 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>

                    <!-- Cart -->
                    <a href="#cart" class="relative text-white hover:text-purple-300 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                        <span
                            class="absolute -top-2 -right-2 bg-purple-600 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-semibold">0</span>
                    </a>

                    <!-- User Account -->
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-white hover:text-purple-300 transition-colors font-medium">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                                    Sign Up
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>

                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-white">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <!-- Search Bar (Desktop) -->
            <div x-show="searchOpen" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2"
                class="pb-4">
                <div class="relative">
                    <input type="text" placeholder="Search for phones, accessories..."
                        class="w-full px-4 py-3 pr-12 rounded-lg bg-white/10 backdrop-blur-sm border border-white/20 text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    <button class="absolute right-3 top-1/2 -translate-y-1/2 text-white/80 hover:text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            class="md:hidden bg-black/50 backdrop-blur-lg border-t border-white/10">
            <div class="px-4 py-6 space-y-4">
                <a href="/"
                    class="block text-white hover:text-purple-300 transition-colors font-medium py-2">Home</a>
                <a href="{{ route('client.services') }}"
                    class="block text-white hover:text-purple-300 transition-colors font-medium py-2">Services</a>
                <a href="{{ route('client.blogs') }}"
                    class="block text-white hover:text-purple-300 transition-colors font-medium py-2">Blogs</a>
                <a href="#brands"
                    class="block text-white hover:text-purple-300 transition-colors font-medium py-2">Brands</a>
                <a href="{{ route('client.contact') }}"
                    class="block text-white hover:text-purple-300 transition-colors font-medium py-2">Contact</a>

                <div class="pt-4 border-t border-white/10 space-y-3">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="block bg-purple-600 hover:bg-purple-700 text-white px-4 py-3 rounded-lg font-medium text-center transition-colors">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="block text-white hover:text-purple-300 transition-colors font-medium py-2">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="block bg-purple-600 hover:bg-purple-700 text-white px-4 py-3 rounded-lg font-medium text-center transition-colors">
                                    Sign Up
                                </a>
                            @endif
                        @endauth
                    @endif

                    <a href="#cart"
                        class="flex items-center justify-between text-white hover:text-purple-300 transition-colors font-medium py-2">
                        <span>Shopping Cart</span>
                        <span
                            class="bg-purple-600 text-white text-xs rounded-full w-6 h-6 flex items-center justify-center font-semibold">0</span>
                    </a>
                </div>

                <!-- Mobile Search -->
                <div class="pt-4">
                    <div class="relative">
                        <input type="text" placeholder="Search..."
                            class="w-full px-4 py-3 pr-12 rounded-lg bg-white/10 backdrop-blur-sm border border-white/20 text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <button class="absolute right-3 top-1/2 -translate-y-1/2 text-white/80">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
