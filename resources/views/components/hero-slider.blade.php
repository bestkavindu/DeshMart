<!-- Modern Hero Slider for Phone Shop -->
<div x-data="{
    currentSlide: 0,
    slides: [
        {
            title: 'Expert Laptop Repair',
            subtitle: 'Fast & Reliable Service',
            description: 'Professional diagnosis and repair for all laptop brands and models.',
            image: '/images/slider/slider-1.jpg',
            price: 'From $29',
            badge: 'Top Service'
        },
        {
            title: 'Mobile Phone Solutions',
            subtitle: 'Screen & Battery Replacement',
            description: 'Get your phone fixed quickly with genuine parts and warranty.',
            image: '/images/slider/slider-2.jpg',
            price: 'From $19',
            badge: 'Express Repair'
        },
        {
            title: 'Premium Accessories',
            subtitle: 'Enhance Your Experience',
            description: 'Wide range of high-quality accessories for your devices.',
            image: '/images/slider/slider-3.jpg',
            price: 'Best Prices',
            badge: 'New Arrivals'
        }
    ],
    autoplay: null,
    init() {
        this.startAutoplay();
    },
    startAutoplay() {
        this.autoplay = setInterval(() => {
            this.next();
        }, 6000);
    },
    stopAutoplay() {
        clearInterval(this.autoplay);
    },
    next() {
        this.currentSlide = (this.currentSlide + 1) % this.slides.length;
    },
    prev() {
        this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
    },
    goTo(index) {
        this.currentSlide = index;
        this.stopAutoplay();
        this.startAutoplay();
    }
}"
class="relative w-full h-[600px] md:h-[700px] overflow-hidden rounded-3xl shadow-2xl"
@mouseenter="stopAutoplay()"
@mouseleave="startAutoplay()">

    <!-- Slides Container -->
    <template x-for="(slide, index) in slides" :key="index">
        <div x-show="currentSlide === index"
             x-transition:enter="transition ease-out duration-1000"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-500"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="absolute inset-0 w-full h-full">

            <!-- Full Background Image with Overlay -->
            <div class="absolute inset-0">
                <img :src="slide.image"
                     :alt="slide.title"
                     class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-transparent"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-purple-900/40 via-transparent to-black/20"></div>
            </div>

            <!-- Content -->
            <div class="relative h-full flex items-center px-6 md:px-12 lg:px-20 max-w-7xl mx-auto">
                <div class="max-w-2xl space-y-6">
                    <!-- Badge -->
                    {{-- <div x-show="currentSlide === index"
                         x-transition:enter="transition ease-out duration-700 delay-200"
                         x-transition:enter-start="opacity-0 -translate-x-4"
                         x-transition:enter-end="opacity-100 translate-x-0">
                        <span class="inline-block px-5 py-2 bg-purple-600 text-white text-xs md:text-sm font-bold rounded-full shadow-lg uppercase tracking-wider"
                              x-text="slide.badge"></span>
                    </div> --}}

                    <!-- Title -->
                    {{-- <h1 x-show="currentSlide === index"
                        x-transition:enter="transition ease-out duration-700 delay-300"
                        x-transition:enter-start="opacity-0 -translate-x-8"
                        x-transition:enter-end="opacity-100 translate-x-0"
                        class="text-4xl md:text-6xl lg:text-7xl font-black text-white leading-tight tracking-tight"
                        x-text="slide.title">
                    </h1>

                    <!-- Subtitle -->
                    <p x-show="currentSlide === index"
                       x-transition:enter="transition ease-out duration-700 delay-400"
                       x-transition:enter-start="opacity-0 -translate-x-8"
                       x-transition:enter-end="opacity-100 translate-x-0"
                       class="text-xl md:text-2xl lg:text-3xl text-purple-300 font-semibold"
                       x-text="slide.subtitle">
                    </p> --}}

                    {{-- <!-- Description -->
                    <p x-show="currentSlide === index"
                       x-transition:enter="transition ease-out duration-700 delay-500"
                       x-transition:enter-start="opacity-0 -translate-x-8"
                       x-transition:enter-end="opacity-100 translate-x-0"
                       class="text-base md:text-lg text-gray-300 leading-relaxed"
                       x-text="slide.description">
                    </p> --}}

                    <!-- Price and Button -->
                    {{-- <div x-show="currentSlide === index"
                         x-transition:enter="transition ease-out duration-700 delay-600"
                         x-transition:enter-start="opacity-0 -translate-x-8"
                         x-transition:enter-end="opacity-100 translate-x-0"
                         class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                        <div class="text-3xl md:text-4xl font-bold text-white">
                            <span x-text="slide.price"></span>
                        </div>
                        <button class="group relative px-8 py-4 bg-purple-600 hover:bg-purple-700 text-white font-bold rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                            <span class="flex items-center gap-2">
                                Shop Now
                                <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </span>
                        </button>
                    </div> --}}
                </div>
            </div>
        </div>
    </template>

    <!-- Navigation Arrows -->
    <button @click="prev()"
            class="absolute left-4 md:left-8 top-1/2 -translate-y-1/2 z-30 bg-white/10 hover:bg-purple-600 backdrop-blur-md text-white p-4 rounded-full transition-all duration-300 hover:scale-110 border border-white/20">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>

    <button @click="next()"
            class="absolute right-4 md:right-8 top-1/2 -translate-y-1/2 z-30 bg-white/10 hover:bg-purple-600 backdrop-blur-md text-white p-4 rounded-full transition-all duration-300 hover:scale-110 border border-white/20">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>

    <!-- Dots Navigation -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-30 flex gap-3">
        <template x-for="(slide, index) in slides" :key="index">
            <button @click="goTo(index)"
                    :class="currentSlide === index ? 'bg-purple-600 w-12' : 'bg-white/40 w-3 hover:bg-white/60'"
                    class="h-3 rounded-full transition-all duration-300 border border-white/30">
            </button>
        </template>
    </div>

    <!-- Progress Bar -->
    <div class="absolute bottom-0 left-0 right-0 h-1 bg-white/10 z-30">
        <div class="h-full bg-purple-600 transition-all duration-[6000ms] ease-linear"
             :style="'width: ' + ((currentSlide + 1) / slides.length * 100) + '%'">
        </div>
    </div>
</div>
