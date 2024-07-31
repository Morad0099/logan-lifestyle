<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Menu Button for Mobile -->
                <div class="lg:hidden">
                    <button id="menu-button" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
                <h1 class="text-2xl font-semibold text-gray-800">@yield('title')</h1>
            </div>
            <div class="flex items-center relative">
                <!-- User Dropdown -->
                <button id="user-menu-button" class="flex items-center text-gray-600 hover:text-gray-900 focus:outline-none">
                    <span class="text-gray-600 mr-2">{{ Auth::user()->name }}</span>
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <!-- Dropdown Menu -->
                <div id="user-menu" class="dropdown-menu absolute right-0 mt-4 w-48 bg-white text-gray-800 border border-gray-200 rounded-lg shadow-lg opacity-0 invisible transition-opacity duration-300 ease-in-out">
                    <a href="{{ route('admin.password') }}" class="flex items-center px-4 py-2 hover:bg-gray-100 transition-colors duration-200">
                        <svg class="h-5 w-5 mr-2 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        <span>Reset Password</span>
                    </a>
                    <form action="{{ route('logout') }}" method="POST" class="border-t border-gray-200">
                        @csrf
                        <button type="submit" class="flex items-center px-4 py-2 w-full text-left hover:bg-gray-100 transition-colors duration-200">
                            <svg class="h-5 w-5 mr-2 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h1m-2-4h2m-1 12a9 9 0 110-18 9 9 0 010 18z" />
                            </svg>
                            <span>Logout</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>

<style>
    .dropdown-menu {
        margin-top: 130px !important; /* Adjust this value as needed */
        z-index: 50; /* Adjust this value to ensure it appears above other elements */

    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const userMenuButton = document.getElementById('user-menu-button');
        const userMenu = document.getElementById('user-menu');

        userMenuButton.addEventListener('click', function() {
            const isVisible = userMenu.classList.contains('opacity-100');
            userMenu.classList.toggle('opacity-100', !isVisible);
            userMenu.classList.toggle('invisible', isVisible);
        });

        document.addEventListener('click', function(event) {
            if (!userMenuButton.contains(event.target) && !userMenu.contains(event.target)) {
                userMenu.classList.add('opacity-0', 'invisible');
            }
        });
    });
</script>
