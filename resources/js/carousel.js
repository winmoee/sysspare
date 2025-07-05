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

        // Set different autoplay speeds based on carousel ID
        let autoplaySpeed;
        switch(carouselId) {
            case 'id-carousel': // Experienced Technicians carousel
                autoplaySpeed = 8000; // 8 seconds - slower like other sections
                break;
            case 'yangon-carousel':
            case 'pathein-carousel':
                autoplaySpeed = 8000; // 8 seconds
                break;
            default:
                autoplaySpeed = 8000; // 8 seconds default
        }

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

        // Auto advance slides with custom speed
        function startAutoplay() {
            autoplayInterval = setInterval(() => {
                currentIndex = (currentIndex + 1) % slides.length;
                goToSlide(currentIndex);
            }, autoplaySpeed);
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
