<nav class="navbar-custom">
    <!-- Top bar with contact info and social icons -->
    <div class="top-bar" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span class="mr-3"><i class="fas fa-envelope"></i> info@example.com</span>
                    <span><i class="fas fa-phone"></i> +1 234 567 890</span>
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
    <div class="main-nav" data-aos="fade-down">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a href="#" class="navbar-brand">
                    <img src="{{ asset('images/logo2.png') }}" alt="Logan Lifestyle Logo" class="logo">
                </a>
                <div class="d-flex align-items-center">
                    <ul class="nav mr-4">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    </ul>
                    <div class="nav-icons">
                        <a href="#" class="nav-icon" title="Search"><i class="fas fa-search"></i></a>
                        <a href="#" class="nav-icon" title="Shopping Cart"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#" class="nav-icon" title="Language"><i class="fas fa-globe"></i></a>
                        <a href="#" class="nav-icon" title="User Account"><i class="fas fa-user"></i></a>
                        <button class="toggle-button"><i class="fas fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page title bar -->
    <div class="page-title-bar" data-aos="fade-down">
        <div class="container">
            <h4>@yield('page_title', 'Page Title')</h4>
        </div>
    </div>

    <!-- Breadcrumbs -->
    <div class="breadcrumbs" data-aos="fade-down">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">@yield('page_title', 'Current Page')</li>
            </ol>
        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const mainNav = document.querySelector('.main-nav');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) { // Adjust the scroll value as needed
            mainNav.classList.add('nav-scrolled');
        } else {
            mainNav.classList.remove('nav-scrolled');
        }
    });
});
</script>
