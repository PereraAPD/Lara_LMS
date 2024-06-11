<div class="space-y-4 p-4 bg-white dark:bg-gray-800 rounded-lg shadow-md">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 border-b">Sector Wise Registration</h3>
    <p class="text-gray-700 dark:text-gray-300">This is the content for the Sector Wise Registration.</p>
    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 mb-8">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Sector Wise Registration</h3>
    <p class="mt-2 text-gray-700 dark:text-gray-300">
        <!-- Sector Wise Registration Form -->
        <form id="sectorWiseRegistrationForm" class="space-y-6">
            <div class="inline-block">
                <label for="fromDate" class="block text-sm font-medium text-gray-700 dark:text-gray-300">From Date:</label>
                <input type="date" id="fromDate" name="fromDate" class="mt-1 block px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-gray-300" required>
            </div>

            <div class="inline-block">
                <label for="toDate" class="block text-sm font-medium text-gray-700 dark:text-gray-300">To Date:</label>
                <input type="date" id="toDate" name="toDate" class="mt-1 block px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-gray-300" required>
            </div>

            <div class="inline-block">
                <label for="sector" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Sector:</label>
                <select id="sector" name="sector" class="mt-1 block py-2 px-3 border border-gray-300 bg-white dark:bg-gray-700 dark:text-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    <!-- Populate with sector options dynamically -->
                    <option value="sector1">Sector 1</option>
                    <option value="sector2">Sector 2</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <div class="flex justify-end space-x-4">
                <button type="button" onclick="printSectorWiseRegistration()" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 transition ease-in-out duration-150">Print Registration</button>
            </div>
        </form>
    </p>
</div>
</div>
