<x-app-layout>
    <div class="py-0">
        <div class="max-w-full mx-auto space-y-8">
            <div class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7x1">
                    @php
                        $tabs = [
                            ['id' => 'daily-uploading-report', 'name' => 'Daily Uploading Report'],
                            ['id' => 'bank-wise-registered-loan', 'name' => 'Bank Wise Registration'],
                            ['id' => 'province-wise-registration', 'name' => 'Province Wise Registration'],
                            ['id' => 'district-wise-registration', 'name' => 'District Wise Registration'],
                            ['id' => 'ds-division-wise-registration', 'name' => 'DS Division Wise Registration'],
                            ['id' => 'sector-wise-registration', 'name' => 'Sector Wise Registration'],
                            ['id' => 'gender-wise-registration', 'name' => 'Gender Wise Registration'],
                            ['id' => 'field-visit-report', 'name' => 'Field Visit Report']
                        ];
                    @endphp

                    <x-sub-nav-area :tabs="$tabs">
                        @slot('slotdailyuploadingreport')
                        @php
    // Define options for the bank select input
    $bankOptions = [
        ['value' => 'bank1', 'label' => 'Bank 1'],
        ['value' => 'bank2', 'label' => 'Bank 2'],
        // Add more options as needed
    ];

    // Define options for the loan scheme select input
    $loanSchemeOptions = [
        ['value' => 'scheme1', 'label' => 'Loan Scheme 1'],
        ['value' => 'scheme2', 'label' => 'Loan Scheme 2'],
        // Add more options as needed
    ];

    $provinceOptions = [
        ['value' => 'province1', 'label' => 'Province 1'],
        ['value' => 'province2', 'label' => 'Province 2'],
        ];
    $districtOptions = [
        ['value' => 'district1', 'label' => 'District 1'],
        ['value' => 'district2', 'label' => 'District 2'],
        ];
    $dsDivisionOptions = [
        ['value' => 'dsDivision1', 'label' => 'Division 1'],
        ['value' => 'dsDivision2', 'label' => 'Division 2'],
        ];
    $sectorOptions= [
        ['value' => 'sector1', 'label' => 'Sector 1'],
        ['value' => 'sector2', 'label' => 'Sector 2'],
        ];
    // Define gender options
    $genderOptions = [
        ['value' => 'male', 'label' => 'Male'],
        ['value' => 'female', 'label' => 'Female']
        ];
@endphp

<x-common-card>
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 border-b">Daily Uploading Report</h3>
    <p class="text-gray-700 dark:text-gray-300">
        This is the content for the Daily Uploading Report. Here you can include detailed information and data related to daily uploads.
    </p>
    <div class="bg-white shadow-md rounded-lg p-6 mb-8">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Daily Uploading Report</h3>
        <p class="mt-2 text-gray-700 dark:text-gray-300">
            <form method="post" class="space-y-6">
                @csrf

                <x-date-input id="uploadDate" label="Date" type="date" required="true"/>

                <x-select-input id="bank" label="Bank" :options="$bankOptions" required="true"/>

                <x-select-input id="loanScheme" label="Loan Scheme" :options="$loanSchemeOptions" required="true"/>

                <div class="flex justify-end space-x-4">
                    <x-form-button text="Search" onclick="printRecords()" bgColor="indigo-600" textColor="white"/>
                    <x-form-button text="Print" onclick="printRecords()" bgColor="gray-600" textColor="white"/>
                </div>
            </form>
        </p>
    </div>
</x-common-card>

                        @endslot

                        @slot('slotbankwiseregisteredloan')
                        <x-common-card>
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 border-b">Bank Wise Registered Loan</h3>
    <p class="text-gray-700 dark:text-gray-300">This is the content for the Bank Wise Registered Loan.</p>
    <div class="bg-white shadow-md rounded-lg p-6 mb-8">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Bank Wise Report</h3>
        <p class="mt-2 text-gray-700 dark:text-gray-300">
        <form method="post" class="space-y-6">
        @csrf
                <x-date-input id="fromDate" label="From Date" required="true"/>
                <x-date-input id="toDate" label="To Date" required="true"/>
                <x-select-input id="loanScheme" label="Loan Scheme" :options="$loanSchemeOptions" required="true"/>
                <x-select-input id="bank" label="Bank" :options="$bankOptions" required="true"/>
                
                <div class="inline-block">
                    <label for="addSummary" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Add Summary:</label>
                    <input type="checkbox" id="addSummary" name="addSummary" class="mt-1 focus:ring-indigo-500 dark:bg-gray-700 dark:text-gray-300 border-gray-300 rounded">
                </div>

                <div class="flex justify-end space-x-4">
                    <x-form-button onclick="printBankWiseReport()" text="Print Report" bgColor="indigo-600" textColor="white"/>
                </div>
            </form>
        </p>
    </div>
</x-common-card>
                        @endslot

                        @slot('slotprovincewiseregistration')
                        <x-common-card>
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 border-b">Province Wise Registration</h3>
    <p class="text-gray-700 dark:text-gray-300">This is the content for the Province Wise Registration.</p>
    <div class="bg-white shadow-md rounded-lg p-6 mb-8">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Province Wise Registration</h3>
        <p class="mt-2 text-gray-700 dark:text-gray-300">
            <form id="provinceWiseRegistrationForm" class="space-y-6">
                <x-date-input id="fromDate" label="From Date" required="true"/>
                <x-date-input id="toDate" label="To Date" required="true"/>
                <x-select-input id="loanScheme" label="Loan Scheme" :options="$loanSchemeOptions" required="true"/>
                <x-select-input id="province" label="Province" :options="$provinceOptions" required="true"/>
                
                <div class="flex justify-end space-x-4">
                    <x-form-button type="button" text="Print Registration" onclick="printProvinceWiseRegistration()" bgColor="indigo-600" textColor="white"/>
                </div>
            </form>
        </p>
    </div>
</x-common-card>
                        @endslot

                        @slot('slotdistrictwiseregistration')
                        <x-common-card>
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 border-b">District Wise Registration</h3>
    <p class="text-gray-700 dark:text-gray-300">
        This is the content for the District Wise Registration. Here you can include detailed information and data related to daily uploads.
    </p>
    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 mb-8">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">District Wise Registration</h3>
        <p class="mt-2 text-gray-700 dark:text-gray-300">
            <form id="districtWiseRegistrationForm" class="space-y-6">
                <x-date-input id="fromDate" label="From Date" required="true"/>
                <x-date-input id="toDate" label="To Date" required="true"/>
                <x-select-input id="loanScheme" label="Loan Scheme" :options="$loanSchemeOptions" required="true"/>
                <x-select-input id="province" label="Province" :options="$provinceOptions" required="true"/>
                <x-select-input id="district" label="District" :options="$districtOptions" required="true"/>
                
                <div class="flex justify-end space-x-4">
                    <x-form-button type="button" text="Print Registration" onclick="printDistrictWiseRegistration()" bgColor="indigo-600" textColor="white"/>
                </div>
            </form>
        </p>
    </div>
</x-common-card>
                        @endslot

                        @slot('slotdsdivisionwiseregistration')
                        <x-common-card>
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 border-b">DS Division Wise Registration</h3>
    <p class="text-gray-700 dark:text-gray-300">
        This is the content for the DS Division Wise Registration.
    </p>
    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 mb-8">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">DS Division Wise Registration</h3>
        <p class="mt-2 text-gray-700 dark:text-gray-300">
            <form id="dsDivisionWiseRegistrationForm" class="space-y-6">
                <x-select-input id="loanScheme" label="Loan Scheme" :options="$loanSchemeOptions" required="true"/>
                <x-date-input id="fromDate" label="From Date" required="true"/>
                <x-date-input id="toDate" label="To Date" required="true"/>
                <x-select-input id="province" label="Province" :options="$provinceOptions" required="true"/>
                <x-select-input id="district" label="District" :options="$districtOptions" required="true"/>
                <x-select-input id="dsDivision" label="DS Division" :options="$dsDivisionOptions" required="true"/>
                
                <div class="flex justify-end space-x-4">
                    <x-form-button type="button" text="Print Registration" onclick="printDsDivisionWiseRegistration()" bgColor="indigo-600" textColor="white"/>
                </div>
            </form>
        </p>
    </div>
</x-common-card>

                        @endslot

                        @slot('slotsectorwiseregistration')
                        <x-common-card>
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 border-b">Sector Wise Registration</h3>
    <p class="text-gray-700 dark:text-gray-300">
        This is the content for the Sector Wise Registration.
    </p>
    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 mb-8">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Sector Wise Registration</h3>
        <p class="mt-2 text-gray-700 dark:text-gray-300">
            <form id="sectorWiseRegistrationForm" class="space-y-6">
                <x-date-input id="fromDate" label="From Date" required="true"/>
                <x-date-input id="toDate" label="To Date" required="true"/>
                <x-select-input id="sector" label="Sector" :options="$sectorOptions" required="true"/>
                
                <div class="flex justify-end space-x-4">
                    <x-form-button type="button" text="Print Registration" onclick="printSectorWiseRegistration()" bgColor="indigo-600" textColor="white"/>
                </div>
            </form>
        </p>
    </div>
</x-common-card>

                        @endslot

                        @slot('slotgenderwiseregistration')
                        <x-common-card>
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 border-b">Gender wise Registration</h3>
    <p class="text-gray-700 dark:text-gray-300">This is the content for the Gender Wise Registration.</p>
    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 mb-8">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Gender Wise Registration</h3>
        <p class="mt-2 text-gray-700 dark:text-gray-300">
            <form id="genderWiseRegistrationForm" class="space-y-6">
                <x-date-input id="fromDate" label="From Date" required="true"/>
                <x-date-input id="toDate" label="To Date" required="true"/>
                <x-select-input id="gender" label="Gender" :options="$genderOptions" required="true"/>
                
                <div class="flex justify-end space-x-4">
                    <x-form-button type="button" text="Print Registration" onclick="printGenderWiseRegistration()" bgColor="indigo-600" textColor="white"/>
                </div>
            </form>
        </p>
    </div>
</x-common-card>
                        @endslot

                        @slot('slotfieldvisitreport')
                        <x-common-card>
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 border-b">Field Visit Report</h3>
    <p class="text-gray-700 dark:text-gray-300">This is the content for the Field Visit Report.</p>
    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 mb-8">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Field Visit Report</h3>
        <p class="mt-2 text-gray-700 dark:text-gray-300">
            <!-- Field Visit Report Form -->
            <form id="fieldVisitReportForm" class="space-y-6">
                <x-date-input id="fromDate" label="From Date" required="true"/>
                <x-date-input id="toDate" label="To Date" required="true"/>
                <x-select-input id="scheme" label="Loan Scheme" :options="$loanSchemeOptions" required="true"/>
                <x-select-input id="district" label="District" :options="$districtOptions" required="true"/>
                <x-select-input id="bank" label="Bank" :options="$bankOptions" required="true"/>
                
                <div class="flex justify-end space-x-4">
                    <x-form-button type="button" text="Print Report" onclick="printFieldVisitReport()" bgColor="indigo-600" textColor="white"/>
                </div>
            </form>
        </p>
    </div>
</x-common-card>

                        @endslot
                    </x-sub-nav-area>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
