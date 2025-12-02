

<div>
    <section class="max-w-9xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <x-hero-slider />
    </section>

    <!-- Featured Categories (Optional) -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Shop by Category</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Category Card 1 -->
            <div class="bg-gradient-to-br from-purple-100 to-white rounded-xl p-6 text-center hover:shadow-xl transition-shadow cursor-pointer group">
                <div class="bg-purple-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900">Smartphones</h3>
            </div>

            <!-- Category Card 2 -->
            <div class="bg-gradient-to-br from-purple-100 to-white rounded-xl p-6 text-center hover:shadow-xl transition-shadow cursor-pointer group">
                <div class="bg-black w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900">Accessories</h3>
            </div>

            <!-- Category Card 3 -->
            <div class="bg-gradient-to-br from-purple-100 to-white rounded-xl p-6 text-center hover:shadow-xl transition-shadow cursor-pointer group">
                <div class="bg-purple-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900">Audio</h3>
            </div>

            <!-- Category Card 4 -->
            <div class="bg-gradient-to-br from-purple-100 to-white rounded-xl p-6 text-center hover:shadow-xl transition-shadow cursor-pointer group">
                <div class="bg-black w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900">Chargers</h3>
            </div>
        </div>
    </section>

    <!-- Our Services Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Services</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Professional repair and installation services for all your electronic needs</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Service 1: Mobile Repair -->
            <div class="group relative bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition-shadow duration-300">
                <div class="aspect-video overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1621905251918-48416bd8575a?w=600&h=400&fit=crop" alt="Mobile Repair" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Mobile Repair</h3>
                    <p class="text-gray-600 text-sm">Expert screen replacement, battery upgrades, and hardware fixes for all major brands.</p>
                </div>
            </div>

            <!-- Service 2: Laptop Repair -->
            <div class="group relative bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition-shadow duration-300">
                <div class="aspect-video overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=600&h=400&fit=crop" alt="Laptop Repair" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Laptop Repair</h3>
                    <p class="text-gray-600 text-sm">Diagnosis and repair for hardware issues, software troubleshooting, and upgrades.</p>
                </div>
            </div>

            <!-- Service 3: CCTV -->
            <div class="group relative bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition-shadow duration-300">
                <div class="aspect-video overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1557597774-9d273605dfa9?w=600&h=400&fit=crop" alt="CCTV Solutions" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">CCTV Solutions</h3>
                    <p class="text-gray-600 text-sm">Professional installation and maintenance of security camera systems for home and office.</p>
                </div>
            </div>

            <!-- Service 4: Software Services -->
            <div class="group relative bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition-shadow duration-300">
                <div class="aspect-video overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?w=600&h=400&fit=crop" alt="Software Services" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Software Services</h3>
                    <p class="text-gray-600 text-sm">OS installation, virus removal, data recovery, and software configuration.</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-10">
            <a href="#services" class="inline-block px-8 py-3 bg-purple-600 hover:bg-purple-700 text-white font-medium rounded-lg transition-colors duration-300">
                View All Services
            </a>
        </div>
    </section>



</div>
    <!-- Hero Slider Section -->
