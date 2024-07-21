@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-4 subscribe-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <!-- Subscribe Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Leave Comment</h5>
                        <form>
                            <div class="form-group">
                                <input type="text" id="name" class="form-control" placeholder="Enter name"><br>
                                <textarea id="comment" class="form-control" placeholder="Leave Comment"></textarea><br>
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form><br>

                        <!-- Latest News -->
                        <h5>Latest News:</h5>
                        <div class="latest-news mb-4">
                            <div class="news-item mb-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                                <img src="images/wedding.jpg" alt="News 1" class="img-fluid mb-2">
                                <h6>Weddings</h6>
                                <h2 class="single-page-subtitle">The Perfect Blend of Elegance and Charm</h2><br>
                                {{-- <div class="blog-post-meta small text-muted mb-2">
                                    <span>Date</span> / <span>By Author</span>
                                </div> --}}
                            </div>
                            <div class="news-item mb-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                                <img src="images/arts.jpg" alt="News 2" class="img-fluid mb-2">
                                <h6>ART SHOWS & POP UPS</h6>
                                <h2 class="single-page-subtitle">Immerse Your Audience in a World of Creativity</h2><br>
                                {{-- <div class="blog-post-meta small text-muted mb-2">
                                    <span>Date</span> / <span>By Author</span>
                                </div> --}}
                            </div>
                        </div>

                        <!-- Categories -->
                        <h5>Categories:</h5>
                        <ul class="list-unstyled categories-list" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                            <li><a href="{{ route('wedding') }}">WEDDINGS</a></li>
                            <li><a href="{{ route('arts') }}">ART SHOWS & POP UPS</a></li>
                            <li><a href="{{ route('dance') }}">DANCE PARTIES</a></li>
                            <li><a href="{{ route('meditaion') }}">SPIRITUAL & MEDITATION</a></li>
                        </ul>

                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-md-8 blog-posts">
                <div class="blog-posts">
                    <!-- Blog Post 1 -->
                    <div class="blog-post mb-5" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <a href="{{ route('wedding') }}"><img src="images/wedding.jpg" alt="Blog Post 1" class="img-fluid mb-3"></a>
                        <div class="blog-post-meta small text-muted mb-2">
                            <span>Date</span> / <span>By Author</span>
                        </div>
                        <h3><a href="{{ route('wedding') }}">WEDDINGS</a></h3>
                        <p>Celebrate your love story at Logan Lifestyle. Emphasize the unique features and atmosphere that
                            make your event center the ideal choice for weddings. Our stunning event center offers the
                            perfect blend of elegance and charm, making it the ideal venue for your unforgettable wedding
                            day.</p>
                        <a href="{{ route('wedding') }}" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <!-- Repeat for Blog Posts 2, 3, and 4 -->
                    <div class="blog-post mb-5" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <a href="{{ route('arts') }}"><img src="images/arts.jpg" alt="Blog Post 1" class="img-fluid mb-3"></a>
                        <div class="blog-post-meta small text-muted mb-2">
                            <span>Date</span> / <span>By Author</span>
                        </div>
                        <h3><a href="{{ route('arts') }}">ART SHOWS & POP UPS</a></h3>
                        <p>Immerse your audience in a world of creativity at Logan Lifestyle. Our versatile event center is
                            the perfect canvas for your art shows and pop-up events, offering a dynamic space that brings
                            your vision to life.</p>
                        <a href="{{ route('arts') }}" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <div class="blog-post mb-5" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <a href="{{ route('dance') }}"><img src="images/dance.jpg" alt="Blog Post 1" class="img-fluid mb-3"></a>
                        <div class="blog-post-meta small text-muted mb-2">
                            <span>Date</span> / <span>By Author</span>
                        </div>
                        <h3><a href="{{ route('dance') }}">DANCE PARTIES</a></h3>
                        <p>Get ready to dance the night away at Logan Lifestyle! Our event center is the perfect place for
                            unforgettable dance parties, offering a vibrant atmosphere and top-notch amenities to make your
                            event a hit.</p>
                        <a href="{{ route('dance') }}" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <div class="blog-post mb-5" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <a href="{{ route('meditaion') }}"><img src="images/meditation.jpg" alt="Blog Post 1" class="img-fluid mb-3"></a>
                        <div class="blog-post-meta small text-muted mb-2">
                            <span>Date</span> / <span>By Author</span>
                        </div>
                        <h3><a href="{{ route('meditaion') }}">SPIRITUAL & MEDITATION</a></h3>
                        <p>Find peace and tranquility at Logan Lifestyle. Our serene event center is the perfect setting for
                            spiritual retreats, meditation sessions, and wellness workshops, providing a calm and inspiring
                            environment for your guests.</p>
                        <a href="{{ route('meditaion') }}" class="read-more">Read More <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Blog pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="footer-carousel-section" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <div class="container">
            <h1 class="carousel-title">Choose the right plan for every occasion</h1>

            <div class="search-filters" data-aos-delay="200">
                <div class="filter-item">
                    <label for="location">Select Location</label>
                    <div class="input-icon">
                        <i class="fas fa-map-marker-alt"></i>
                        <input type="text" id="location" placeholder="Enter location">
                    </div>
                </div>

                <div class="filter-item">
                    <label for="date">Pick a Date</label>
                    <input type="date" id="date">
                </div>

                <div class="filter-item">
                    <label for="price">Price</label>
                    <input type="range" id="price" min="0" max="1000" step="10">
                    <div class="price-display">$<span id="priceValue">500</span></div>
                </div>

                <div class="filter-item">
                    <button class="find-place-btn">Find a Place</button>
                </div>
            </div>
        </div>

        <div class="footer-carousel">
            <div class="carousel-container">
                <!-- Add your carousel images here -->
                <img src="images/wedding.jpg" alt="Carousel Image 1">
                <img src="images/dance.jpg" alt="Carousel Image 2">
                <img src="images/meditation.jpg" alt="Carousel Image 3">
                <img src="images/arts.jpg" alt="Carousel Image 4">
                <img src="images/wedding.jpg" alt="Carousel Image 5">
            </div>
            <div class="carousel-controls">
                <button class="carousel-button" data-index="0"></button>
                <button class="carousel-button" data-index="1"></button>
                <button class="carousel-button" data-index="2"></button>
                <button class="carousel-button" data-index="3"></button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carouselContainer = document.querySelector('.carousel-container');
            const buttons = document.querySelectorAll('.carousel-button');
            const images = carouselContainer.querySelectorAll('img');
            let currentIndex = 0;
            let intervalId;
            let isMobile = window.innerWidth <= 768;

            function updateCarouselLayout() {
                isMobile = window.innerWidth <= 768;
                if (isMobile) {
                    carouselContainer.style.width = `${images.length * 100}%`;
                    images.forEach(img => img.style.width = `${100 / images.length}%`);
                } else {
                    carouselContainer.style.width = `${images.length * 25}%`;
                    images.forEach(img => img.style.width = '25%');
                }
                moveCarousel();
            }

            function moveCarousel() {
                if (isMobile) {
                    if (currentIndex >= images.length) {
                        currentIndex = 0;
                    }
                    carouselContainer.style.transform = `translateX(-${currentIndex * (100 / images.length)}%)`;
                } else {
                    if (currentIndex >= images.length - 3) {
                        currentIndex = 0;
                    }
                    carouselContainer.style.transform = `translateX(-${currentIndex * 25}%)`;
                }
                updateButtons();
            }

            function updateButtons() {
                buttons.forEach((button, index) => {
                    if (isMobile) {
                        button.classList.toggle('active', index === currentIndex);
                    } else {
                        button.classList.toggle('active', Math.floor(currentIndex / 4) === index);
                    }
                });
            }

            function nextSlide() {
                currentIndex++;
                moveCarousel();
            }

            function startCarousel() {
                intervalId = setInterval(nextSlide, 5000);
            }

            function stopCarousel() {
                clearInterval(intervalId);
            }

            buttons.forEach((button, index) => {
                button.addEventListener('click', () => {
                    stopCarousel();
                    currentIndex = isMobile ? index : index * 4;
                    moveCarousel();
                    startCarousel();
                });
            });

            window.addEventListener('resize', updateCarouselLayout);

            updateCarouselLayout();
            startCarousel();

            carouselContainer.addEventListener('mouseenter', stopCarousel);
            carouselContainer.addEventListener('mouseleave', startCarousel);
        });

        // Price slider code (keep this part unchanged)
        document.addEventListener('DOMContentLoaded', function() {
            const priceSlider = document.getElementById('price');
            const priceValue = document.getElementById('priceValue');

            priceSlider.addEventListener('input', function() {
                priceValue.textContent = this.value;
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const priceSlider = document.getElementById('price');
            const priceValue = document.getElementById('priceValue');

            priceSlider.addEventListener('input', function() {
                priceValue.textContent = this.value;
            });

            // ... (rest of your existing DOMContentLoaded code)
        });
    </script>
@endsection
