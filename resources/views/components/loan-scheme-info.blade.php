<div>
    <!-- Instructions -->
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Instructions</h3>
    <ul class="mt-2 text-gray-700 dark:text-gray-300">
        @foreach ($instructions as $instruction)
            <li>{{ $instruction }}</li>
        @endforeach
    </ul>
    
    <!-- Quick Links -->
    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mt-4">Quick Links</h3>
    <ul class="mt-2 text-gray-700 dark:text-gray-300">
        @foreach ($quickLinks as $link)
            <li><a href="{{ $link['url'] }}" class="text-blue-600 hover:text-blue-800">{{ $link['label'] }}</a></li>
        @endforeach
    </ul>
</div>
