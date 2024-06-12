@props(['id', 'label', 'options'])

<div class="inline-block">
    <label for="{{ $id }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ $label }}:</label>
    <select id="{{ $id }}" name="{{ $id }}" class="mt-1 block py-2 px-3 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-gray-300" required>
        @foreach($options as $option)
            <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
        @endforeach
    </select>
</div>
