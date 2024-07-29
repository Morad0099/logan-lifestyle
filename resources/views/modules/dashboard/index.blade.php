@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6 transform hover:scale-105 transition duration-300 ease-in-out">
            <h2 class="text-lg font-semibold mb-2 text-gray-700">Total Bookings</h2>
            <p class="text-3xl font-bold text-blue-600">{{ $bookings }}</p>
        </div>
        {{-- <div class="bg-white rounded-lg shadow-md p-6 transform hover:scale-105 transition duration-300 ease-in-out">
            <h2 class="text-lg font-semibold mb-2 text-gray-700">Revenue</h2>
            <p class="text-3xl font-bold text-green-600">$87,654.32</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 transform hover:scale-105 transition duration-300 ease-in-out">
            <h2 class="text-lg font-semibold mb-2 text-gray-700">New Customers</h2>
            <p class="text-3xl font-bold text-purple-600">567</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 transform hover:scale-105 transition duration-300 ease-in-out">
            <h2 class="text-lg font-semibold mb-2 text-gray-700">Avg. Booking Value</h2>
            <p class="text-3xl font-bold text-orange-600">$71.03</p>
        </div> --}}
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold mb-4 text-gray-700">Monthly Bookings</h2>
        <canvas id="bookingsChart" class="w-full h-64"></canvas>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            axios.get('/api/get_chart')
                .then(function(response) {
                    const rawData = response.data;
                    const data = Object.values(rawData); // Convert object to array of values
                    const ctx = document.getElementById('bookingsChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep',
                                'Oct', 'Nov', 'Dec'
                            ],
                            datasets: [{
                                label: 'Bookings',
                                data: data,
                                borderColor: 'rgb(59, 130, 246)',
                                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                                tension: 0.3,
                                fill: true
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: true,
                            aspectRatio: 2,
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        precision: 0
                                    }
                                }
                            },
                            plugins: {
                                legend: {
                                    display: false
                                }
                            }
                        }
                    });
                })
                .catch(function(error) {
                    console.error('Error fetching the chart data:', error);
                });
        });
    </script>
@endpush
