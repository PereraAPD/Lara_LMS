<!-- General Information -->
<div class="flex justify-between">
    <div class="w-2/3 px-4">
        <!-- Instructions on the left side -->
        <div>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Instructions</h3>
            <ul class="mt-2 text-gray-700 dark:text-gray-300">
                @foreach(config('loan_info_links.general.instructions') as $instruction => $description)
                <li>
                    <strong><i class="fas fa-pen-nib mr-2"></i> {{ $instruction }}:</strong> {{ $description }}
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="w-1/3 relative">
        <!-- Quick Links on the right side -->
        <div class="absolute top-0 bottom-0 right-0 border-l border-gray-300 dark:border-gray-700 px-4">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Quick Links</h3>
            <ul class="list-disc mt-2 text-gray-700 dark:text-gray-300">
                @foreach(config('loan_info_links.general.quick_links') as $linkName => $route)
                <li><a href="{{ route($route) }}" class="text-blue-600 hover:text-blue-800">{{ $linkName }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>