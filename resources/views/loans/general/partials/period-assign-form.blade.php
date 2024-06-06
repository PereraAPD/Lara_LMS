<div>
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Section 1 Information</h3>
    <p class="mt-2 text-gray-700 dark:text-gray-300">
        <!-- Your Form -->
        <form action="{{ route('processPeriodAssignment') }}" method="post" class="space-y-6">
                        @csrf

                        <div>
                            <label for="loanScheme" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Loan Scheme:</label>
                            <select id="loanScheme" name="loanScheme" class="mt-1 block w-full pl-3 pr-10 py-2 border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-300 sm:text-sm rounded-md" required>
                                <option value="" disabled selected>Select Loan Scheme</option>
                                <option value="jaya">Jaya</option>
                                <option value="isura">Isura</option>
                                <option value="greenLoan">Green Loan</option>
                            </select>
                        </div>

                        <div>
                            <label for="bank" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Bank:</label>
                            <select id="bank" name="bank" class="mt-1 block w-full pl-3 pr-10 py-2 border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-300 sm:text-sm rounded-md" required>
                                <option value="" disabled selected>Select Bank</option>
                                <option value="BOC">Bank of Ceylon</option>
                                <option value="NSB">National Savings Bank</option>
                                <option value="PB">People's Bank</option>
                            </select>
                        </div>

                        <div>
                            <label for="loanRegNumber" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Loan Registration Number</label>
                            <input type="text" id="loanRegNumber" name="loanRegNumber" placeholder="Enter Loan Registration Number" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-gray-300" required>
                        </div>

                        <div>
                            <label for="fromDate" class="block text-sm font-medium text-gray-700 dark:text-gray-300">From Date</label>
                            <input type="date" id="fromDate" name="fromDate" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-gray-300" required>
                        </div>

                        <div>
                            <label for="toDate" class="block text-sm font-medium text-gray-700 dark:text-gray-300">To Date</label>
                            <input type="date" id="toDate" name="toDate" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-gray-300" required>
                        </div>

                        <div class="flex justify-end space-x-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 transition ease-in-out duration-150">Add</button>
                            <button type="button" onclick="printRecords()" class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:ring focus:ring-gray-200 active:bg-gray-600 transition ease-in-out duration-150">Print</button>
                        </div>
                    </form>
    </p>
</div>
