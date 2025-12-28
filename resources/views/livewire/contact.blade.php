<div>
    <!-- Hero Section -->
    <div class="bg-purple-50 py-20 sm:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="inline-flex items-center justify-center p-4 bg-purple-100 rounded-2xl mb-6">
                    <flux:icon.envelope class="w-10 h-10 text-purple-600" />
                </div>
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
                    Contact Us
                </h1>
                <p class="mt-5 max-w-2xl mx-auto text-xl text-gray-600">
                    Have a question or need assistance? We're here to help with all your device repair needs.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center items-center text-sm text-gray-500">
                    <div class="flex items-center">
                        <flux:icon.clock class="w-5 h-5 mr-2 text-purple-600" />
                        <span>Response within 24 hours</span>
                    </div>
                    <div class="hidden sm:block text-gray-300">•</div>
                    <div class="flex items-center">
                        <flux:icon.shield-check class="w-5 h-5 mr-2 text-purple-600" />
                        <span>Professional support team</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="bg-gray-50 py-16 sm:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Contact Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Location Card -->
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300 text-center">
                    <div class="inline-flex items-center justify-center h-16 w-16 rounded-full bg-purple-100 text-purple-600 mb-6">
                        <flux:icon.map-pin class="h-8 w-8" />
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Visit Us</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Balangoda 70140<br>
                        Sri Lanka
                    </p>
                </div>

                <!-- Phone Card -->
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300 text-center">
                    <div class="inline-flex items-center justify-center h-16 w-16 rounded-full bg-purple-100 text-purple-600 mb-6">
                        <flux:icon.phone class="h-8 w-8" />
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Call Us</h3>
                    <p class="text-gray-600 leading-relaxed">
                        +94 77 123 4567<br>
                        +94 45 123 4567
                    </p>
                </div>

                <!-- Email Card -->
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300 text-center">
                    <div class="inline-flex items-center justify-center h-16 w-16 rounded-full bg-purple-100 text-purple-600 mb-6">
                        <flux:icon.envelope class="h-8 w-8" />
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Email Us</h3>
                    <p class="text-gray-600 leading-relaxed">
                        info@deshaemart.com<br>
                        support@deshaemart.com
                    </p>
                </div>
            </div>

            <!-- Form and Map Section -->
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
                <!-- Contact Form - Takes 3 columns -->
                <div class="lg:col-span-3">
                    <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8 sm:p-12">
                        <div class="mb-8">
                            <h2 class="text-3xl font-extrabold text-gray-900 mb-3">Send a Message</h2>
                            <p class="text-gray-600">Fill out the form below and we'll get back to you within 24 hours.</p>
                        </div>

                        @if (session()->has('message'))
                            <div class="rounded-xl bg-green-50 border border-green-200 p-4 mb-6 animate-fade-in">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <flux:icon.check-circle class="h-6 w-6 text-green-500" />
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-green-800">
                                            {{ session('message') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <form wire:submit="submit" class="space-y-6">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label>
                                    <input wire:model="name" type="text" id="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200 placeholder-gray-400" placeholder="John Doe">
                                    @error('name') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                                    <input wire:model="email" type="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200 placeholder-gray-400" placeholder="john@example.com">
                                    @error('email') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Your Message *</label>
                                <textarea wire:model="message" id="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200 placeholder-gray-400 resize-none" placeholder="Tell us how we can help you..."></textarea>
                                @error('message') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <button type="submit" class="w-full bg-purple-600 text-white font-semibold py-4 px-6 rounded-lg hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition-all duration-200 transform hover:scale-[1.02] shadow-lg hover:shadow-xl">
                                    <span class="flex items-center justify-center">
                                        <flux:icon.paper-airplane class="w-5 h-5 mr-2" />
                                        Send Message
                                    </span>
                                </button>
                            </div>

                            <p class="text-xs text-gray-500 text-center">
                                By submitting this form, you agree to our privacy policy.
                            </p>
                        </form>
                    </div>
                </div>

                <!-- Map Section - Takes 2 columns -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden h-full">
                        <div class="p-6 border-b border-gray-100">
                            <h3 class="text-xl font-bold text-gray-900 flex items-center">
                                <flux:icon.map class="w-6 h-6 text-purple-600 mr-2" />
                                Find Us Here
                            </h3>
                        </div>
                        <div class="h-[500px] lg:h-[calc(100%-76px)]">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63396.96955666666!2d80.7517108!3d6.7131381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae38b2354715279%3A0x9584cfcca475917d!2sBalangoda!5e0!3m2!1sen!2slk!4v1703740000000!5m2!1sen!2slk"
                                width="100%"
                                height="100%"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
