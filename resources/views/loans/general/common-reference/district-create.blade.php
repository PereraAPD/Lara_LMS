<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
            {{ __('Create District') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form method="POST" action="{{ route('district.store') }}">
                    @csrf
                    <div>
                        <x-label for="district_name" value="{{ __('District Name') }}" />
                        <x-input id="district_name" class="block mt-1 w-full" type="text" name="district_name" :value="old('district_name')" required autofocus />
                        <x-input-error for="district_name" class="mt-2" />
                    </div>

                    <div class="flex justify-end mt-4">
                        <x-button class="ml-4">
                            {{ __('Create') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>