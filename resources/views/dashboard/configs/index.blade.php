<x-dashboard-layout>
    @section('title', 'Config')
    <div class="p-4 block sm:flex items-center justify-between lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full h-screen mb-1">
            @include('dashboard.configs.edit')
        </div>
    </div>
</x-dashboard-layout>