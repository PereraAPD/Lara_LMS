<x-app-layout>
    <div class="py-0">
        <div class="max-w-full mx-auto space-y-8">
            <div class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7x1">
                    @php
                        $tabs = [
                            ['id' => 'monthly', 'name' => 'Loan Disbursement - Monthly'],
                            ['id' => 'semiAnnual', 'name' => 'Loan Disbursement - Semi-Annual']
                        ];
                    @endphp

                    <x-sub-nav-area :tabs="$tabs">
                        @slot('slotmonthly')
                            <x-common-card>
                                <h2 class="text-2xl font-semibold mb-4">Loan Disbursement - Monthly</h2>
                                <div class="flex mb-4 space-x-4">
                                    <button onclick="showSubTab('uploadExcelMonthly')" id="sub-tab-uploadExcelMonthly" class="sub-tab-button px-4 py-2 font-semibold text-gray-700 dark:text-gray-300 rounded-lg bg-white border-l-2 border-r-2 border-t-2 border-indigo-600 focus:outline-none">Upload Excel</button>
                                    <button onclick="showSubTab('processExcelMonthly')" id="sub-tab-processExcelMonthly" class="sub-tab-button px-4 py-2 font-semibold text-gray-700 dark:text-gray-300 rounded-lg bg-gray-100 dark:bg-gray-800 border-b-2 border-b-indigo-600 focus:outline-none">Process Excel</button>
                                    <button onclick="showSubTab('customerLedgerMonthly')" id="sub-tab-customerLedgerMonthly" class="sub-tab-button px-4 py-2 font-semibold text-gray-700 dark:text-gray-300 rounded-lg bg-gray-100 dark:bg-gray-800 border-b-2 border-b-indigo-600 focus:outline-none">Customer Ledger</button>
                                    <button onclick="showSubTab('interestSubsidyMonthly')" id="sub-tab-interestSubsidyMonthly" class="sub-tab-button px-4 py-2 font-semibold text-gray-700 dark:text-gray-300 rounded-lg bg-gray-100 dark:bg-gray-800 border-b-2 border-b-indigo-600 focus:outline-none">Interest Subsidy</button>
                                    <!-- Add more buttons as needed -->
                                </div>
                                <div id="uploadExcelMonthly" class="sub-content">Upload Excel Content for Monthly</div>
                                <div id="processExcelMonthly" class="sub-content hidden">Process Excel Content for Monthly</div>
                                <div id="customerLedgerMonthly" class="sub-content hidden">Customer Ledger Content for Monthly</div>
                                <div id="interestSubsidyMonthly" class="sub-content hidden">Interest Subsidy Content for Monthly</div>
                                <!-- Add more content as needed -->
                            </x-common-card>
                        @endslot

                        @slot('slotsemiAnnual')
                            <x-common-card>
                                <h2 class="text-2xl font-semibold mb-4">Loan Disbursement - Semi-Annual</h2>
                                <div class="flex mb-4 space-x-4">
                                    <button onclick="showSubTab('uploadExcelSemiAnnual')" id="sub-tab-uploadExcelSemiAnnual" class="sub-tab-button px-4 py-2 font-semibold text-gray-700 dark:text-gray-300 rounded-lg bg-white border-l-2 border-r-2 border-t-2 border-indigo-600 focus:outline-none">Upload Excel</button>
                                    <button onclick="showSubTab('processExcelSemiAnnual')" id="sub-tab-processExcelSemiAnnual" class="sub-tab-button px-4 py-2 font-semibold text-gray-700 dark:text-gray-300 rounded-lg bg-gray-100 dark:bg-gray-800 border-b-2 border-b-indigo-600 focus:outline-none">Process Excel</button>
                                    <button onclick="showSubTab('interestSubsidySemiAnnual')" id="sub-tab-interestSubsidySemiAnnual" class="sub-tab-button px-4 py-2 font-semibold text-gray-700 dark:text-gray-300 rounded-lg bg-gray-100 dark:bg-gray-800 border-b-2 border-b-indigo-600 focus:outline-none">Interest Subsidy Report</button>
                                    <!-- Add more buttons as needed -->
                                </div>
                                <div id="uploadExcelSemiAnnual" class="sub-content">Upload Excel Content for Semi-Annual</div>
                                <div id="processExcelSemiAnnual" class="sub-content hidden">Process Excel Content for Semi-Annual</div>
                                <div id="interestSubsidySemiAnnual" class="sub-content hidden">Interest Subsidy Report Content for Semi-Annual</div>
                                <!-- Add more content as needed -->
                            </x-common-card>
                        @endslot
                    </x-sub-nav-area>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function showSubTab(subTab) {
        document.querySelectorAll('.sub-content').forEach(el => el.classList.add('hidden'));
        document.querySelectorAll('.sub-tab-button').forEach(el => el.classList.remove('active-tab', 'bg-white', 'border-l-2', 'border-r-2', 'border-t-2'));
        document.querySelectorAll('.sub-tab-button').forEach(el => el.classList.add('inactive-tab', 'bg-gray-100', 'dark:bg-gray-800'));
        document.getElementById(subTab).classList.remove('hidden');
        document.querySelector('button[onclick="showSubTab(\'' + subTab + '\')"]').classList.add('active-tab', 'bg-white', 'border-l-2', 'border-r-2', 'border-t-2');
        document.querySelector('button[onclick="showSubTab(\'' + subTab + '\')"]').classList.remove('inactive-tab', 'bg-gray-100', 'dark:bg-gray-800');
    }

</script>