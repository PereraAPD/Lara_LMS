<div class="space-y-4 p-4 bg-white dark:bg-gray-800 rounded-lg shadow-md">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 border-b">District Wise Registration</h3>
    <p class="text-gray-700 dark:text-gray-300">
    This is the content for the District Wise Registration. Here you can include detailed information and data related to daily uploads.
    </p>
    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 mb-8">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">District Wise Registration</h3>
    <p class="mt-2 text-gray-700 dark:text-gray-300">
        <!-- District Wise Registration Form -->
        <form id="districtWiseRegistrationForm" class="space-y-6">
            <div class="inline-block">
                <label for="fromDate" class="block text-sm font-medium text-gray-700 dark:text-gray-300">From Date:</label>
                <input type="date" id="fromDate" name="fromDate" class="mt-1 block px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-gray-300" required>
            </div>

            <div class="inline-block">
                <label for="toDate" class="block text-sm font-medium text-gray-700 dark:text-gray-300">To Date:</label>
                <input type="date" id="toDate" name="toDate" class="mt-1 block px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-gray-300" required>
            </div>

            <div class="inline-block">
                <label for="loanScheme" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Loan Scheme:</label>
                <select id="loanScheme" name="loanScheme" class="mt-1 block py-2 px-3 border border-gray-300 bg-white dark:bg-gray-700 dark:text-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    <!-- Populate with loan scheme options dynamically -->
                    <option value="scheme1">Loan Scheme 1</option>
                    <option value="scheme2">Loan Scheme 2</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <div class="inline-block">
                <label for="province" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Province:</label>
                <select id="province" name="province" class="mt-1 block py-2 px-3 border border-gray-300 bg-white dark:bg-gray-700 dark:text-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    <!-- Populate with province options dynamically -->
                    <option value="province1">Province 1</option>
                    <option value="province2">Province 2</option>
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

            <div class="flex justify-end space-x-4">
                <button type="button" onclick="printDistrictWiseRegistration()" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 transition ease-in-out duration-150">Print Registration</button>
            </div>
        </form>
    </p>
</div>
    <!-- Add more content as needed -->
</div>