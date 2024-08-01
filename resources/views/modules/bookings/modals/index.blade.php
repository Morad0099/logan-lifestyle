<!-- Modal Background -->
<div id="bookingModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-lg mx-4 md:max-w-md lg:max-w-lg">
        <!-- Modal Header -->
        <div class="flex items-center justify-between p-4 border-b border-gray-200">
            <h5 class="text-xl font-semibold text-gray-800">Booking Details</h5>
            <button type="button" class="text-gray-400 hover:text-gray-600" onclick="toggleModal(false)">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <!-- Modal Body -->
        <div class="p-4 overflow-y-auto max-h-96">
            <table class="min-w-full divide-y divide-gray-200">
                <tbody>
                    <tr>
                        <th class="text-left p-2 font-semibold text-gray-700">ID</th>
                        <td id="booking-id" class="p-2 text-gray-600"></td>
                    </tr>
                    <tr>
                        <th class="text-left p-2 font-semibold text-gray-700">Customer</th>
                        <td id="booking-customer" class="p-2 text-gray-600"></td>
                    </tr>
                    <tr>
                        <th class="text-left p-2 font-semibold text-gray-700">Email</th>
                        <td id="booking-email" class="p-2 text-gray-600"></td>
                    </tr>
                    <tr>
                        <th class="text-left p-2 font-semibold text-gray-700">Phone</th>
                        <td id="booking-phone" class="p-2 text-gray-600"></td>
                    </tr>
                    <tr>
                        <th class="text-left p-2 font-semibold text-gray-700">Address</th>
                        <td id="booking-address" class="p-2 text-gray-600"></td>
                    </tr>
                    <tr>
                        <th class="text-left p-2 font-semibold text-gray-700">Duration</th>
                        <td id="booking-duration" class="p-2 text-gray-600"></td>
                    </tr>
                    <tr>
                        <th class="text-left p-2 font-semibold text-gray-700">Number of People</th>
                        <td id="booking-people" class="p-2 text-gray-600"></td>
                    </tr>
                    <tr>
                        <th class="text-left p-2 font-semibold text-gray-700">Comment</th>
                        <td id="booking-comment" class="p-2 text-gray-600"></td>
                    </tr>
                    <tr>
                        <th class="text-left p-2 font-semibold text-gray-700">Status</th>
                        <td id="booking-status" class="p-2 text-gray-600"></td>
                    </tr>
                    <tr>
                        <th class="text-left p-2 font-semibold text-gray-700">Preferred Date</th>
                        <td id="booking-date" class="p-2 text-gray-600"></td>
                    </tr>
                    <tr>
                        <th class="text-left p-2 font-semibold text-gray-700">Created At</th>
                        <td id="booking-created-at" class="p-2 text-gray-600"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Modal Footer -->
        <div class="flex justify-end p-4 border-t border-gray-200">
            <button type="button" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300" onclick="toggleModal(false)">Close</button>
        </div>
    </div>
</div>

<style>
    @media (max-width: 640px) {
        #bookingModal .max-w-lg {
            max-width: 100%;
        }
        #bookingModal .p-4 {
            padding: 1rem;
        }
    }
</style>

{{-- <script>
    function toggleModal(show) {
        const modal = document.getElementById('bookingModal');
        modal.classList.toggle('hidden', !show);
    }
</script> --}}
