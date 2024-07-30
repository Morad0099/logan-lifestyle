<aside class="w-full lg:w-64 bg-gray-800 text-white lg:h-screen overflow-y-auto">
    <div class="flex items-center justify-center h-16 bg-gray-900">
        <span class="text-white font-bold text-xl">Logan Lifestyle</span>
    </div>
    <nav class="mt-5">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out {{ Request::is('dashboard') ? 'bg-gray-700 text-white' : '' }}">
            <svg class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span>Dashboard</span>
        </a>
        <a href="{{ route('admin.bookings') }}" class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out {{ Request::is('bookings') ? 'bg-gray-700 text-white' : '' }}">
            <svg class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span>Bookings</span>
        </a>
        <a href="{{ route('admin.staff') }}" class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out {{ Request::is('staff') ? 'bg-gray-700 text-white' : '' }}">
            <svg class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <span>Staff Management</span>
        </a>
        <a href="{{ route('admin.password') }}" class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out {{ Request::is('password') ? 'bg-gray-700 text-white' : '' }}">
            <svg class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
            <span>Password Management</span>
        </a>
    </nav>
</aside>