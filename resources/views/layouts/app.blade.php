<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logan Lifestyle</title>
    {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
    {{-- <link rel="icon" href="{{ asset('logo/IMG_3682.PNG') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('logo/IMG_3682.PNG') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('logo/IMG_3682.PNG') }}"> --}}
    <!-- AOS CSS from CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>    <!-- Bootstrap CSS -->
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
            background: #0b2c65;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10000;
        }

        .loader {
            border: 8px solid #f3f3f3;
            border-radius: 50%;
            border-top: 8px solid #3498db;
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
            background: #0b2c65;
            transform: translateX(0);
            transition: transform 0.8s ease-out;
        }

        #curtain-container.reveal .curtain {
            transform: translateX(100%);
        }
    </style>
</head>

<body>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.0/lazysizes.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    <!-- AOS JS from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
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

                // After curtain animation, show content and remove curtains
                setTimeout(() => {
                    curtainContainer.style.display = 'none';
                    app.style.display = 'block';
                }, 1000); // Adjust timing to match the curtain animation duration
            }, 1000); // Loader delay duration (adjust as needed)
        });
    </script>
</body>

</html>
