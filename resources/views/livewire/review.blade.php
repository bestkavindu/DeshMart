<div>
    <!-- Reviews Page Header -->
    <section class="bg-gradient-to-br from-purple-900 via-purple-800 to-black py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center animate-fade-in-up">
                <span
                    class="inline-block px-4 py-1 bg-purple-500/20 text-purple-300 text-sm font-medium rounded-full mb-4">Testimonials</span>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Customer Reviews</h1>
                <p class="text-purple-200 max-w-2xl mx-auto text-lg">See what our valued customers have to say about our
                    services. Your satisfaction is our priority.</p>
            </div>
        </div>
    </section>

    <!-- Reviews Grid Section -->
    <section class="bg-gradient-to-br from-purple-900 via-purple-800 to-black py-12 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Reviews Grid -->
            <div class="columns-1 md:columns-2 lg:columns-3 gap-8 space-y-8">
                @forelse ($reviews as $item)
                    <div
                        class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:bg-white/15 hover:-translate-y-1 hover:scale-105 transition-all duration-300 animate-fade-in-up break-inside-avoid">
                        <!-- Stars -->
                        <div class="flex gap-1 mb-4">
                            @for ($i = 0; $i < $item->rating; $i++)
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </div>
                        <!-- Quote -->
                        <p class="text-white/90 text-base leading-relaxed mb-6">{{ $item->content }}</p>
                        <!-- Customer Info -->
                        <div class="flex items-center gap-4">
                            @if ($item->user_img)
                                <img src="{{ $item->user_img }}" alt="Customer"
                                    class="w-12 h-12 rounded-full object-cover ring-2 ring-purple-400">
                            @else
                                <div
                                    class="w-12 h-12 rounded-full bg-purple-600 ring-2 ring-purple-400 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                    </svg>
                                </div>
                            @endif
                            <div>
                                <h4 class="text-white font-semibold">{{ $item->name }}</h4>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-purple-200 text-lg">No reviews available yet.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                {{ $reviews->links() }}
            </div>
        </div>
    </section>
</div>
