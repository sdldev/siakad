<x-dashboard-layout>
    @include ('dashboard.layouts.breadcumb')
    <x-button.create route="categories" />
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead>
                <tr class="bg-slate-100 dark:bg-slate-900">
                    @foreach (['Nama','Slug'] as $header)
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-800 dark:text-gray-200 uppercase">
                        {{ $header }}
                    </th>
                    @endforeach
                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-800 dark:text-gray-200 uppercase text-end">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($categories as $var)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                        {{ $var->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                        {{ $var->slug }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <x-button.action route="categories" :id="$var->id" />
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @push('scripts')
    <script>
    </script>
    @endpush
</x-dashboard-layout>