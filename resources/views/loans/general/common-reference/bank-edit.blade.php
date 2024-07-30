<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
            {{ __('Edit Bank') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form method="POST" action="{{ route('bank.update', $bank->id) }}"> 
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <x-label for="bank_code" value="{{ __('Bank Code') }}" />
                            <x-input id="bank_code" class="block mt-1 w-full" type="text" name="bank_code" value="{{ $bank->bank_code }}" required autofocus />
                            <x-input-error for="bank_code" class="mt-2" /> 
                        </div>

                        <div>
                            <x-label for="bank_name" value="{{ __('Bank Name') }}" />
                            <x-input id="bank_name" class="block mt-1 w-full" type="text" name="bank_name" value="{{ $bank->bank_name }}" required />
                            <x-input-error for="bank_name" class="mt-2" />
                        </div>

                        <div>
                            <x-label for="short_name" value="{{ __('Short Name') }}" />
                            <x-input id="short_name" class="block mt-1 w-full" type="text" name="short_name" value="{{ $bank->short_name }}" required />
                            <x-input-error for="short_name" class="mt-2" />
                        </div>

                        <div>
                            <x-label for="telephone" value="{{ __('Telephone Number') }}" />
                            <x-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" value="{{ $bank->telephone }}" />
                            <x-input-error for="telephone" class="mt-2" />
                        </div>

                        <div>
                            <x-label for="fax" value="{{ __('Fax Number') }}" />
                            <x-input id="fax" class="block mt-1 w-full" type="text" name="fax" value="{{ $bank->fax }}" />
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