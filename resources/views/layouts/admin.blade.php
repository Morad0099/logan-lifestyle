<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Logan Lifestyle Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Add these new styles */
        .content-wrapper {
            overflow-x: auto;
            overflow-y: hidden;
            height: calc(100vh - 64px); /* Adjust 64px to match your navbar height */
        }

        .content-inner {
            min-width: 100%;
            padding: 1rem;
        }

        @media (min-width: 1024px) {
            .content-inner {
                padding: 1.5rem;
            }
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex flex-col h-screen lg:flex-row">
        <!-- Sidebar -->
        <div class="lg:w-64 bg-gray-800 text-white lg:h-screen lg:fixed lg:left-0 lg:top-0 overflow-y-auto">
            @include('components.admin-sidebar')
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col lg:ml-64">
            <!-- Navbar -->
            <nav class="bg-white shadow-md">
                @include('components.admin-navbar')
            </nav>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-4 lg:p-6">
                @yield('content')
            </main>
        </div>
    </div>

    @stack('scripts')
    <script>
        // Toggle mobile menu
        function toggleMobileMenu() {
            const sidebar = document.querySelector('.lg\\:w-64');
            sidebar.classList.toggle('hidden');
        }
    </script>
</body>

</html>