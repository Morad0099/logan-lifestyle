@extends('layouts.admin')
@section('title', 'Staff Management')
@section('content')
    <div class="mb-6">
        <button id="addStaffBtn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add New Staff
        </button>
    </div>
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($staff as $item)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <button class="text-indigo-600 hover:text-indigo-900 mr-2 editStaffBtn" data-id="{{ $item->id }}" data-name="{{ $item->name }}" data-email="{{ $item->email }}">Edit</button>
                        <button class="text-red-600 hover:text-red-900 deleteStaffBtn" data-id="{{ $item->id }}">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <!-- Add/Edit Staff Modal (hidden by default) -->
    <div id="staffModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <form id="staffForm">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modalTitle">Add New Staff</h3>
                        <div class="mt-2">
                            <input type="hidden" id="staffId">
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                                <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                                <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                            Save
                        </button>
                        <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" onclick="closeModal()">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    function openModal(title = 'Add New Staff', id = '', name = '', email = '') {
        document.getElementById('modalTitle').textContent = title;
        document.getElementById('staffId').value = id;
        document.getElementById('name').value = name;
        document.getElementById('email').value = email;
        document.getElementById('staffModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('staffModal').classList.add('hidden');
    }

    document.getElementById('addStaffBtn').addEventListener('click', function() {
        openModal();
    });

    document.querySelectorAll('.editStaffBtn').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            const name = this.getAttribute('data-name');
            const email = this.getAttribute('data-email');
            openModal('Edit Staff', id, name, email);
        });
    });

    document.getElementById('staffForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const id = document.getElementById('staffId').value;
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        
        const url = id ? '/api/update_staff' : '/api/add_staff';
        const method = 'POST'; // Both endpoints use POST

        fetch(url, {
            method: method,
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ id, name, email }),
        })
        .then(response => response.json())
    .then(data => {
        if (data.message) {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: data.message,
            }).then(() => {
                closeModal();
                window.location.reload();
            });
        } else {
            // If no message, display a generic error
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'An unexpected error occurred.',
            });
        }
    })
    .catch(error => {
        console.error('Error:', error);
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'An error occurred. Please try again.',
        });
    });
});

    document.querySelectorAll('.deleteStaffBtn').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch('/api/delete_staff', {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({ id }),
                    })
                    .then(response => response.json())
                .then(data => {
                    if (data.message) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Deleted!',
                            text: data.message,
                        }).then(() => {
                            window.location.reload();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'An unexpected error occurred.',
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'An error occurred. Please try again.',
                    });
                });
            }
        });
    });
    });
</script>
@endpush
