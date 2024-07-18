<footer class="footer">
    <!-- Image Carousel -->
    <div class="footer-carousel-section" data-aos="fade-up">
        <div class="container">
            <h3 class="carousel-title">Choose the right plan for every occasion</h3>
        </div>
        <div class="footer-carousel">
            <div class="carousel-container">
                <!-- Add your carousel images here -->
                <img src="images/hack.jpg" alt="Carousel Image 1" data-aos="fade-up">
                <img src="images/w1.jpg" alt="Carousel Image 2" data-aos="fade-up" data-aos-delay="100">
                <img src="images/hack.jpg" alt="Carousel Image 3" data-aos="fade-up" data-aos-delay="200">
                <img src="images/w1.jpg" alt="Carousel Image 4" data-aos="fade-up" data-aos-delay="300">
                <img src="images/hack.jpg" alt="Carousel Image 5" data-aos="fade-up" data-aos-delay="400">
            </div>
            <div class="carousel-controls">
                <button class="carousel-button" data-index="0"></button>
                <button class="carousel-button" data-index="1"></button>
                <button class="carousel-button" data-index="2"></button>
                <button class="carousel-button" data-index="3"></button>
            </div>
        </div>
    </div>

    <!-- Footer Content -->
    <div class="footer-content" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>About the Company</h4>
                    <p>Brief description about your company goes here.</p>
                    <div class="search-box">
                        <input type="text" placeholder="Search...">
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>Contact Us</h4>
                    <p>Address: 123 Street Name, City, Country</p>
                    <p>Phone: +1 234 567 890</p>
                    <p>Email: info@example.com</p>
                </div>
                <div class="col-md-4">
                    <h4>About Us</h4>
                    <p>More information about your company, mission, or values can go here.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright and Social Icons -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2024 Logan Lifestyle. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-right icons-wrapper">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const carouselContainer = document.querySelector('.carousel-container');
    const buttons = document.querySelectorAll('.carousel-button');
    const images = carouselContainer.querySelectorAll('img');
    let currentIndex = 0;
    let intervalId;

    // Duplicate the images for infinite looping
    images.forEach(image => {
        const clone = image.cloneNode(true);
        carouselContainer.appendChild(clone);
    });

    function moveCarousel() {
        if (currentIndex >= images.length) {
            carouselContainer.style.transition = 'none';
            currentIndex = 0;
            carouselContainer.style.transform = `translateX(0)`;
            setTimeout(() => {
                carouselContainer.style.transition = 'transform 0.5s ease';
                moveCarousel();
            }, 0);
        } else {
            carouselContainer.style.transform = `translateX(-${currentIndex * 25}%)`;
            buttons.forEach((button, index) => {
                button.classList.toggle('active', index === currentIndex % images.length);
            });
        }
    }

    function nextSlide() {
        currentIndex++;
        moveCarousel();
    }

    function startCarousel() {
        intervalId = setInterval(nextSlide, 5000); // Change image every 5 seconds
    }

    function stopCarousel() {
        clearInterval(intervalId);
    }

    buttons.forEach((button, index) => {
        button.addEventListener('click', () => {
            stopCarousel();
            currentIndex = index % images.length;
            moveCarousel();
            startCarousel();
        });
    });

    // Initial carousel start
    startCarousel();

    // Optional: Pause on hover
    carouselContainer.addEventListener('mouseenter', stopCarousel);
    carouselContainer.addEventListener('mouseleave', startCarousel);
});

</script>