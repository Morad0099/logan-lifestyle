<nav class="navbar-custom">
    <!-- Top bar with contact info and social icons -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span class="mr-3"><i class="fas fa-envelope"></i> info@example.com</span>
                    <span><i class="fas fa-phone"></i> (416) 317-4489</span>
                </div>
                <div class="col-md-6 text-right">
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main navigation bar -->
    <div class="main-nav">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a href="/" class="navbar-brand">
                    <img src="{{ asset('images/LoganLifestyle.png') }}" alt="Logan Lifestyle Logo" class="logo">
                </a>
                <div class="d-flex align-items-center">
                    <ul class="nav mr-4">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about_us') }}">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="servicesDropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                                <li><a class="dropdown-item" href="{{ route('wedding') }}">Weddings</a></li>
                                <li><a class="dropdown-item" href="{{ route('arts') }}">Art Shows & Pop Ups</a></li>
                                <li><a class="dropdown-item" href="{{ route('dance') }}">Dance Parties</a></li>
                                <li><a class="dropdown-item" href="{{ route('meditaion') }}">Spiritual Meditation</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    </ul>

                     <div class="nav-icons">
                       {{-- <a href="#" class="nav-icon" title="Search"><i class="fas fa-search"></i></a>
                        <a href="#" class="nav-icon" title="Shopping Cart"><i
                                class="fas fa-shopping-cart"></i></a>
                        <a href="#" class="nav-icon" title="Language"><i class="fas fa-globe"></i></a>
                        <a href="#" class="nav-icon" title="User Account"><i class="fas fa-user"></i></a> --}}
                        <button class="toggle-button"><i class="fas fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Side Drawer -->
    <div id="sideDrawer" class="side-drawer">
        <div class="side-drawer-content">
            <img src="{{ asset('images/LoganLifestyle.png') }}" alt="Logan Lifestyle Logo" class="logo">
            {{-- <p class="company-description">Welcome to Logan Lifestyle, your premier destination for finding the perfect apartment for your next stay. Whether you’re planning a short vacation or a long-term stay, we offer a wide range of fully furnished apartments to suit your needs. Our mission is to provide a seamless booking experience, ensuring that you feel at home no matter where you are. With a commitment to quality and customer satisfaction, we make it easy for you to find, book, and enjoy your ideal apartment. Explore our listings and discover your home away from home today!</p> --}}
            {{-- <h3>Menu List</h3> --}}
            <ul class="side-menu">
                <li><a href="/">Home</a></li>
                <li><a href="{{ route('about_us') }}">About</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Services</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('wedding') }}">Weddings</a></li>
                        <li><a href="{{ route('arts') }}">Art Shows & Pop Ups</a></li>
                        <li><a href="{{ route('dance') }}">Dance Parties</a></li>
                        <li><a href="{{ route('meditaion') }}">Spiritual Meditation</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            {{-- <h3>Book a Place</h3>
            <p class="small-text">Ready to find your perfect stay? Browse our selection of top-rated apartments and book
                your ideal home away from home in just a few clicks. Enjoy comfort, convenience, and quality
                accommodations</p>
            <div class="booking-form">
                <label for="location">Location</label>
                <div class="input-with-icon">
                    <input type="text" id="location" placeholder="Enter location">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <label for="date">Pick a Date</label>
                <input type="date" id="date">
                <button class="book-button">Book Now <i class="fas fa-arrow-right"></i></button>
            </div> --}}
        </div>
    </div>

    <!-- Page title bar with carousel -->
    @if (Route::currentRouteName() == 'home')
        <!-- Carousel for home page -->
        <div id="pageTitleCarousel" class="carousel slide page-title-bar" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active"
                    style="background-image: url('{{ asset('images/meditation.jpg') }}');">
                    <div class="container">
                        <h4 style="font-weight: bold; color: white">@yield('title', 'Home')</h4>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('{{ asset('images/wedding.jpg') }}');">
                    <div class="container">
                        <h4 style="font-weight: bold; color: white">@yield('title', 'Home')</h4>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('{{ asset('images/arts.jpg') }}');">
                    <div class="container">
                        <h4 style="font-weight: bold; color: white">@yield('title', 'Home')</h4>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('{{ asset('images/dance.jpg') }}');">
                    <div class="container">
                        <h4 style="font-weight: bold; color: white">@yield('title', 'Home')</h4>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#pageTitleCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#pageTitleCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    @else
        <!-- Static image for other pages -->
        <div class="page-title-bar" style="background-image: url('@yield('page_background')');">
            <div class="container">
                <h4 style="font-weight: bold; color: white">@yield('title', 'Page Title')</h4>
            </div>
        </div>
    @endif

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">@yield('title', 'Current Page')</li>
            </ol>
        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mainNav = document.querySelector('.main-nav');
    const toggleButton = document.querySelector('.toggle-button');
    const sideDrawer = document.getElementById('sideDrawer');
    const body = document.body;
    const dropdownToggle = document.querySelector('.side-menu .dropdown-toggle');
    const dropdownMenu = document.querySelector('.side-menu .dropdown-menu');

    // Create overlay element
    const overlay = document.createElement('div');
    overlay.classList.add('overlay');
    body.appendChild(overlay);

    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            mainNav.classList.add('nav-scrolled');
        } else {
            mainNav.classList.remove('nav-scrolled');
        }
    });

    toggleButton.addEventListener('click', function() {
        sideDrawer.classList.toggle('open');
        overlay.classList.toggle('show');
        body.style.overflow = sideDrawer.classList.contains('open') ? 'hidden' : '';
    });

    overlay.addEventListener('click', function() {
        sideDrawer.classList.remove('open');
        overlay.classList.remove('show');
        body.style.overflow = '';
    });

    dropdownToggle.addEventListener('click', function(e) {
        e.preventDefault();
        this.classList.toggle('active');
        dropdownMenu.style.display = dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '' ? 'block' : 'none';
    });
});

    $(document).ready(function() {
        $('#pageTitleCarousel').carousel({
            interval: 5000 // Change slide every 5 seconds
        });
    });
</script>
