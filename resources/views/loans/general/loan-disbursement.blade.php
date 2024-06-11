<x-app-layout>
    <div class="py-0">
        <div class="max-w-full mx-auto space-y-8">
            <div class=" bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7x1">
    <!-- Main Tabs -->
    <div class="flex space-x-4 mb-6 border-b-2 border-gray-300 dark:border-gray-700">
        <button onclick="showTab('monthly')" id="tab-monthly" class="tab-button px-4 py-2 font-semibold text-gray-700 dark:text-gray-300 bg-white rounded-t-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 active-tab">Loan Disbursement - Monthly</button>
        <button onclick="showTab('semiAnnual')" id="tab-semiAnnual" class="tab-button px-4 py-2 font-semibold text-gray-700 dark:text-gray-300 bg-gray-100 dark:bg-gray-800 rounded-t-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 inactive-tab">Loan Disbursement - Semi-Annual</button>
    </div>

    <!-- Monthly Disbursement -->
    <div id="monthly" class="tab-content bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-4">Loan Disbursement - Monthly</h2>
        <div class="flex mb-4 space-x-4">
            <button onclick="showSubTab('uploadExcelMonthly')" id="sub-tab-uploadExcelMonthly" class="sub-tab-button px-4 py-2 font-semibold text-gray-700 dark:text-gray-300 rounded-lg bg-white border-l-2 border-r-2 border-t-2 border-indigo-600 focus:outline-none">Upload Excel</button>
            <button onclick="showSubTab('processExcelMonthly')" id="sub-tab-processExcelMonthly" class="sub-tab-button px-4 py-2 font-semibold text-gray-700 dark:text-gray-300 rounded-lg bg-gray-100 dark:bg-gray-800 border-b-2 border-b-indigo-600 focus:outline-none">Process Excel</button>
            <button onclick="showSubTab('customerLedgerMonthly')" id="sub-tab-customerLedgerMonthly" class="sub-tab-button px-4 py-2 font-semibold text-gray-700 dark:text-gray-300 rounded-lg bg-gray-100 dark:bg-gray-800 border-b-2 border-b-indigo-600 focus:outline-none">Customer Ledger</button>
            <button onclick="showSubTab('interestSubsidyMonthly')" id="sub-tab-interestSubsidyMonthly" class="sub-tab-button px-4 py-2 font-semibold text-gray-700 dark:text-gray-300 rounded-lg bg-gray-100 dark:bg-gray-800 border-b-2 border-b-indigo-600 focus:outline-none">Interest Subsidy</button>
        </div>
        <div id="uploadExcelMonthly" class="sub-content">Upload Excel Content for Monthly</div>
        <div id="processExcelMonthly" class="sub-content hidden">Process Excel Content for Monthly</div>
        <div id="customerLedgerMonthly" class="sub-content hidden">Customer Ledger Content for Monthly</div>
        <div id="interestSubsidyMonthly" class="sub-content hidden">Interest Subsidy Content for Monthly</div>
    </div>

    <!-- Semi-Annual Disbursement -->
    <div id="semiAnnual" class="tab-content bg-white p-6 rounded-lg shadow-lg hidden">
        <h2 class="text-2xl font-semibold mb-4">Loan Disbursement - Semi-Annual</h2>
        <div class="flex mb-4 space-x-4">
            <button onclick="showSubTab('uploadExcelSemiAnnual')" id="sub-tab-uploadExcelSemiAnnual" class="sub-tab-button px-4 py-2 font-semibold text-gray-700 dark:text-gray-300 rounded-lg bg-white border-l-2 border-r-2 border-t-2 border-indigo-600 focus:outline-none">Upload Excel</button>
            <button onclick="showSubTab('processExcelSemiAnnual')" id="sub-tab-processExcelSemiAnnual" class="sub-tab-button px-4 py-2 font-semibold text-gray-700 dark:text-gray-300 rounded-lg bg-gray-100 dark:bg-gray-800 border-b-2 border-b-indigo-600 focus:outline-none">Process Excel</button>
            <button onclick="showSubTab('interestSubsidySemiAnnual')" id="sub-tab-interestSubsidySemiAnnual" class="sub-tab-button px-4 py-2 font-semibold text-gray-700 dark:text-gray-300 rounded-lg bg-gray-100 dark:bg-gray-800 border-b-2 border-b-indigo-600 focus:outline-none">Interest Subsidy Report</button>
        </div>
        <div id="uploadExcelSemiAnnual" class="sub-content">Upload Excel Content for Semi-Annual</div>
        <div id="processExcelSemiAnnual" class="sub-content hidden">Process Excel Content for Semi-Annual</div>
        <div id="interestSubsidySemiAnnual" class="sub-content hidden">Interest Subsidy Report Content for Semi-Annual</div>
    </div>
</div>

<script>
    function showTab(tab) {
        document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
        document.querySelectorAll('.tab-button').forEach(el => el.classList.remove('active-tab', 'bg-white', 'border-l-2', 'border-r-2', 'border-t-2'));
        document.querySelectorAll('.tab-button').forEach(el => el.classList.add('inactive-tab', 'bg-gray-100', 'dark:bg-gray-800'));
        document.getElementById(tab).classList.remove('hidden');
        document.getElementById('tab-' + tab).classList.add('active-tab', 'bg-white', 'border-l-2', 'border-r-2', 'border-t-2');
        document.getElementById('tab-' + tab).classList.remove('inactive-tab', 'bg-gray-100', 'dark:bg-gray-800');

        // Reset sub-tabs when switching main tab
        if (tab === 'monthly') {
            showSubTab('uploadExcelMonthly');
        } else {
            showSubTab('uploadExcelSemiAnnual');
        }
    }

    function showSubTab(subTab) {
        document.querySelectorAll('.sub-content').forEach(el => el.classList.add('hidden'));
        document.querySelectorAll('.sub-tab-button').forEach(el => el.classList.remove('active-tab', 'bg-white', 'border-l-2', 'border-r-2', 'border-t-2'));
        document.querySelectorAll('.sub-tab-button').forEach(el => el.classList.add('inactive-tab', 'bg-gray-100', 'dark:bg-gray-800'));
        document.getElementById(subTab).classList.remove('hidden');
        document.querySelector('button[onclick="showSubTab(\'' + subTab + '\')"]').classList.add('active-tab', 'bg-white', 'border-l-2', 'border-r-2', 'border-t-2');
        document.querySelector('button[onclick="showSubTab(\'' + subTab + '\')"]').classList.remove('inactive-tab', 'bg-gray-100', 'dark:bg-gray-800');
    }

    // Initialize with the first tab open
    showTab('monthly');
</script>
                </div>
            </div>
            <!-- Add more sections or content as needed -->
        </div>
</x-app-layout>