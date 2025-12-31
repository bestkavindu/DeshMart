<footer class="bg-gradient-to-r from-purple-900 via-black to-purple-950 text-white mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-xl font-bold mb-4">DeshaEmart</h3>
                    <p class="text-gray-300 text-sm">Your trusted phone shop for the latest smartphones and
                        accessories.</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('client.services') }}" wire:navigate
                                class="text-gray-300 hover:text-purple-300 transition-colors">Services</a></li>
                        <li><a href="{{ route('client.blogs') }}" wire:navigate
                                class="text-gray-300 hover:text-purple-300 transition-colors">Blogs</a></li>
                        <li><a href="{{ route('client.reviews') }}" wire:navigate class="text-gray-300 hover:text-purple-300 transition-colors">Reviews</a>
                        </li>
                        <li><a href="{{ route('client.contact') }}" wire:navigate
                                class="text-gray-300 hover:text-purple-300 transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Customer Service -->
                <div>
                    <h4 class="font-semibold mb-4">Customer Service</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('client.services') }}/#services" class="text-gray-300 hover:text-purple-300 transition-colors">Laptop Repair
                                </a></li>
                        <li><a href="{{ route('client.services') }}/#services"
                                class="text-gray-300 hover:text-purple-300 transition-colors">Mobile Repair</a></li>
                        <li><a href="{{ route('client.services') }}/#services"
                                class="text-gray-300 hover:text-purple-300 transition-colors">Accessories</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="font-semibold mb-4">Contact Us</h4>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li>Email: info@deshaemart.com</li>
                        <li>Phone: +1 234 567 890</li>
                        <li>Address: 123 Phone Street</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-white/10 mt-8 pt-8 text-center text-sm text-gray-300">
                <p>&copy; 2025 DeshaEmart. All rights reserved.</p>
            </div>
        </div>
    </footer>
