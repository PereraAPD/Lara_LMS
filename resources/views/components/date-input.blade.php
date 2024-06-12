@props(['id', 'label'])

<div class="inline-block">
    <label for="{{ $id }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ $label }}:</label>
    <input type="date" id="{{ $id }}" name="{{ $id }}" class="mt-1 block px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-gray-300" required>
</div>
