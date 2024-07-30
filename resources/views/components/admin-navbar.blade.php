<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <button class="lg:hidden" onclick="toggleMobileMenu()">
                    <!-- Add your menu icon here -->
                    Menu
                </button>
                <h1 class="text-2xl font-semibold text-gray-800">@yield('title')</h1>
            </div>
            <div class="flex items-center">
                <span class="text-gray-600 mr-4">{{ Auth::user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>