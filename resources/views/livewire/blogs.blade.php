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
                <div class="flex flex-col rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300 border border-gray-100">
                    <div class="flex-shrink-0">
                        @if($blog->image_url)
                            <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" class="h-48 w-full object-cover">
                        @else
                            <div class="h-48 w-full bg-purple-100 flex items-center justify-center">
                                <flux:icon.newspaper class="w-12 h-12 text-purple-400" />
                            </div>
                        @endif
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <a href="#" class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900 hover:text-purple-600 transition-colors duration-200">
                                    {{ $blog->title }}
                                </p>
                                <p class="mt-3 text-base text-gray-500">
                                    {!! \Illuminate\Support\Str::limit(strip_tags($blog->content), 120) !!}
                                </p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <div class="h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 font-bold">
                                    DE
                                </div>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Desha Emart</p>
                                <div class="flex space-x-1 text-sm text-gray-500">
                                    <time datetime="{{ $blog->created_at->toDateString() }}">{{ $blog->created_at->format('M d, Y') }}</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

    <!-- Newsletter Section -->
    <section class="bg-purple-700">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center">
            <div class="lg:w-0 lg:flex-1">
                <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                    Sign up for our newsletter
                </h2>
                <p class="mt-3 max-w-3xl text-lg text-purple-200">
                    Get the latest news, updates, and special offers delivered directly to your inbox.
                </p>
            </div>
            <div class="mt-8 lg:mt-0 lg:ml-8">
                <form class="sm:flex">
                    <label for="email-address" class="sr-only">Email address</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required class="w-full px-5 py-3 border border-transparent placeholder-gray-500 focus:ring-2 focus:ring-offset-2 focus:ring-offset-purple-700 focus:ring-white focus:border-white sm:max-w-xs rounded-md" placeholder="Enter your email">
                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                        <button type="submit" class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-purple-600 bg-white hover:bg-purple-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-purple-700 focus:ring-white">
                            Notify me
                        </button>
                    </div>
                </form>
                <p class="mt-3 text-sm text-purple-200">
                    We care about the protection of your data. Read our
                    <a href="#" class="text-white font-medium underline">
                        Privacy Policy.
                    </a>
                </p>
            </div>
        </div>
    </section>
</div>
