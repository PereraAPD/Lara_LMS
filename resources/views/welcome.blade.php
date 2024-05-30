<!-- resources/views/welcome.blade.php -->
<x-app-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="max-w-4xl bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <h1 class="text-4xl font-bold text-gray-900 dark:text-gray-100 text-center">
                    Welcome to LMS
                </h1>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-300 text-center">
                    Discover the amazing features we offer by logging in or registering a new account.
                </p>
                <div class="mt-8 flex justify-center space-x-4">
                    <a href="{{ route('login') }}" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-700">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-700">
                            Register
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
