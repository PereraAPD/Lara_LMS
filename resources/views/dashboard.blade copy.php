<x-app-layout>
    <div class="flex h-screen">
        <!-- Sidebar -->
<div class="bg-gray-800 text-white w-64 flex-shrink-0">
    <div class="h-full flex flex-col justify-between">
        <div class="py-4 px-6">
            <!-- Sidebar content goes here -->
            <h2 class="text-2xl font-bold mb-4">Sidebar</h2>
            <ul>
            <li class="mb-2">
    <a href="{{ route('loan.view', ['scheme' => 'General', 'view' => 'main']) }}" class="flex items-center">
        <i class="fas fa-folder mr-2"></i>
        <span>General</span>
    </a>
</li>
<li class="mb-2">
<a href="{{ route('loan.view', ['scheme' => 'Sonduru-Piyasa', 'view' => 'main']) }}" class="flex items-center">
        <i class="fas fa-home mr-2"></i>
        <span>Sonduru Piyasa</span>
    </a>
</li>
<li class="mb-2">
    <a href="{{ route('view.show', 'Govi-Navoda') }}" class="flex items-center">
        <i class="fas fa-leaf mr-2"></i>
        <span>Govi Navoda</span>
    </a>
</li>
<li class="mb-2">
    <a href="{{ route('view.show', 'Riya-Shakthi') }}" class="flex items-center">
        <i class="fas fa-truck mr-2"></i>
        <span>Riya Shakthi</span>
    </a>
</li>
<li class="mb-2">
    <a href="{{ route('view.show', 'Ran-Aswenna') }}" class="flex items-center">
        <i class="fas fa-seedling mr-2"></i>
        <span>Ran Aswenna</span>
    </a>
</li>
<li class="mb-2">
    <a href="{{ route('view.show', 'Jaya-Isura') }}" class="flex items-center">
        <i class="fas fa-globe mr-2"></i>
        <span>Jaya Isura</span>
    </a>
</li>
<li class="mb-2">
    <a href="{{ route('view.show', 'Rivi-Bala-Savi') }}" class="flex items-center">
        <i class="fas fa-sun mr-2"></i>
        <span>Rivi Bala Savi</span>
    </a>
</li>
<li class="mb-2">
    <a href="{{ route('view.show', 'Diri-Saviya') }}" class="flex items-center">
        <i class="fas fa-bolt mr-2"></i>
        <span>Diri Saviya</span>
    </a>
</li>
<li class="mb-2">
    <a href="{{ route('view.show', 'Madya-Aruna') }}" class="flex items-center">
        <i class="fas fa-star mr-2"></i>
        <span>Madya Aruna</span>
    </a>
</li>
<li class="mb-2">
    <a href="{{ route('view.show', 'Green-Loan') }}" class="flex items-center">
        <i class="fas fa-hand-holding-water mr-2"></i>
        <span>Green Loan</span>
    </a>
</li>
<li class="mb-2">
    <a href="{{ route('view.show', 'Home-Sweet-Home') }}" class="flex items-center">
        <i class="fas fa-building mr-2"></i>
        <span>Home Sweet Home</span>
    </a>
</li>
<li class="mb-2">
    <a href="{{ route('view.show', 'Sihina-Maligaya') }}" class="flex items-center">
        <i class="fas fa-house-user mr-2"></i>
        <span>Sihina Maligaya</span>
    </a>
</li>
<li class="mb-2">
    <a href="{{ route('view.show', 'Rekawaranaya') }}" class="flex items-center">
        <i class="fas fa-wheelchair mr-2"></i>
        <span>Rekawaranaya</span>
    </a>
</li>
<li class="mb-2">
    <a href="{{ route('view.show', 'Mini-Taxi') }}" class="flex items-center">
        <i class="fas fa-taxi mr-2"></i>
        <span>Mini Taxi</span>
    </a>
</li>
<li class="mb-2">
    <a href="{{ route('view.show', 'Sigithi-Pasala') }}" class="flex items-center">
        <i class="fas fa-school mr-2"></i>
        <span>Sigithi Pasala</span>
    </a>
</li>
<li class="mb-2">
    <a href="{{ route('view.show', 'Working-Capital') }}" class="flex items-center">
        <i class="fas fa-users mr-2"></i>
        <span>Working Capital</span>
    </a>
</li>
<li class="mb-2">
    <a href="{{ route('view.show', 'City-Ride') }}" class="flex items-center">
        <i class="fas fa-road mr-2"></i>
        <span>City Ride</span>
    </a>
</li>
<li class="mb-2">
    <a href="{{ route('view.show', 'My-Future') }}" class="flex items-center">
        <i class="fas fa-graduation-cap mr-2"></i>
        <span>
            My Future
        </span>
    </a>
    </li>
    <li class="mb-2">
    <a href="{{ route('view.show', 'Security') }}" class="flex items-center">
        <i class="fas fa-shield-alt mr-2"></i>
        <span>Security</span>
    </a>
</li>
            </ul>
        </div>
        <div class="py-4 px-6">
            <!-- Additional sidebar content if needed -->
        </div>
    </div>
</div>

        <!-- Content area -->
        <div class="flex-1 bg-gray-100">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <!-- Main content area -->
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                    <div class="p-8">
                        <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100 text-center">
                            Welcome to Loan Manager
                        </h1>
                        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 text-center">
                            Enterprise Sri Lanka Programme (2017-2019)
                        </h2>
                    </div>
                    <div class="px-8 py-4 border-t border-gray-200 dark:border-gray-700">
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            <div class="p-4 bg-white dark:bg-gray-900 shadow-md rounded-lg">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Ministry of Finance</h3>
                                <hr class="my-2 border-t border-gray-200 dark:border-gray-700">
                                <address class="text-gray-700 dark:text-gray-300">
                                    The Secretariat, Colombo 01, Sri Lanka.<br>
                                    <strong>Phone:</strong> +94 112 484 500, +94 112 484 600, +94 112 484 700<br>
                                    <strong>Fax:</strong> +94 112 449 823<br>
                                    <strong>Email:</strong> <a href="mailto:info@mo.treasury.gov.lk" class="text-blue-500">info@mo.treasury.gov.lk</a>
                                </address>
                            </div>
                            <div class="p-4 bg-white dark:bg-gray-900 shadow-md rounded-lg">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Department of Development Finance</h3>
                                <hr class="my-2 border-t border-gray-200 dark:border-gray-700">
                                <address class="text-gray-700 dark:text-gray-300">
                                    Room No. 140, 1st Floor, Ministry of Finance, The Secretariat, Colombo 01.<br>
                                    <strong>Phone:</strong> +94 112 484 862<br>
                                    <strong>Fax:</strong> +94 112 394 908<br>
                                    <strong>Email:</strong> <a href="mailto:dgdf@dfd.treasury.gov.lk" class="text-blue-500">dgdf@dfd.treasury.gov.lk</a>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
