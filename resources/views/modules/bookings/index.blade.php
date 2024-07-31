@extends('layouts.admin')

@section('title', 'Bookings')

@section('content')
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-6 bg-gray-50 border-b border-gray-200">
            <h2 class="text-2xl font-semibold text-gray-700">All Bookings</h2>
        </div>
        <table class="min-w-full divide-y divide-gray-200" id="bookingsTable" class="table table-striped">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Duration</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Number of People</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Comment</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Preferred Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Create Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($bookings as $item)
                    <tr class="hover:bg-gray-50 transition duration-300 ease-in-out">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $item->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->fname }} {{ $item->lname }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->phone }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->address }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->duration }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->people }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"> {{ $item->comment }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            @if ($item->status == 0)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Pending
                                </span>
                            @else
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Attended To
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ date($item->date) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ date($item->created_at) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <button onclick="confirmStatusChange({{ $item->id }})"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full inline-flex items-center"
                                title="Change Status">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

<script>
    // Define confirmStatusChange in the global scope
    window.confirmStatusChange = function (itemId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You are about to change the status of this event.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, change it!'
        }).then((result) => {
            if (result.isConfirmed) {
                changeStatus(itemId);
            }
        })
    }

    function changeStatus(itemId) {
    fetch(`/api/update_event/${itemId}`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
    })
    .then(response => response.json())
    .then(data => {
        console.log('Server response:', data); // For debugging
        if (data.ok === true) {  // Changed from data.success to data.ok
            Swal.fire(
                'Updated!',
                data.message || 'The status has been changed.',
                'success'
            ).then(() => {
                location.reload();
            });
        } else {
            throw new Error(data.message || 'Unknown error occurred');
        }
    })
    .catch(error => {
        console.error('Error:', error); // For debugging
        Swal.fire(
            'Error!',
            error.message || 'There was a problem changing the status.',
            'error'
        );
    });
}

    document.addEventListener('DOMContentLoaded', function () {
        // Any other initialization code can go here
    });
</script>