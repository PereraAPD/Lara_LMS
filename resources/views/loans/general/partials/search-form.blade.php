<div>
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Search Loans</h3>
    <p class="mt-2 text-gray-700 dark:text-gray-300">
        <!-- Your Form -->
        <form  method="post" class="space-y-6">
            @csrf

            <div>
                <label for="nic" class="block text-sm font-medium text-gray-700 dark:text-gray-300">NIC:</label>
                <input type="text" id="nic" name="nic" placeholder="Enter NIC" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-gray-300" required>
            </div>

            <div class="flex justify-end space-x-4">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 transition ease-in-out duration-150">Search</button>
                <button type="button" onclick="printRecords()" class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:ring focus:ring-gray-200 active:bg-gray-600 transition ease-in-out duration-150">Print</button>
            </div>
        </form>
    </p>
</div>
