<div class="space-y-4 p-4 bg-white dark:bg-gray-800 rounded-lg shadow-md">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 border-b">Daily Uploading Report</h3>
    <p class="text-gray-700 dark:text-gray-300">
        This is the content for the Daily Uploading Report. Here you can include detailed information and data related to daily uploads.
        <div class="bg-white shadow-md rounded-lg p-6 mb-8">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Daily Uploading Report</h3>
    <p class="mt-2 text-gray-700 dark:text-gray-300">
        <!-- Your Form -->
        <form method="post" class="space-y-6">
            @csrf

            <div class="inline-block">
                <label for="uploadDate" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Date:</label>
                <input type="date" id="uploadDate" name="uploadDate" placeholder="Enter Date" class="mt-1 block px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-gray-300" required>
            </div>

            <div class="inline-block">
                <label for="bank" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Bank:</label>
                <select id="bank" name="bank" required class="mt-1 block py-2 px-3 border border-gray-300 bg-white dark:bg-gray-700 dark:text-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <!-- Populate with bank options dynamically -->
                    <option value="bank1">Bank 1</option>
                    <option value="bank2">Bank 2</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <div class="inline-block">
                <label for="loanScheme" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Loan Scheme:</label>
                <select id="loanScheme" name="loanScheme" required class="mt-1 block py-2 px-3 border border-gray-300 bg-white dark:bg-gray-700 dark:text-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <!-- Populate with loan scheme options dynamically -->
                    <option value="scheme1">Loan Scheme 1</option>
                    <option value="scheme2">Loan Scheme 2</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <div class="flex justify-end space-x-4">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 transition ease-in-out duration-150">Search</button>
                <button type="button" onclick="printRecords()" class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:ring focus:ring-gray-200 active:bg-gray-600 transition ease-in-out duration-150">Print</button>
            </div>
        </form>
    </p>
</div>
    </p>
    <!-- Add more content as needed -->
</div>
