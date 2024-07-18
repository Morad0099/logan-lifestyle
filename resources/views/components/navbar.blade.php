<nav class="navbar-custom">
    <!-- Top bar with contact info and social icons -->
    <div class="top-bar">
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
<div class="main-nav">
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
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Page title bar -->
    <div class="page-title-bar">
        <div class="container">
            <h1>@yield('page_title', 'Page Title')</h1>
        </div>
    </div>

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">@yield('page_title', 'Current Page')</li>
            </ol>
        </div>
    </div>
</nav>

