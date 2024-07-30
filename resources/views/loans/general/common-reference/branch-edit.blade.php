<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
            {{ __('Edit Branch') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form method="POST" action="{{ route('branch.update', $branch->id) }}"> 
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <x-label for="bank_id" value="{{ __('Bank Name') }}" />
                            <select id="bank_id" name="bank_id" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                @foreach ($banks as $bank)
                                    <option value="{{ $bank->id }}" {{ $bank->id == $branch->bank_id ? 'selected' : '' }}>{{ $bank->bank_name }}</option>
                                @endforeach
                            </select>
                            <x-input-error for="bank_id" class="mt-2" />
                        </div>

                        <div>
                            <x-label for="branch_code" value="{{ __('Branch Code') }}" />
                            <x-input id="branch_code" class="block mt-1 w-full" type="text" name="branch_code" value="{{ $branch->branch_code }}" required autofocus />
                            <x-input-error for="branch_code" class="mt-2" /> 
                        </div>

                        <div>
                            <x-label for="district_id" value="{{ __('District') }}" />
                            <select id="district_id" name="district_id" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}" {{ $district->id == $branch->district_id ? 'selected' : '' }}>{{ $district->district_name }}</option>
                                @endforeach
                            </select>
                            <x-input-error for="district_id" class="mt-2" />
                        </div>

                        <div>
                            <x-label for="branch_name" value="{{ __('Branch Name') }}" />
                            <x-input id="branch_name" class="block mt-1 w-full" type="text" name="branch_name" value="{{ $branch->branch_name }}" required />
                            <x-input-error for="branch_name" class="mt-2" />
                        </div>

                        <div>
                            <x-label for="telephone" value="{{ __('Telephone Number') }}" />
                            <x-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" value="{{ $branch->telephone }}" />
                            <x-input-error for="telephone" class="mt-2" />
                        </div>

                        <div>
                            <x-label for="fax" value="{{ __('Fax Number') }}" />
                            <x-input id="fax" class="block mt-1 w-full" type="text" name="fax" value="{{ $branch->fax }}" />
                            <x-input-error for="fax" class="mt-2" />
                        </div>
                    </div>

                    <div class="flex justify-end mt-4">
                        <x-button class="ml-4">
                            {{ __('Update') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>