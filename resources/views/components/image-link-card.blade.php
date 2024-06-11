<div class="bg-white rounded-lg overflow-hidden shadow-md">
    <img src="{{ $imageUrl }}" alt="{{ $imageAlt }}" class="w-full">
    <div class="p-6">
        <h2 class="text-xl font-semibold mb-2">{{ $title }}</h2>
        <p class="text-gray-700 mb-4">{{ $description }}</p>
        <a href="{{ $buttonUrl }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ $buttonText }}</a>
    </div>
</div>
