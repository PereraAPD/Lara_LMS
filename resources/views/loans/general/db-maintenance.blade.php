<x-app-layout>
    <div class="py-0">
        <div class="max-w-full mx-auto space-y-8">
            <div class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7x1">
                    @php
                        $tabs = [
                            ['id' => 'delete-project', 'name' => 'Delete All Data Project Wise'],
                            ['id' => 'backup-db', 'name' => 'Backup Database'],
                            ['id' => 'cor', 'name' => 'Condition of Rate']
                        ];
                    @endphp

                    <x-sub-nav-area :tabs="$tabs">
                        @slot('slotdeleteproject')
                        @php
    // Define options for different scenarios
    $loanSchemeOptions = [
        ['value' => 'scheme1', 'label' => 'Loan Scheme 1'],
        ['value' => 'scheme2', 'label' => 'Loan Scheme 2'],
        // Add more options as needed
    ];

    $bankOptions = [
        ['value' => 'bank1', 'label' => 'Bank 1'],
        ['value' => 'bank2', 'label' => 'Bank 2'],
        // Add more options as needed
    ];
@endphp
                        <x-common-card>
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 border-b">Bank Wise Registered Loan</h3>
    <p class="text-gray-700 dark:text-gray-300">This is the content for the Bank Wise Registered Loan.</p>

    <x-date-input id="fromDate" label="From Date"/>
    <x-date-input id="toDate" label="To Date"/>

    <x-select-input id="loanScheme" label="Loan Scheme" :options="$loanSchemeOptions"/>
    <x-select-input id="bank" label="Bank" :options="$bankOptions"/>
    <div class="flex justify-end space-x-4">
    <x-form-button onclick="printBankWiseReport()" text="Print Report" bgColor="indigo-600" textColor="white"/>
    </div>
</x-common-card>

                        @endslot

                        @slot('slotbackupdb')
                        @php
    // Define options for different scenarios
    $loanSchemeOptions = [
        ['value' => 'scheme1', 'label' => 'Loan Scheme 1'],
        ['value' => 'scheme2', 'label' => 'Loan Scheme 2'],
        // Add more options as needed
    ];

    $bankOptions = [
        ['value' => 'bank1', 'label' => 'Bank 1'],
        ['value' => 'bank2', 'label' => 'Bank 2'],
        // Add more options as needed
    ];
@endphp
                        <x-common-card>
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 border-b">Daily Uploading Report</h3>
    <p class="text-gray-700 dark:text-gray-300">This is the content for the Daily Uploading Report.</p>

    <x-date-input id="fromDate" label="From Date"/>
    <x-date-input id="toDate" label="To Date"/>

    <x-select-input id="bank" label="Bank" :options="$bankOptions"/>
    <x-select-input id="loanScheme" label="Loan Scheme" :options="$loanSchemeOptions"/>

    <div class="flex justify-end space-x-4">
        <x-form-button onclick="printRecords()" text="Search" bgColor="indigo-600" textColor="white"/>
        <x-form-button onclick="printRecords()" text="Print" bgColor="gray-600" textColor="white"/>
    </div>
</x-common-card>
                        @endslot

                        @slot('slotcor')
                        @php
    // Define options for different scenarios
    $loanSchemeOptions = [
        ['value' => 'scheme1', 'label' => 'Loan Scheme 1'],
        ['value' => 'scheme2', 'label' => 'Loan Scheme 2'],
        // Add more options as needed
    ];

    $provinceOptions = [
        ['value' => 'province1', 'label' => 'Province 1'],
        ['value' => 'province2', 'label' => 'Province 2'],
        // Add more options as needed
    ];
@endphp

<x-common-card>
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 border-b">District Wise Registration</h3>
    <p class="text-gray-700 dark:text-gray-300">This is the content for the District Wise Registration.</p>

    <x-date-input id="fromDate" label="From Date"/>
    <x-date-input id="toDate" label="To Date"/>

    <x-select-input id="loanScheme" label="Loan Scheme" :options="$loanSchemeOptions"/>
    <x-select-input id="province" label="Province" :options="$provinceOptions"/>

    <div class="flex justify-end space-x-4">
        <x-form-button onclick="printDistrictWiseRegistration()" text="Print Registration" bgColor="indigo-600" textColor="white"/>
    </div>
</x-common-card>

                        @endslot
                    </x-sub-nav-area>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
