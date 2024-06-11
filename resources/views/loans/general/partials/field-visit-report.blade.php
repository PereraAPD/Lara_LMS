<div class="space-y-4 p-4 bg-white dark:bg-gray-800 rounded-lg shadow-md">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 border-b">Field Visit Report</h3>
    <p class="text-gray-700 dark:text-gray-300">This is the content for the Field Visit Report.</p>
    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 mb-8">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Field Visit Report</h3>
    <p class="mt-2 text-gray-700 dark:text-gray-300">
        <!-- Field Visit Report Form -->
        <form id="fieldVisitReportForm" class="space-y-6">
            <div class="inline-block">
                <label for="fromDate" class="block text-sm font-medium text-gray-700 dark:text-gray-300">From Date:</label>
                <input type="date" id="fromDate" name="fromDate" class="mt-1 block px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-gray-300" required>
            </div>

            <div class="inline-block">
                <label for="toDate" class="block text-sm font-medium text-gray-700 dark:text-gray-300">To Date:</label>
                <input type="date" id="toDate" name="toDate" class="mt-1 block px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-gray-300" required>
            </div>

            <div class="inline-block">
                <label for="scheme" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Loan Scheme:</label>
                <select id="scheme" name="scheme" class="mt-1 block py-2 px-3 border border-gray-300 bg-white dark:bg-gray-700 dark:text-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    <!-- Populate with loan scheme options dynamically -->
                    <option value="jayaIsura">Jaya Isura</option>
                    <option value="greenLoan">Green Loan</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <div class="inline-block">
                <label for="district" class="block text-sm font-medium text-gray-700 dark:text-gray-300">District:</label>
                <select id="district" name="district" class="mt-1 block py-2 px-3 border border-gray-300 bg-white dark:bg-gray-700 dark:text-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    <!-- Populate with district options dynamically -->
                    <option value="district1">District 1</option>
                    <option value="district2">District 2</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <div class="inline-block">
                <label for="bank" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Bank:</label>
                <select id="bank" name="bank" class="mt-1 block py-2 px-3 border border-gray-300 bg-white dark:bg-gray-700 dark:text-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    <!-- Populate with bank options dynamically -->
                    <option value="bank1">Bank 1</option>
                    <option value="bank2">Bank 2</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <div class="flex justify-end space-x-4">
                <button type="button" onclick="printFieldVisitReport()" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 transition ease-in-out duration-150">Print Report</button>
            </div>
        </form>
    </p>
</div>
</div>
