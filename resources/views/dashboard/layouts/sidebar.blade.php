<!-- Tombol Toggle di Mobile -->
<div class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 md:px-8 lg:hidden dark:bg-gray-800 dark:border-gray-700">
    <div class="flex items-center py-4">
        <button @click="open = !open" class="text-gray-500 hover:text-gray-600" aria-label="Toggle navigation">
            <span class="sr-only">Toggle Navigation</span>
            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" x2="21" y1="6" y2="6" />
                <line x1="3" x2="21" y1="12" y2="12" />
                <line x1="3" x2="21" y1="18" y2="18" />
            </svg>
        </button>
    </div>
</div>

<!-- Sidebar -->
<div x-data="{ open: false }" class="lg:block">
    <!-- Overlay untuk Mobile -->
    <div 
        class="fixed inset-0 bg-black bg-opacity-50 z-50 lg:hidden" 
        x-show="open" 
        @click="open = false" 
        x-cloak 
        x-transition:enter="transition-opacity ease-out duration-300" 
        x-transition:enter-start="opacity-0" 
        x-transition:enter-end="opacity-100" 
        x-transition:leave="transition-opacity ease-in duration-300" 
        x-transition:leave-start="opacity-100" 
        x-transition:leave-end="opacity-0">
    </div>

    <!-- Sidebar Container -->
    <div :class="{'translate-x-0': open, '-translate-x-full': !open}" 
        class="fixed transform top-0 start-0 bottom-0 z-[60] w-64 bg-slate-50 shadow-xl border-e border-gray-200 pt-7 pb-10 overflow-y-auto lg:translate-x-0 lg:static dark:bg-gray-900 dark:border-gray-700 transition-transform duration-300 ease-in-out">
        <div class="px-6">
            <a class="flex-none text-xl font-semibold dark:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="{{ route('dashboard') }}" aria-label="Brand">Santri-MU</a>
        </div>

        <nav class="p-6 w-full flex flex-col flex-wrap">
            <!-- Isi Navigasi -->
            <div>
                <a class="flex items-center gap-x-3.5 py-1 px-2.5 text-sm text-slate-700 rounded-lg dark:text-slate-300" href="#">Apps</a>
            </div>
            <hr class="py-3">
            
            <!-- Accordion Menu -->
            <div x-data="{ activeAccordion: '' }" class="relative w-full max-w-md mx-auto text-sm font-normal">
                <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
                    <button @click="activeAccordion = activeAccordion === id ? '' : id" class="mb-2 w-full text-start flex items-center gap-x-3.5 py-2 select-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                <path d="M3.338 17A10 10 0 0 0 12 22a10 10 0 0 0 8.662-5M3.338 7A10 10 0 0 1 12 2a10 10 0 0 1 8.662 5" />
                            </g>
                        </svg>
                        Website
                        <svg class="ms-auto block w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion === id }" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div x-show="activeAccordion === id" x-collapse x-cloak>
                        <ul class="p-4 pt-2 opacity-70">
                            <li><a href="{{ route('posts.index') }}" class="flex items-center gap-x-3.5 py-2 px-2.5">Index Artikel</a></li>
                            <li><a href="{{ route('categories.index') }}" class="flex items-center gap-x-3.5 py-2 px-2.5">Kategori</a></li>
                            <li><a href="#" class="flex items-center gap-x-3.5 py-2 px-2.5">Pengaturan</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Add other accordion items here -->
            </div>
        </nav>
    </div>
</div>
