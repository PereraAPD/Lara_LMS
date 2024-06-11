<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('dashboard') }}
        </h2>
    </x-slot>
    <div class="flex h-screen">
        <!-- Sidebar -->
<div class="bg-gray-900 text-white h-full w-52 flex flex-col">
        <!-- <div class="flex items-center justify-center h-16 bg-gray-800">
            <h2 class="text-xl font-bold">Loan Schemes</h2>
        </div> -->
        <div class="flex-1 overflow-y-auto">
            <nav>
            <a href="{{ route('loan.view', ['scheme' => 'General', 'view' => 'main']) }}" class="flex items-center px-6 py-2 text-sm font-medium hover:bg-gray-700 transition duration-300 ease-in-out">
    <i class="fas fa-folder mr-2"></i>
    General
</a>
<a href="{{ route('loan.view', ['scheme' => 'Sonduru-Piyasa', 'view' => 'main']) }}" class="flex items-center px-6 py-2 text-sm font-medium hover:bg-gray-700 transition duration-300 ease-in-out">
    <i class="fas fa-home mr-2"></i>
    Sonduru Piyasa
</a>
<a href="{{ route('loan.view', ['scheme' => 'Govi-Navoda', 'view' => 'main']) }}" class="flex items-center px-6 py-2 text-sm font-medium hover:bg-gray-700 transition duration-300 ease-in-out">
    <i class="fas fa-leaf mr-2"></i>
    Govi Navoda
</a>
<a href="{{ route('loan.view', ['scheme' => 'Riya-Shakthi', 'view' => 'main']) }}" class="flex items-center px-6 py-2 text-sm font-medium hover:bg-gray-700 transition duration-300 ease-in-out">
    <i class="fas fa-truck mr-2"></i>
    Riya Shakthi
</a>
<a href="{{ route('loan.view', ['scheme' => 'Ran-Aswenna', 'view' => 'main']) }}" class="flex items-center px-6 py-2 text-sm font-medium hover:bg-gray-700 transition duration-300 ease-in-out">
    <i class="fas fa-seedling mr-2"></i>
    Ran Aswenna
</a>
<a href="{{ route('loan.view', ['scheme' => 'Jaya-Isura', 'view' => 'main']) }}" class="flex items-center px-6 py-2 text-sm font-medium hover:bg-gray-700 transition duration-300 ease-in-out">
    <i class="fas fa-globe mr-2"></i>
    Jaya Isura
</a>
<a href="{{ route('loan.view', ['scheme' => 'Rivi-Bala-Savi', 'view' => 'main']) }}" class="flex items-center px-6 py-2 text-sm font-medium hover:bg-gray-700 transition duration-300 ease-in-out">
    <i class="fas fa-sun mr-2"></i>
    Rivi Bala Savi
</a>
<a href="{{ route('loan.view', ['scheme' => 'Diri-Saviya', 'view' => 'main']) }}" class="flex items-center px-6 py-2 text-sm font-medium hover:bg-gray-700 transition duration-300 ease-in-out">
    <i class="fas fa-bolt mr-2"></i>
    Diri Saviya
</a>
<a href="{{ route('loan.view', ['scheme' => 'Madya-Aruna', 'view' => 'main']) }}" class="flex items-center px-6 py-2 text-sm font-medium hover:bg-gray-700 transition duration-300 ease-in-out">
    <i class="fas fa-star mr-2"></i>
    Madya Aruna
</a>
<a href="{{ route('loan.view', ['scheme' => 'Green-Loan', 'view' => 'main']) }}" class="flex items-center px-6 py-2 text-sm font-medium hover:bg-gray-700 transition duration-300 ease-in-out">
    <i class="fas fa-hand-holding-water mr-2"></i>
    Green Loan
</a>
<a href="{{ route('loan.view', ['scheme' => 'Home-Sweet-Home', 'view' => 'main']) }}" class="flex items-center px-6 py-2 text-sm font-medium hover:bg-gray-700 transition duration-300 ease-in-out">
    <i class="fas fa-building mr-2"></i>
    Home Sweet Home
</a>
<a href="{{ route('loan.view', ['scheme' => 'Sihina-Maligaya', 'view' => 'main']) }}" class="flex items-center px-6 py-2 text-sm font-medium hover:bg-gray-700 transition duration-300 ease-in-out">
    <i class="fas fa-house-user mr-2"></i>
    Sihina Maligaya
</a>
<a href="{{ route('loan.view', ['scheme' => 'Rekawaranaya', 'view' => 'main']) }}" class="flex items-center px-6 py-2 text-sm font-medium hover:bg-gray-700 transition duration-300 ease-in-out">
    <i class="fas fa-wheelchair mr-2"></i>
    Rekawaranaya
</a>
<a href="{{ route('loan.view', ['scheme' => 'Mini-Taxi', 'view' => 'main']) }}" class="flex items-center px-6 py-2 text-sm font-medium hover:bg-gray-700 transition duration-300 ease-in-out">
    <i class="fas fa-taxi mr-2"></i>
    Mini Taxi
</a>
<a href="{{ route('loan.view', ['scheme' => 'Sigithi-Pasala', 'view' => 'main']) }}" class="flex items-center px-6 py-2 text-sm font-medium hover:bg-gray-700 transition duration-300 ease-in-out">
    <i class="fas fa-school mr-2"></i>
    Sigithi Pasala
</a>
<a href="{{ route('loan.view', ['scheme' => 'Working-Capital', 'view' => 'main']) }}" class="flex items-center px-6 py-2 text-sm font-medium hover:bg-gray-700 transition duration-300 ease-in-out">
    <i class="fas fa-users mr-2"></i>
    Working Capital
</a>
<a href="{{ route('loan.view', ['scheme' => 'City-Ride', 'view' => 'main']) }}" class="flex items-center px-6 py-2 text-sm font-medium hover:bg-gray-700 transition duration-300 ease-in-out">
    <i class="fas fa-road mr-2"></i>
    City Ride
</a>
<a href="{{ route('loan.view', ['scheme' => 'My-Future', 'view' => 'main']) }}" class="flex items-center px-6 py-2 text-sm font-medium hover:bg-gray-700 transition duration-300 ease-in-out">
    <i class="fas fa-graduation-cap mr-2"></i>
    My Future
</a>
<a href="{{ route('loan.view', ['scheme' => 'Security', 'view' => 'main']) }}" class="flex items-center px-6 py-2 text-sm font-medium hover:bg-gray-700 transition duration-300 ease-in-out">
    <i class="fas fa-shield-alt mr-2"></i>
    Security
</a>
<!-- Add more navigation links as needed -->
            </nav>
        </div>
    </div>

        <!-- Content area -->
        <div class="flex-1 bg-gray-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Main content area with card components -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Image Card -->
            <x-image-link-card
    imageUrl="image-url.jpg"
    imageAlt="Image Alt Text"
    title="Card Title"
    description="Description of the card goes here."
    buttonUrl="button-url"
    buttonText="Learn More"
/>
<!--Time Date Card-->
<div class="bg-white dark:bg-gray-900 shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Stats</h3>
                    <hr class="my-4 border-t border-gray-200 dark:border-gray-700">
                    <p class="text-gray-600">Logged in since: <span class="font-semibold">June 11, 2024 10:30 AM</span></p>
        <p class="text-gray-600">Current time: <span class="font-semibold" id="current-time"></span></p>
        <p class="text-gray-600">Today's Date: <span class="font-semibold">{{ \Carbon\Carbon::now()->toFormattedDateString() }}</span></p>
                </div>
            </div>
            <!-- calendar component-->
            <div class="container mx-auto px-4 py-8">
        <!-- Include the calendar component -->
        <x-calendar-component />
    </div>
            <!-- Ministry of Finance card -->
            <div class="bg-white dark:bg-gray-900 shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Ministry of Finance</h3>
                    <hr class="my-4 border-t border-gray-200 dark:border-gray-700">
                    <address class="text-gray-700 dark:text-gray-300">
                        The Secretariat, Colombo 01, Sri Lanka.<br>
                        <strong>Phone:</strong> +94 112 484 500, +94 112 484 600, +94 112 484 700<br>
                        <strong>Fax:</strong> +94 112 449 823<br>
                        <strong>Email:</strong> <a href="mailto:info@mo.treasury.gov.lk" class="text-blue-500">info@mo.treasury.gov.lk</a>
                    </address>
                </div>
            </div>

            <!-- Department of Development Finance card -->
            <div class="bg-white dark:bg-gray-900 shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Department of Development Finance</h3>
                    <hr class="my-4 border-t border-gray-200 dark:border-gray-700">
                    <address class="text-gray-700 dark:text-gray-300">
                        Room No. 140, 1st Floor, Ministry of Finance, The Secretariat, Colombo 01.<br>
                        <strong>Phone:</strong> +94 112 484 862<br>
                        <strong>Fax:</strong> +94 112 394 908<br>
                        <strong>Email:</strong> <a href="mailto:dgdf@dfd.treasury.gov.lk" class="text-blue-500">dgdf@dfd.treasury.gov.lk</a>
                    </address>
                </div>
            </div>
            <!-- Add more cards for additional departments -->

        </div>
    </div>
</div>

    </div>
</x-app-layout>
