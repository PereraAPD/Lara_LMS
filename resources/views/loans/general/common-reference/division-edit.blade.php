<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
            {{ __('Edit Division') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form method="POST" action="{{ route('division.update', $division->id) }}"> 
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <x-label for="district_id" value="{{ __('District') }}" />
                            <select id="district_id" name="district_id" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}" {{ $district->id == $division->district_id ? 'selected' : '' }}>{{ $district->district_name }}</option>
                                @endforeach
                            </select>
                            <x-input-error for="district_id" class="mt-2" />
                        </div>

                        <div>
                            <x-label for="division_name" value="{{ __('Division Name') }}" />
                            <x-input id="division_name" class="block mt-1 w-full" type="text" name="division_name" value="{{ $division->division_name }}" required autofocus />
                            <x-input-error for="division_name" class="mt-2" />
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