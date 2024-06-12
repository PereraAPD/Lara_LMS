<x-app-layout>
    <div class="py-0">
        <div class="max-w-full mx-auto space-y-8">
            <div class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7x1">
                    @php
                        $tabs = [
                            ['id' => 'bank', 'name' => 'Bank'],
                            ['id' => 'branch', 'name' => 'Branch'],
                            ['id' => 'districts', 'name' => 'District'],
                            ['id' => 'division', 'name' => 'Division']
                        ];
                    @endphp

                    @php
                        // Define options for dropdowns
                        $bankOptions = [
                            ['value' => 'bank1', 'label' => 'Bank 1'],
                            ['value' => 'bank2', 'label' => 'Bank 2'],
                            // Add more options as needed
                        ];

                        $districtOptions = [
                            ['value' => 'district1', 'label' => 'District 1'],
                            ['value' => 'district2', 'label' => 'District 2'],
                            // Add more options as needed
                        ];
                    @endphp

                    <x-sub-nav-area :tabs="$tabs">
                        @slot('slotbank')
                            <!-- Bank Form -->
                            <x-common-card>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 border-b">Bank Form</h3>
                                <form method="post" class="space-y-6">
                                    @csrf
                                    <x-text-input id="bankCode" label="Bank Code" placeholder="Enter Bank Code"/>
                                    <x-text-input id="bankName" label="Bank Name" placeholder="Enter Bank Name"/>
                                    <x-text-input id="shortName" label="Short Name" placeholder="Enter Short Name"/>
                                    <x-text-input id="telephone" label="Telephone Number" placeholder="Enter Telephone Number"/>
                                    <x-text-input id="fax" label="Fax Number" placeholder="Enter Fax Number"/>

                                    <!-- Add New Button -->
                                    <div class="flex justify-end">
                                        <x-form-button text="Add New" onclick="printRecords()" bgColor="indigo-600" textColor="white"/>
                                    </div>
                                </form>
                            </x-common-card>
                        @endslot

                        @slot('slotbranch')
                            <!-- Branch Form -->
                            <x-common-card>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 border-b">Branch Form</h3>
                                <form method="post" class="space-y-6">
                                    @csrf
                                    <x-select-input id="bankName" label="Bank Name" :options="$bankOptions"/>
                                    <x-text-input id="branchCode" label="Branch Code" placeholder="Enter Branch Code"/>
                                    <x-select-input id="district" label="District" :options="$districtOptions"/>
                                    <x-text-input id="branchName" label="Branch Name" placeholder="Enter Branch Name"/>
                                    <x-text-input id="telNo" label="Telephone Number" placeholder="Enter Telephone Number"/>
                                    <x-text-input id="fax" label="Fax Number" placeholder="Enter Fax Number"/>

                                    <!-- Add New Button -->
                                    <div class="flex justify-end">
                                        <x-form-button text="Add New" onclick="printRecords()" bgColor="indigo-600" textColor="white"/>
                                    </div>
                                </form>
                            </x-common-card>
                        @endslot

                        @slot('slotdistricts')
                            <!-- District Form -->
                            <x-common-card>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 border-b">District Form</h3>
                                <form method="post" class="space-y-6">
                                    @csrf
                                    <x-text-input id="districtName" label="District Name" placeholder="Enter District Name"/>

                                    <!-- View/Modify/Delete Buttons -->
                                    <div class="flex justify-end">
                                        <x-form-button text="View/Add/Modify/Delete" onclick="printRecords()" bgColor="indigo-600" textColor="white"/>
                                    </div>
                                </form>
                            </x-common-card>
                        @endslot

                        @slot('slotdivision')
                            <!-- Division Form -->
                            <x-common-card>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 border-b">Division Form</h3>
                                <form method="post" class="space-y-6">
                                    @csrf
                                    <x-select-input id="district" label="District" :options="$districtOptions"/>
                                    <x-text-input id="division" label="Division" placeholder="Enter Division"/>

                                    <!-- View/Add/Delete/Modify Buttons -->
                                    <div class="flex justify-end">
                                        <x-form-button text="View/Add/Delete/Modify" onclick="printRecords()" bgColor="indigo-600" textColor="white"/>
                                    </div>
                                </form>
                            </x-common-card>
                        @endslot
                    </x-sub-nav-area>
                </div>
            </div>
            <!-- Add more sections or content as needed -->
        </div>
    </div>
</x-app-layout>
