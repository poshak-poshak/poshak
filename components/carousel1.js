
        let slideIndex = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const prev = document.querySelector('.prev');
        const next = document.querySelector('.next');
        let slideInterval;

        function showSlide(n) {
            slideIndex = (n + slides.length) % slides.length;
            slides.forEach(slide => slide.classList.remove('active'));
            slides[slideIndex].classList.add('active');
        }

        function nextSlide() {
            showSlide(slideIndex + 1);
        }

        function prevSlide() {
            showSlide(slideIndex - 1);
        }

        function startSlideshow() {
            slideInterval = setInterval(nextSlide, 3000); // Change slide every 3 seconds
        }

        function stopSlideshow() {
            clearInterval(slideInterval);
        }

        prev.addEventListener('click', () => {
            prevSlide();
            stopSlideshow();
            startSlideshow();
        });

        next.addEventListener('click', () => {
            nextSlide();
            stopSlideshow();
            startSlideshow();
        });

        // Start the slideshow
        startSlideshow();
 