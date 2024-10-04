<div class="mb-3 flex justify-end space-x-2">
    <div class="w-1/4">
        <form action="{{ route($route . '.index') }}" method="GET">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                    <svg class="flex-shrink-0 h-4 w-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8" />
                        <path d="m21 21-4.3-4.3" />
                    </svg>
                </div>
                <input type="text" id="simple-search" name="q"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                    focus:ring-slate-500 focus:border-slate-500 block w-full pl-10 p-2
                     dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                      dark:focus:ring-slate-500 dark:focus:border-slate-500"
                    placeholder="Cari Data" required="">
            </div>
        </form>
    </div>
    <a href="{{ route($route . '.create') }}"
        class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border font-medium
        bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none
        focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all
        text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400
        dark:hover:text-white dark:focus:ring-offset-gray-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        Create
    </a>
</div>
