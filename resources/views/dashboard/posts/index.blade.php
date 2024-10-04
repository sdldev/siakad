<x-dashboard-layout>
    @include ('dashboard.layouts.breadcumb')
    <x-button.create route="posts" />
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">




        <table class="table-fixed min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead>
                <tr class="bg-slate-100 dark:bg-slate-900">
                    @foreach (['Nama','Article','Kategori', 'Publisher', 'Status'] as $header)
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
                @foreach ($posts as $var)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-2 py-2 whitespace-nowrap">
                        <img class="rounded-md" src="{{ asset('storage/posts/thumbnail/'.$var->thumbnail) }}" height="150" width="150" alt="{{ $var->title }}">
                    </th>
                    <td class="px-6 py-4 whitespace-nowrap font-semibold text-sm text-gray-800 dark:text-gray-200">
                        {{ $var->title }}
                        <!-- <p class="hidden sm:block py-1 whitespace-nowrap font-normal text-xs  text-gray-800 dark:text-gray-200">
                            {{ $var->description }}
                        </p> -->
                        <p class="hidden sm:block py-1 whitespace-nowrap font-normal text-xs text-gray-800 dark:text-gray-200">
                            Create: {{ $var->created_at }} | Update: {{ $var->updated_at }}
                        </p>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-800 dark:text-gray-200">
                        {{ $var->category->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-800 dark:text-gray-200">
                        {{ $var->user->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-800 dark:text-gray-200">
                        {{ $var->status }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <x-button.action route="posts" :id="$var->id" />
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