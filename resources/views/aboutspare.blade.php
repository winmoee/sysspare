<x-app-layout>
    <!-- Showroom Slideshow -->
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <h3 class="text-2xl font-semibold text-green-700 mb-6">Spare parts Shop</h3>

        <div class="bg-white rounded-lg p-4 shadow mb-4">
            <p class="text-gray-600 mb-2">
                Spare parts Shop No. (148/149), Anawrahta Main Road, Industrial Zone (5) Extension, Near Gate (86), Hlaing Tharyar Township Yangon.
            </p>

            <a href="https://maps.app.goo.gl/L2SfCDJeAJBv35Gm8"
               class="inline-flex items-center text-green-600 hover:text-green-700">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                {{__('messages.seinnyaungso_company')}}
                <br>
            </a>
            <br>
            <br>
        <div class="carousel-container" id="showroom-carousel" data-carousel-id="showroom-carousel">
            <div class="carousel-slides">
                <div class="carousel-slide active">
                    <img class="w-full h-auto rounded-lg" src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/store4.jpg">
                </div>
                <div class="carousel-slide">
                    <img class="w-full h-auto rounded-lg" src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/store5.jpg" alt="Showroom Image 2">
                </div>
                <div class="carousel-slide">
                    <img class="w-full h-auto rounded-lg" src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/store3.jpg" alt="Showroom Image 3">
                </div>
                <div class="carousel-slide">
                    <img class="w-full h-auto rounded-lg" src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/store2.jpg" alt="Showroom Image 4">
                </div>
                <div class="carousel-slide">
                    <img class="w-full h-auto rounded-lg" src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/store.jpg" alt="Showroom Image 5">
                </div>
                <div class="carousel-slide">
                    <img class="w-full h-auto rounded-lg" src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/store1.jpg" alt="Showroom Image 6">
                </div>

            </div>

            <!-- Navigation Buttons -->
            <div class="carousel-nav carousel-nav-left bg-green-600 hover:bg-green-700 text-white rounded-full p-2 cursor-pointer absolute top-1/2 left-4 transform -translate-y-1/2 shadow-lg">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </div>
            <div class="carousel-nav carousel-nav-right bg-green-600 hover:bg-green-700 text-white rounded-full p-2 cursor-pointer absolute top-1/2 right-4 transform -translate-y-1/2 shadow-lg">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>

            <!-- Indicators -->
            <div class="carousel-indicators"></div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="relative">
            <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/site/SLaxu5MEktimsQJmwNUF.webp"
                 alt="SYS"
                 class="w-full h-auto rounded-lg">
        </div>
    </div>

    <style>
        .carousel-container {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 0.5rem;
            height: 500px; /* Set a fixed height */
        }

        .carousel-slides {
            display: flex;
            transition: transform 0.5s ease;
            height: 100%;
        }

        .carousel-slide {
            min-width: 100%;
            height: 100%;
        }

        .carousel-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .carousel-nav {
            z-index: 10;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .carousel-nav-left {
            left: -5px; /* Move slightly outside the container */
        }

        .carousel-nav-right {
            right: -5px; /* Move slightly outside the container */
        }

        /* Style for indicators */
        .carousel-indicators {
            position: absolute;
            bottom: 20px;
            left: 0;
            right: 0;
            display: none; /* Hide the indicators completely */
            justify-content: center;
            align-items: center;
            gap: 8px;
            width: 100%;
            text-align: center;
        }

        .carousel-indicator {
            width: 12px;
            height: 12px;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            cursor: pointer;
            display: inline-block;
            margin: 0 4px;
        }

        .carousel-indicator.active {
            background-color: white;
            width: 14px;
            height: 14px;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Find all carousel containers
            const carouselContainers = document.querySelectorAll('.carousel-container');

            // Initialize each carousel
            carouselContainers.forEach((container, containerIndex) => {
                const carouselId = container.getAttribute('data-carousel-id') || `carousel-${containerIndex}`;
                const slides = container.querySelectorAll('.carousel-slide');
                const prevButton = container.querySelector('.carousel-nav-left');
                const nextButton = container.querySelector('.carousel-nav-right');
                const indicators = container.querySelector('.carousel-indicators');
                const carousel = container.querySelector('.carousel-slides');

                if (!carousel || !slides.length) return;

                let currentIndex = 0;
                let autoplayInterval;

                // Create indicators for this carousel
                slides.forEach((_, index) => {
                    const indicator = document.createElement('div');
                    indicator.classList.add('carousel-indicator');
                    if (index === 0) indicator.classList.add('active');
                    indicator.addEventListener('click', () => goToSlide(index));
                    indicators.appendChild(indicator);
                });

                // Update the active indicator
                function updateIndicators() {
                    const allIndicators = indicators.querySelectorAll('.carousel-indicator');
                    allIndicators.forEach((indicator, index) => {
                        if (index === currentIndex) {
                            indicator.classList.add('active');
                        } else {
                            indicator.classList.remove('active');
                        }
                    });
                }

                // Function to go to a specific slide
                function goToSlide(index) {
                    currentIndex = index;
                    carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
                    updateIndicators();
                }

                // Next and previous button handlers
                nextButton.addEventListener('click', () => {
                    currentIndex = (currentIndex + 1) % slides.length;
                    goToSlide(currentIndex);
                });

                prevButton.addEventListener('click', () => {
                    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
                    goToSlide(currentIndex);
                });

                // Auto advance slides
                function startAutoplay() {
                    autoplayInterval = setInterval(() => {
                        currentIndex = (currentIndex + 1) % slides.length;
                        goToSlide(currentIndex);
                    }, 8000); // 8 seconds
                }

                // Start autoplay
                startAutoplay();

                // Optional: pause autoplay on hover
                container.addEventListener('mouseenter', () => clearInterval(autoplayInterval));
                container.addEventListener('mouseleave', () => {
                    clearInterval(autoplayInterval);
                    startAutoplay();
                });
            });
        });
    </script>
    </x-app-layout>
     @include('layouts.footer')

