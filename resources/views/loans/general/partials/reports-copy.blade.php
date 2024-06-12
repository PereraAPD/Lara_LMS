<x-app-layout>
    <div class="py-0">
        <div class="max-w-full mx-auto space-y-8">
            <div class=" bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7x1">
                    @php
                        $tabs = [
                            ['id' => 'daily-uploading-report', 'name' => 'Daily Uploading Report', 'view' => 'loans.general.partials.daily-uploading-report'],
                            ['id' => 'bank-wise-registered-loan', 'name' => 'Bank Wise Registration', 'view' => 'loans.general.partials.bank-wise-registered-loan'],
                            ['id' => 'province-wise-registration', 'name' => 'Province Wise Registration', 'view' => 'loans.general.partials.province-wise-registration'],
                            ['id' => 'district-wise-registration', 'name' => 'District Wise Registration', 'view' => 'loans.general.partials.district-wise-registration'],
                            ['id' => 'ds-division-wise-registration', 'name' => 'DS Division Wise Registration', 'view' => 'loans.general.partials.ds-division-wise-registration'],
                            ['id' => 'sector-wise-registration', 'name' => 'Sector Wise Registration', 'view' => 'loans.general.partials.sector-wise-registration'],
                            ['id' => 'gender-wise-registration', 'name' => 'Gender Wise Registration', 'view' => 'loans.general.partials.gender-wise-registration'],
                            ['id' => 'field-visit-report', 'name' => 'Field Visit Report', 'view' => 'loans.general.partials.field-visit-report']
                        ];
                    @endphp

                    <x-sub-nav :tabs="$tabs" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
