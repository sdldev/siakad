<x-dashboard-layout>
    @section('title', 'Index Sliders')
    <x-button.create route="sliders" />

    <div class="w-full h-full">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead>
                    <tr class="bg-slate-100 dark:bg-slate-900">
                        @foreach (['Image','Text'] as $header)
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
                    @foreach ($sliders as $var)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-2 py-2 whitespace-nowrap">
                            <img class="rounded-md" src="{{ asset($var->image) }}" height="150" width="150" alt="{{ $var->title }}">
                        </th>

                        <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-800 dark:text-gray-200">
                            {{ $var->text }}
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                            <x-button.edit route="sliders" :id="$var->id" />
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-dashboard-layout>