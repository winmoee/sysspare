<!-- resources/views/partials/showroom-carousel.blade.php -->
<div class="carousel-container" id="showroom-carousel">
    <div class="carousel-slides">
        <div class="carousel-slide active">
            <img class="w-full h-auto rounded-lg" src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/site/srsDvBFG6CY05EuX8HCx.webp" alt="Showroom Image 1">
        </div>
        <div class="carousel-slide">
            <img class="w-full h-auto rounded-lg" src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/other+products/showroom/showroom1.jpg" alt="Showroom Image 2">
        </div>
        <div class="carousel-slide">
            <img class="w-full h-auto rounded-lg" src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/other+products/showroom/showroom2.jpg" alt="Showroom Image 3">
        </div>
        <div class="carousel-slide">
            <img class="w-full h-auto rounded-lg" src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/other+products/showroom/showroom5.jpg" alt="Showroom Image 4">
        </div>
        <div class="carousel-slide">
            <img class="w-full h-auto rounded-lg" src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/other+products/showroom/showroom6.jpg" alt="Showroom Image 5">
        </div>
        <div class="carousel-slide">
            <img class="w-full h-auto rounded-lg" src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/other+products/showroom/showroom8.jpg" alt="Showroom Image 6">
        </div>
        <div class="carousel-slide">
            <img class="w-full h-auto rounded-lg" src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/other+products/showroom/showroom10.jpg" alt="Showroom Image 7">
        </div>
        <div class="carousel-slide">
            <img class="w-full h-auto rounded-lg" src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/other+products/showroom/showroom11.jpg" alt="Showroom Image 8">
        </div>
        <div class="carousel-slide">
            <img class="w-full h-auto rounded-lg" src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/other+products/showroom/showroom13.jpg" alt="Showroom Image 9">
        </div>
        <div class="carousel-slide">
            <img class="w-full h-auto rounded-lg" src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/other+products/showroom/showroom14.jpg" alt="Showroom Image 10">
        </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="carousel-nav carousel-nav-left" onclick="changeSlide('showroom-carousel', -1)">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
    </div>
    <div class="carousel-nav carousel-nav-right" onclick="changeSlide('showroom-carousel', 1)">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </div>

    <!-- Indicators -->
    <div class="carousel-indicators">
        <span class="indicator active" onclick="currentSlide('showroom-carousel', 1)"></span>
        <span class="indicator" onclick="currentSlide('showroom-carousel', 2)"></span>
        <span class="indicator" onclick="currentSlide('showroom-carousel', 3)"></span>
        <span class="indicator" onclick="currentSlide('showroom-carousel', 4)"></span>
        <span class="indicator" onclick="currentSlide('showroom-carousel', 5)"></span>
        <span class="indicator" onclick="currentSlide('showroom-carousel', 6)"></span>
        <span class="indicator" onclick="currentSlide('showroom-carousel', 7)"></span>
        <span class="indicator" onclick="currentSlide('showroom-carousel', 8)"></span>
        <span class="indicator" onclick="currentSlide('showroom-carousel', 9)"></span>
        <span class="indicator" onclick="currentSlide('showroom-carousel', 10)"></span>
    </div>
</div>
