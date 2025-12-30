<div>
    <!-- Hero Section -->
    <div class="bg-purple-50 py-16 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
                Latest News & Articles
            </h1>
            <p class="mt-5 max-w-xl mx-auto text-xl text-gray-500">
                Stay updated with the latest tech trends, repair tips, and company news.
            </p>
        </div>
    </div>

    <!-- Search and Filter Section -->
    <section class="py-8 bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row gap-4 items-center justify-between">
                <!-- Search Input -->
                <div class="relative w-full sm:w-96">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input
                        type="text"
                        wire:model.live.debounce.300ms="search"
                        placeholder="Search articles..."
                        class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-xl leading-5 bg-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 sm:text-sm transition-colors duration-200"
                    >
                </div>

                <!-- Sort Dropdown -->
                <div class="flex items-center gap-3 w-full sm:w-auto">
                    <label for="sortBy" class="text-sm font-medium text-gray-700 whitespace-nowrap">Sort by:</label>
                    <select
                        wire:model.live="sortBy"
                        id="sortBy"
                        class="block w-full sm:w-48 py-3 px-4 border border-gray-300 rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 sm:text-sm transition-colors duration-200"
                    >
                        <option value="latest">Latest First</option>
                        <option value="oldest">Oldest First</option>
                        <option value="title_asc">Title (A-Z)</option>
                        <option value="title_desc">Title (Z-A)</option>
                    </select>
                </div>
            </div>

            <!-- Results count -->
            <div class="mt-4 text-sm text-gray-500">
                Showing {{ $blogs->count() }} of {{ $blogs->total() }} articles
                @if($search)
                    for "<span class="font-medium text-purple-600">{{ $search }}</span>"
                @endif
            </div>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($blogs->count() > 0)
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 lg:gap-8">
                @foreach($blogs as $blog)
                <!-- Blog Post -->
                                    <article
                        class="bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] hover:-translate-y-1 transition-all duration-300 border border-gray-50 group">
                        <div class="relative overflow-hidden">
                            <img src="{{ $blog->image_url }}" alt="Mobile Phone Tips"
                                class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-300">
                            <div class="absolute top-4 left-4">
                                <span class="px-3 py-1 bg-purple-600 text-white text-xs font-medium rounded-full">Tips
                                    & Tricks</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-4 text-sm text-gray-500 mb-4">
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    {{ $blog->created_at->format('M d, Y') }}
                                </span>
                            </div>
                            <h3
                                class="text-xl font-bold text-gray-900 mb-3 group-hover:text-purple-600 transition-colors duration-300">
                                {{ $blog->title }}</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4"> {!! \Illuminate\Support\Str::limit(strip_tags($blog->content), 150) !!}</p>
                            <a href="#"
                                class="inline-flex items-center text-purple-600 font-semibold text-sm hover:text-purple-700 transition-colors duration-300">
                                Read More
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $blogs->links() }}
            </div>
            @else
            <div class="text-center py-16">
                <svg class="mx-auto h-16 w-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
                <h3 class="mt-4 text-lg font-medium text-gray-900">No articles found</h3>
                <p class="mt-2 text-gray-500">Try adjusting your search to find what you're looking for.</p>
                @if($search)
                    <button wire:click="$set('search', '')" class="mt-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-purple-700 bg-purple-100 hover:bg-purple-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                        Clear search
                    </button>
                @endif
            </div>
            @endif
        </div>
    </section>
</div>
