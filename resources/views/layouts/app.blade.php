<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logan Lifestyle</title>
    {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('images/favicon-32x32.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon-16x16.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&display=swap" rel="stylesheet">
    <!-- AOS CSS from CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script> <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
    <style>
        /* Preloader Styles */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #012c23;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10000;
        }

        .loader {
            border: 8px solid #f3f3f3;
            border-radius: 50%;
            border-top: 8px solid #e01b1b;
            width: 60px;
            height: 60px;
            animation: spin 1.5s linear infinite;
        }

        .loading-text {
            color: #f3f3f3;
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            margin: 0;
        }


        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Curtain Animation Styles */
        #curtain-container {
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            pointer-events: none;
        }

        .curtain {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: #012c23;
            transform: translateX(0);
            transition: transform 0.8s ease-out;
        }

        #curtain-container.reveal .curtain {
            transform: translateX(100%);
        }

        @keyframes slideIn {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes scaleUp {
            from {
                transform: scale(0.5);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes rotate {
            from {
                transform: rotateX(-90deg);
                opacity: 0;
            }

            to {
                transform: rotateX(0);
                opacity: 1;
            }
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-30px);
            }

            60% {
                transform: translateY(-15px);
            }
        }

        .nav-item {
            opacity: 0;
            animation-duration: 0.5s;
            animation-fill-mode: forwards;
        }

        .nav-item.animate-slideIn,
        .nav-item.animate-scaleUp,
        .nav-item.animate-rotate,
        .nav-item.animate-bounce {
            opacity: 1;
        }

        .nav-item.animate-slideIn {
            animation-name: slideIn;
        }

        .nav-item.animate-scaleUp {
            animation-name: scaleUp;
        }

        .nav-item.animate-rotate {
            animation-name: rotate;
        }

        .nav-item.animate-bounce {
            animation-name: bounce;
        }

        .nav-item:nth-child(1) {
            animation-delay: 0s;
        }

        .nav-item:nth-child(2) {
            animation-delay: 0.1s;
        }

        .nav-item:nth-child(3) {
            animation-delay: 0.2s;
        }

        .nav-item:nth-child(4) {
            animation-delay: 0.3s;
        }
    </style>
</head>

<body class="goldman-font">
    <div id="preloader">
        <div class="loader"></div>
        <p class="loading-text">Loading...</p>
    </div>
    <div id="curtain-container">
        <div class="curtain"></div>
    </div>
    <div id="app" style="display: none;">
        @include('components.navbar')
        <main>
            @yield('content')
        </main>
        @include('components.footer')
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.0/lazysizes.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    <!-- AOS JS from CDN -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        // Initialize AOS
        AOS.init();
        // Preloader and Curtain Animation Script
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            const curtainContainer = document.getElementById('curtain-container');
            const app = document.getElementById('app');

            // Simulate loader delay (adjust as needed)
            setTimeout(() => {
                preloader.style.display = 'none';
                // Start curtain animation
                curtainContainer.classList.add('reveal');

                setTimeout(() => {
                    curtainContainer.style.display = 'none';
                    app.style.display = 'block';
                    AOS.refresh(); // Refresh AOS
                }, 1000); // Adjust timing to match the curtain animation duration
            }, 500); // Reduce delay from 1000ms (1 second) to 500ms or less

        });

        document.addEventListener('DOMContentLoaded', function() {
            const fadeUpElements = document.querySelectorAll('.fade-up');

            function handleScroll() {
                fadeUpElements.forEach(element => {
                    const rect = element.getBoundingClientRect();
                    if (rect.top < window.innerHeight && rect.bottom >= 0) {
                        element.classList.add('visible');
                    }
                });
            }

            window.addEventListener('scroll', handleScroll);
            window.addEventListener('resize', handleScroll);

            // Trigger the function initially to show elements already in view
            handleScroll();
        });

        document.addEventListener('DOMContentLoaded', function() {
            const navItems = document.querySelectorAll('.nav-item');
            const animations = ['slideIn', 'scaleUp', 'rotate', 'bounce'];

            navItems.forEach((item, index) => {
                const animationClass = `animate-${animations[index % animations.length]}`;
                item.classList.add(animationClass);
                item.style.animationDelay = `${index * 0.1}s`;
            });
        });
    </script>
</body>

</html>
