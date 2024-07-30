@extends('layouts.admin')

@section('title', 'Reset Password')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
            <div class="px-6 py-4">
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Reset Password</h2>
                <form id="reset-password-form">
                    @csrf
                    <div class="mb-4">
                        <label for="new_password" class="block text-gray-700 text-sm font-bold mb-2">New Password</label>
                        <input type="password" name="new_password" id="new_password"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="mb-6">
                        <label for="new_password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirm
                            New Password</label>
                        <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Reset Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('#reset-password-form').on('submit', function(event) {
                event.preventDefault();
                console.log('Form submission prevented');

                var formData = {
                    new_password: $('#new_password').val(),
                    new_password_confirmation: $('#new_password_confirmation').val(),
                    id: $('input[name=id]').val(),
                    _token: $('input[name=_token]').val()
                };

                $.ajax({
                    url: '/api/update_password',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message,
                        });
                    },
                    error: function(xhr) {
                        var errorMessage = 'An unexpected error occurred';
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        }
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: errorMessage,
                        });
                    }
                });
            });
        });
    </script>
@endpush
