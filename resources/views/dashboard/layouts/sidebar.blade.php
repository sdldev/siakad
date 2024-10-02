<div
    class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6
      md:px-8 lg:hidden dark:bg-gray-800 dark:border-gray-700">
    <div class="flex items-center py-4">
        <button type="button" class="text-gray-500 hover:text-gray-600" data-hs-overlay="#application-sidebar"
            aria-controls="application-sidebar" aria-label="Toggle navigation">
            <span class="sr-only">Toggle Navigation</span>
            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <line x1="3" x2="21" y1="6" y2="6" />
                <line x1="3" x2="21" y1="12" y2="12" />
                <line x1="3" x2="21" y1="18" y2="18" />
            </svg>
        </button>
    </div>
</div>


<div id="application-sidebar"
    class="transform hidden fixed top-0 start-0 bottom-0 z-[60]
      w-64 bg-slate-50 shadow-xl  border-e border-gray-200 pt-7 pb-10 overflow-y-auto lg:block
      lg:translate-x-0 lg:end-auto lg:bottom-0 dark:bg-gray-900 dark:border-gray-700">
    <div class="px-6">
        <a class="flex-none text-xl font-semibold dark:text-white dark:focus:outline-none
          dark:focus:ring-1 dark:focus:ring-gray-600"
            href="{{ route('dashboard') }}" aria-label="Brand">Santri-MU</a>
    </div>

    <nav class="p-6 w-full flex flex-col flex-wrap">
        <div>
            <a class="flex items-center gap-x-3.5 py-1 px-2.5
                  text-sm text-slate-700 rounded-lg
                  dark:text-slate-300"
                href="#">
                Apps
            </a>
        </div>
        <hr class="py-3">
        <div x-data="{ activeAccordion: '',  setActiveAccordion(id) { this.activeAccordion = (this.activeAccordion == id) ? '' : id }}" class="relative w-full max-w-md mx-auto text-sm font-normal">
            <div x-data="{ id: $id('accordion') }" :class="{ 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-slate-300': activeAccordion==id, 'text-slate-600 dark:text-slate-500 hover:text-slate-900 dark:hover:text-slate-300': activeAccordion!=id }" class="cursor-pointer group">
                <button @click="setActiveAccordion(id)" class="mb-2 hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 select-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                            <path d="M3.338 17A10 10 0 0 0 12 22a10 10 0 0 0 8.662-5M3.338 7A10 10 0 0 1 12 2a10 10 0 0 1 8.662 5" />
                            <path d="M13 21.95s1.408-1.853 2.295-4.95M13 2.05S14.408 3.902 15.295 7M11 21.95S9.592 20.098 8.705 17M11 2.05S9.592 3.902 8.705 7M9 10l1.5 5l1.5-5l1.5 5l1.5-5M1 10l1.5 5L4 10l1.5 5L7 10m10 0l1.5 5l1.5-5l1.5 5l1.5-5" />
                        </g>
                    </svg>
                    Web Ponpes
                    <svg class="ms-auto block w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="p-4 pt-2 opacity-70">
                        <ul class="pt-2 ps-2">
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M4.616 19q-.691 0-1.153-.462T3 17.384V15.27h1v2.115q0 .231.192.424t.423.192h14.77q.23 0 .423-.192t.192-.424V6.616q0-.231-.192-.424T19.385 6H4.615q-.23 0-.423.192T4 6.616V8.73H3V6.616q0-.691.463-1.153T4.615 5h14.77q.69 0 1.152.463T21 6.616v10.769q0 .69-.463 1.153T19.385 19zm7.269-3.577l-.708-.72l2.21-2.203H3v-1h10.387l-2.21-2.204l.708-.719L15.308 12z" />
                                    </svg>
                                    Artikel Baru
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m16 11.78l4.24-7.33l1.73 1l-5.23 9.05l-6.51-3.75L5.46 19H22v2H2V3h2v14.54L9.5 8z" />
                                    </svg>
                                    Index
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
                                        <path fill="currentColor" d="M32 26v-2h-2.101a5 5 0 0 0-.732-1.753l1.49-1.49l-1.414-1.414l-1.49 1.49A5 5 0 0 0 26 20.101V18h-2v2.101a5 5 0 0 0-1.753.732l-1.49-1.49l-1.414 1.414l1.49 1.49A5 5 0 0 0 20.101 24H18v2h2.101a5 5 0 0 0 .732 1.753l-1.49 1.49l1.414 1.414l1.49-1.49a5 5 0 0 0 1.753.732V32h2v-2.101a5 5 0 0 0 1.753-.732l1.49 1.49l1.414-1.414l-1.49-1.49A5 5 0 0 0 29.899 26Zm-7 2a3 3 0 1 1 3-3a3.003 3.003 0 0 1-3 3" />
                                        <circle cx="7" cy="20" r="2" fill="currentColor" />
                                        <path fill="currentColor" d="M14 20a4 4 0 1 1 4-4a4.01 4.01 0 0 1-4 4m0-6a2 2 0 1 0 2 2a2.006 2.006 0 0 0-2-2" />
                                        <circle cx="21" cy="12" r="2" fill="currentColor" />
                                        <path fill="currentColor" d="M13.02 28.272L3 22.426V9.574l11-6.416l11.496 6.706l1.008-1.728l-12-7a1 1 0 0 0-1.008 0l-12 7A1 1 0 0 0 1 9v14a1 1 0 0 0 .496.864L12.013 30Z" />
                                    </svg>
                                    Pengaturan
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div x-data="{ id: $id('accordion') }" :class="{ 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-slate-300': activeAccordion==id, 'text-slate-600 dark:text-slate-500 hover:text-slate-900 dark:hover:text-slate-300': activeAccordion!=id }" class="cursor-pointer group">
                <button @click="setActiveAccordion(id)" class="mb-2 hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 select-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M11.015 33.445v8.2L42.5 26.742V6.355L24 15.657L5.5 6.355v20.387l31.485 14.903v-8.2m-12.92-2.947V19.373" />
                    </svg>
                    Hafalan Santri
                    <svg class="ms-auto block w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="p-4 pt-2 opacity-70">
                        <ul class="pt-2 ps-2">
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M4.616 19q-.691 0-1.153-.462T3 17.384V15.27h1v2.115q0 .231.192.424t.423.192h14.77q.23 0 .423-.192t.192-.424V6.616q0-.231-.192-.424T19.385 6H4.615q-.23 0-.423.192T4 6.616V8.73H3V6.616q0-.691.463-1.153T4.615 5h14.77q.69 0 1.152.463T21 6.616v10.769q0 .69-.463 1.153T19.385 19zm7.269-3.577l-.708-.72l2.21-2.203H3v-1h10.387l-2.21-2.204l.708-.719L15.308 12z" />
                                    </svg>
                                    Input Baru
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m16 11.78l4.24-7.33l1.73 1l-5.23 9.05l-6.51-3.75L5.46 19H22v2H2V3h2v14.54L9.5 8z" />
                                    </svg>
                                    Report
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
                                        <path fill="currentColor" d="M32 26v-2h-2.101a5 5 0 0 0-.732-1.753l1.49-1.49l-1.414-1.414l-1.49 1.49A5 5 0 0 0 26 20.101V18h-2v2.101a5 5 0 0 0-1.753.732l-1.49-1.49l-1.414 1.414l1.49 1.49A5 5 0 0 0 20.101 24H18v2h2.101a5 5 0 0 0 .732 1.753l-1.49 1.49l1.414 1.414l1.49-1.49a5 5 0 0 0 1.753.732V32h2v-2.101a5 5 0 0 0 1.753-.732l1.49 1.49l1.414-1.414l-1.49-1.49A5 5 0 0 0 29.899 26Zm-7 2a3 3 0 1 1 3-3a3.003 3.003 0 0 1-3 3" />
                                        <circle cx="7" cy="20" r="2" fill="currentColor" />
                                        <path fill="currentColor" d="M14 20a4 4 0 1 1 4-4a4.01 4.01 0 0 1-4 4m0-6a2 2 0 1 0 2 2a2.006 2.006 0 0 0-2-2" />
                                        <circle cx="21" cy="12" r="2" fill="currentColor" />
                                        <path fill="currentColor" d="M13.02 28.272L3 22.426V9.574l11-6.416l11.496 6.706l1.008-1.728l-12-7a1 1 0 0 0-1.008 0l-12 7A1 1 0 0 0 1 9v14a1 1 0 0 0 .496.864L12.013 30Z" />
                                    </svg>
                                    Pengaturan
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div x-data="{ id: $id('accordion') }" :class="{ 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-slate-300': activeAccordion==id, 'text-slate-600 dark:text-slate-500 hover:text-slate-900 dark:hover:text-slate-300': activeAccordion!=id }" class="cursor-pointer group">
                <button @click="setActiveAccordion(id)" class="mb-2 hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 select-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14.12" height="20" viewBox="0 0 1152 1632">
                        <path fill="currentColor" d="M1124 388L832 680v824q0 46-33 79t-79 33t-79-33t-33-79v-384h-64v384q0 46-33 79t-79 33t-79-33t-33-79V680L28 388Q0 360 0 320t28-68q29-28 68.5-28t67.5 28l228 228h368l228-228q28-28 68-28t68 28q28 29 28 68.5t-28 67.5M800 224q0 93-65.5 158.5T576 448t-158.5-65.5T352 224t65.5-158.5T576 0t158.5 65.5T800 224" />
                    </svg>
                    Permasalahan Santri
                    <svg class="ms-auto block w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="p-4 pt-2 opacity-70">
                        <ul class="pt-2 ps-2">
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M4.616 19q-.691 0-1.153-.462T3 17.384V15.27h1v2.115q0 .231.192.424t.423.192h14.77q.23 0 .423-.192t.192-.424V6.616q0-.231-.192-.424T19.385 6H4.615q-.23 0-.423.192T4 6.616V8.73H3V6.616q0-.691.463-1.153T4.615 5h14.77q.69 0 1.152.463T21 6.616v10.769q0 .69-.463 1.153T19.385 19zm7.269-3.577l-.708-.72l2.21-2.203H3v-1h10.387l-2.21-2.204l.708-.719L15.308 12z" />
                                    </svg>
                                    Input Baru
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m16 11.78l4.24-7.33l1.73 1l-5.23 9.05l-6.51-3.75L5.46 19H22v2H2V3h2v14.54L9.5 8z" />
                                    </svg>
                                    Report
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
                                        <path fill="currentColor" d="M32 26v-2h-2.101a5 5 0 0 0-.732-1.753l1.49-1.49l-1.414-1.414l-1.49 1.49A5 5 0 0 0 26 20.101V18h-2v2.101a5 5 0 0 0-1.753.732l-1.49-1.49l-1.414 1.414l1.49 1.49A5 5 0 0 0 20.101 24H18v2h2.101a5 5 0 0 0 .732 1.753l-1.49 1.49l1.414 1.414l1.49-1.49a5 5 0 0 0 1.753.732V32h2v-2.101a5 5 0 0 0 1.753-.732l1.49 1.49l1.414-1.414l-1.49-1.49A5 5 0 0 0 29.899 26Zm-7 2a3 3 0 1 1 3-3a3.003 3.003 0 0 1-3 3" />
                                        <circle cx="7" cy="20" r="2" fill="currentColor" />
                                        <path fill="currentColor" d="M14 20a4 4 0 1 1 4-4a4.01 4.01 0 0 1-4 4m0-6a2 2 0 1 0 2 2a2.006 2.006 0 0 0-2-2" />
                                        <circle cx="21" cy="12" r="2" fill="currentColor" />
                                        <path fill="currentColor" d="M13.02 28.272L3 22.426V9.574l11-6.416l11.496 6.706l1.008-1.728l-12-7a1 1 0 0 0-1.008 0l-12 7A1 1 0 0 0 1 9v14a1 1 0 0 0 .496.864L12.013 30Z" />
                                    </svg>
                                    Pengaturan
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div x-data="{ id: $id('accordion') }" :class="{ 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-slate-300': activeAccordion==id, 'text-slate-600 dark:text-slate-500 hover:text-slate-900 dark:hover:text-slate-300': activeAccordion!=id }" class="cursor-pointer group">
                <button @click="setActiveAccordion(id)" class="mb-2 hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 select-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48">
                        <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M28.772 24.667A4 4 0 0 0 25 22v-1h-2v1a4 4 0 1 0 0 8v4c-.87 0-1.611-.555-1.887-1.333a1 1 0 1 0-1.885.666A4 4 0 0 0 23 36v1h2v-1a4 4 0 0 0 0-8v-4a2 2 0 0 1 1.886 1.333a1 1 0 1 0 1.886-.666M23 24a2 2 0 1 0 0 4zm2 10a2 2 0 1 0 0-4z" />
                            <path d="M13.153 8.621C15.607 7.42 19.633 6 24.039 6c4.314 0 8.234 1.361 10.675 2.546l.138.067c.736.364 1.33.708 1.748.987L32.906 15C41.422 23.706 48 41.997 24.039 41.997S6.479 24.038 15.069 15l-3.67-5.4c.283-.185.642-.4 1.07-.628q.318-.171.684-.35m17.379 6.307l2.957-4.323c-2.75.198-6.022.844-9.172 1.756c-2.25.65-4.75.551-7.065.124a25 25 0 0 1-1.737-.386l1.92 2.827c4.115 1.465 8.981 1.465 13.097.002M16.28 16.63c4.815 1.86 10.602 1.86 15.417-.002a29.3 29.3 0 0 1 4.988 7.143c1.352 2.758 2.088 5.515 1.968 7.891c-.116 2.293-1.018 4.252-3.078 5.708c-2.147 1.517-5.758 2.627-11.537 2.627c-5.785 0-9.413-1.091-11.58-2.591c-2.075-1.437-2.986-3.37-3.115-5.632c-.135-2.35.585-5.093 1.932-7.87c1.285-2.648 3.078-5.197 5.005-7.274m-1.15-6.714c.8.238 1.636.445 2.484.602c2.15.396 4.306.454 6.146-.079a54 54 0 0 1 6.53-1.471C28.45 8.414 26.298 8 24.038 8c-3.445 0-6.658.961-8.908 1.916" />
                        </g>
                    </svg>
                    Uang Saku
                    <svg class="ms-auto block w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="p-4 pt-2 opacity-70">
                        <ul class="pt-2 ps-2">
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M4.616 19q-.691 0-1.153-.462T3 17.384V15.27h1v2.115q0 .231.192.424t.423.192h14.77q.23 0 .423-.192t.192-.424V6.616q0-.231-.192-.424T19.385 6H4.615q-.23 0-.423.192T4 6.616V8.73H3V6.616q0-.691.463-1.153T4.615 5h14.77q.69 0 1.152.463T21 6.616v10.769q0 .69-.463 1.153T19.385 19zm7.269-3.577l-.708-.72l2.21-2.203H3v-1h10.387l-2.21-2.204l.708-.719L15.308 12z" />
                                    </svg>
                                    Input Baru
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m16 11.78l4.24-7.33l1.73 1l-5.23 9.05l-6.51-3.75L5.46 19H22v2H2V3h2v14.54L9.5 8z" />
                                    </svg>
                                    Report
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
                                        <path fill="currentColor" d="M32 26v-2h-2.101a5 5 0 0 0-.732-1.753l1.49-1.49l-1.414-1.414l-1.49 1.49A5 5 0 0 0 26 20.101V18h-2v2.101a5 5 0 0 0-1.753.732l-1.49-1.49l-1.414 1.414l1.49 1.49A5 5 0 0 0 20.101 24H18v2h2.101a5 5 0 0 0 .732 1.753l-1.49 1.49l1.414 1.414l1.49-1.49a5 5 0 0 0 1.753.732V32h2v-2.101a5 5 0 0 0 1.753-.732l1.49 1.49l1.414-1.414l-1.49-1.49A5 5 0 0 0 29.899 26Zm-7 2a3 3 0 1 1 3-3a3.003 3.003 0 0 1-3 3" />
                                        <circle cx="7" cy="20" r="2" fill="currentColor" />
                                        <path fill="currentColor" d="M14 20a4 4 0 1 1 4-4a4.01 4.01 0 0 1-4 4m0-6a2 2 0 1 0 2 2a2.006 2.006 0 0 0-2-2" />
                                        <circle cx="21" cy="12" r="2" fill="currentColor" />
                                        <path fill="currentColor" d="M13.02 28.272L3 22.426V9.574l11-6.416l11.496 6.706l1.008-1.728l-12-7a1 1 0 0 0-1.008 0l-12 7A1 1 0 0 0 1 9v14a1 1 0 0 0 .496.864L12.013 30Z" />
                                    </svg>
                                    Pengaturan
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div x-data="{ id: $id('accordion') }" :class="{ 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-slate-300': activeAccordion==id, 'text-slate-600 dark:text-slate-500 hover:text-slate-900 dark:hover:text-slate-300': activeAccordion!=id }" class="cursor-pointer group">
                <button @click="setActiveAccordion(id)" class="mb-2 hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 select-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20">
                        <path fill="currentColor"
                            d="M16.5 6.671c.116 0 .223.04.308.107l.067.063l.017.02a5 5 0 0 1-3.675 8.135L13 15H7a5.07 5.07 0 0 1-.303-.009l1.657 1.655a.5.5 0 0 1 .057.638l-.057.07a.5.5 0 0 1-.638.057l-.07-.057l-2.5-2.5a.5.5 0 0 1-.057-.638l.057-.07l2.5-2.5a.5.5 0 0 1 .765.638l-.057.07l-1.637 1.636l.14.008L7 14h6a4 4 0 0 0 3.11-6.516a.5.5 0 0 1 .39-.812m-4.854-4.025a.5.5 0 0 1 .638-.057l.07.057l2.5 2.5l.057.07a.5.5 0 0 1 0 .568l-.057.07l-2.5 2.5l-.07.057a.5.5 0 0 1-.568 0l-.07-.057l-.057-.07a.5.5 0 0 1 0-.568l.057-.07l1.637-1.636l-.14-.008L13 6H7a4 4 0 0 0-3.105 6.522a.5.5 0 1 1-.801.601a5 5 0 0 1 3.689-8.119L7 5h6c.102 0 .203.003.303.009l-1.657-1.655l-.057-.07a.5.5 0 0 1 .057-.638" />
                    </svg>
                    Maklumat
                    <svg class="ms-auto block w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="p-4 pt-2 opacity-70">
                        <ul class="pt-2 ps-2">
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M2 10q0-2.5 1.113-4.587T6.1 1.95l1.175 1.6q-1.5 1.1-2.387 2.775T4 10zm18 0q0-2-.888-3.675T16.726 3.55l1.175-1.6q1.875 1.375 2.988 3.463T22 10zM4 19v-2h2v-7q0-2.075 1.25-3.687T10.5 4.2v-.7q0-.625.438-1.062T12 2q.625 0 1.063.438T13.5 3.5v.7q2 .5 3.25 2.113T18 10v7h2v2zm8 3q-.825 0-1.412-.587T10 20h4q0 .825-.587 1.413T12 22m-4-5h8v-7q0-1.65-1.175-2.825T12 6q-1.65 0-2.825 1.175T8 10z" />
                                    </svg>
                                    Maklumat Internal
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M4 19v-2h2v-7q0-2.075 1.25-3.687T10.5 4.2V2h3v2.2q2 .5 3.25 2.113T18 10v7h2v2zm8 3q-.825 0-1.412-.587T10 20h4q0 .825-.587 1.413T12 22M2 10q0-2.5 1.113-4.587T6.1 1.95l1.175 1.6q-1.5 1.1-2.387 2.775T4 10zm18 0q0-2-.888-3.675T16.726 3.55l1.175-1.6q1.875 1.375 2.988 3.463T22 10z" />
                                    </svg>
                                    Maklumat Wali
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M11 11.825V21q0 .425.288.713T12 22q.425 0 .713-.288T13 21v-9.175l1.9 1.875q.275.275.688.288t.712-.288q.275-.275.275-.7t-.275-.7l-3.6-3.6q-.3-.3-.7-.3t-.7.3l-3.6 3.6q-.275.275-.288.688t.288.712q.275.275.7.275t.7-.275zM12 4Q8.65 4 6.325 6.325T4 12q0 .825.162 1.625t.488 1.55q.175.425.112.85t-.387.75q-.3.3-.737.138t-.663-.638Q2.5 15.25 2.25 14.188T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 1.125-.238 2.213t-.737 2.112q-.225.45-.662.6t-.738-.15q-.3-.3-.387-.725t.087-.825q.35-.775.513-1.587T20 12q0-3.35-2.325-5.675T12 4" />
                                    </svg>
                                    Usulan
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 256 256">
                                        <path fill="currentColor"
                                            d="M236.8 188.09L149.35 36.22a24.76 24.76 0 0 0-42.7 0L19.2 188.09a23.51 23.51 0 0 0 0 23.72A24.35 24.35 0 0 0 40.55 224h174.9a24.35 24.35 0 0 0 21.33-12.19a23.51 23.51 0 0 0 .02-23.72m-13.87 15.71a8.5 8.5 0 0 1-7.48 4.2H40.55a8.5 8.5 0 0 1-7.48-4.2a7.59 7.59 0 0 1 0-7.72l87.45-151.87a8.75 8.75 0 0 1 15 0l87.45 151.87a7.59 7.59 0 0 1-.04 7.72M120 144v-40a8 8 0 0 1 16 0v40a8 8 0 0 1-16 0m20 36a12 12 0 1 1-12-12a12 12 0 0 1 12 12" />
                                    </svg>
                                    Pengaduan
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div x-data="{ id: $id('accordion') }" :class="{ 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-slate-300': activeAccordion==id, 'text-slate-600 dark:text-slate-500 hover:text-slate-900 dark:hover:text-slate-300': activeAccordion!=id }" class="cursor-pointer group">
                <button @click="setActiveAccordion(id)" class="mb-2 hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 select-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 64 64">
                        <path fill="currentColor" d="M30.694 32.174c-1.168 1.088-10.529 10.17-10.529 10.17l2.499 2.464s8.317-7.676 9.566-8.837c.309-.286.832-.831 1.799-.831h28.365v-3.928H33.043c-.858.001-1.671.337-2.349.961zm16.805-21.351c3.326 0 5.141-2.303 5.141-5.141a5.14 5.14 0 1 0-5.141 5.141m-7.622 8.834h1.724l-2.526 9.075h16.85l-2.528-9.075h1.724l2.622 9.075h4.454l-3.58-12.042c-.473-1.663-2.576-4.609-6.217-4.609h-9.802c-3.639 0-5.74 2.946-6.217 4.609l-3.575 12.042h4.454zm-14.574 8.599l-4.525-8.437s-.266-.402-.759-.163c-.443.214-.243.713-.243.713l1.501 2.865l.934 1.785l-1.077-.485c-1.908-.86-2.96-1.227-3.382-1.416c-.075-.035-.445-.238-.621-.625c-.5-1.118-2.635-6.522-3.114-7.717c-.405-1.011-1.404-2.447-3.457-2.955c-2.337-.578-4.693.896-5.249 3.241L2.122 28.503c-.284 1.084-.772 4.016-.772 5.252l.021 26.254C1.387 62.224 2.986 64.01 5.199 64c2.21-.007 3.723-1.808 3.716-4.02L8.91 37.738l3.401-14.355c.397.971.889 2.154 1.05 2.438c.383.67.761 1.131 1.533 1.494c0 0 4.451 1.842 6.174 2.628a2.47 2.47 0 0 0 2.821-.782l.238-.493l.082.157s.507.893 1.256.934c.215-.681-.161-1.503-.161-1.503zm-6.88-22.618a5.141 5.141 0 1 1-10.283 0a5.142 5.142 0 0 1 10.283 0" />
                        <path fill="currentColor" d="m20.739 39.187l10.018-9.324l-1.302-1.397l-10.018 9.325z" />
                    </svg>
                    Pendaftaran

                    <svg class="ms-auto block w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="p-4 pt-2 opacity-70">
                        <ul class="pt-2 ps-2">
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="{{ route('newstudents.index') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M12.27 18v-1h2.942l3.569-5l-3.57-5H5v2.73H4V6h11.723L20 12l-4.238 6zM5.5 19.5v-3h-3v-1h3v-3h1v3h3v1h-3v3z" />
                                    </svg>
                                    Index
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M12.27 18v-1h2.942l3.569-5l-3.57-5H5v2.73H4V6h11.723L20 12l-4.238 6zM5.5 19.5v-3h-3v-1h3v-3h1v3h3v1h-3v3z" />
                                    </svg>
                                    Jalur (Quota)
                                </a>
                            </li>

                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                        <path fill="currentColor" d="M17.5 5a.5.5 0 0 1 0 1h-15a.5.5 0 0 1 0-1zm0 3a.5.5 0 0 1 0 1h-15a.5.5 0 0 1 0-1zm-7.243 3a5.5 5.5 0 0 0-.657 1H2.5a.5.5 0 0 1 0-1zM9 14.5q0 .252.022.5H2.5a.5.5 0 0 1 0-1h6.522a6 6 0 0 0-.022.5m5.5 4.5a4.5 4.5 0 1 0 0-9a4.5 4.5 0 0 0 0 9m1.146-2.646L14.5 15.207l-1.146 1.147a.5.5 0 0 1-.708-.708l1.147-1.146l-1.147-1.146a.5.5 0 0 1 .708-.708l1.146 1.147l1.146-1.147a.5.5 0 0 1 .708.708L15.207 14.5l1.147 1.146a.5.5 0 0 1-.708.708" />
                                    </svg>
                                    Penilaian
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <a class="flex items-center gap-x-3.5 py-1 px-2.5
                  text-sm text-slate-700 rounded-lg
                  dark:text-slate-300"
                href="#">
                DATA
            </a>
        </div>
        <hr class="py-3">
        <div x-data="{ activeAccordion: '',  setActiveAccordion(id) { this.activeAccordion = (this.activeAccordion == id) ? '' : id }}" class="relative w-full max-w-md mx-auto text-sm font-normal">
            <div x-data="{ id: $id('accordion') }" :class="{ 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-slate-300': activeAccordion==id, 'text-slate-600 dark:text-slate-500 hover:text-slate-900 dark:hover:text-slate-300': activeAccordion!=id }" class="cursor-pointer group">
                <button @click="setActiveAccordion(id)" class="mb-2 hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 select-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16">
                        <path fill="currentColor"
                            d="M2 4.5a.5.5 0 0 0-1 0V13a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-1 0V8h-1.756a4.49 4.49 0 0 0 .256-1.5c0-.706-.319-1.338-.731-1.865c-.415-.53-.956-.992-1.476-1.368a13.055 13.055 0 0 0-2.037-1.2L8.22 2.05l-.01-.004l-.003-.002h-.001a.502.502 0 0 0-.41 0l-.004.002l-.01.004l-.037.017a12.839 12.839 0 0 0-.606.307c-.388.21-.908.514-1.431.893c-.52.376-1.06.838-1.476 1.368C3.82 5.162 3.5 5.795 3.5 6.5c0 .526.09 1.03.256 1.5H2zM11.163 8H4.837A3.486 3.486 0 0 1 4.5 6.5c0-.399.181-.818.519-1.249c.335-.428.794-.827 1.274-1.174A12.056 12.056 0 0 1 8 3.054a12.056 12.056 0 0 1 1.707 1.023c.48.347.94.746 1.274 1.174c.338.43.519.85.519 1.249c0 .537-.12 1.045-.337 1.5M14 13h-4v-1a2 2 0 1 0-4 0v1H2V9h12zm-7-1a1 1 0 1 1 2 0v1H7zM2.25 2.75a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0m12.25.75a.75.75 0 1 0 0-1.5a.75.75 0 0 0 0 1.5" />
                    </svg>
                    Pondok
                    <svg class="ms-auto block w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="p-4 pt-2 opacity-70">
                        <ul class="pt-2 ps-2">
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                                    hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                                    dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="{{ 'rooms.index' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <g fill="none">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                d="M21.5 18.5v-11a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v11m-3 0v-8h-7a1 1 0 0 0-1 1v7" />
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.5 10.5h18v3h-19v-2a1 1 0 0 1 1-1" />
                                            <path fill="currentColor"
                                                d="M10.5 12.5v-1a1 1 0 0 1 1-1h9a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-9a1 1 0 0 1-1-1" />
                                        </g>
                                    </svg>
                                    Hujroh
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="{{ 'users.ustadz' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M7 11a4.5 4.5 0 1 1 0-9a4.5 4.5 0 0 1 0 9m10.5 4a4 4 0 1 1 0-8a4 4 0 0 1 0 8m0 1a4.5 4.5 0 0 1 4.5 4.5v.5h-9v-.5a4.5 4.5 0 0 1 4.5-4.5M7 12a5 5 0 0 1 5 5v4H2v-4a5 5 0 0 1 5-5" />
                                    </svg>
                                    PJ Hujroh
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="{{ 'students.index' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 20 20">
                                        <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                                            <path d="M5 9a2 2 0 1 0 0-4a2 2 0 0 0 0 4m0 1a3 3 0 1 0 0-6a3 3 0 0 0 0 6">
                                            </path>
                                            <path
                                                d="M3.854 8.896a.5.5 0 0 1 0 .708l-.338.337A3.47 3.47 0 0 0 2.5 12.394v1.856a.5.5 0 1 1-1 0v-1.856a4.47 4.47 0 0 1 1.309-3.16l.337-.338a.5.5 0 0 1 .708 0m11.792-.3a.5.5 0 0 0 0 .708l.338.337A3.469 3.469 0 0 1 17 12.094v2.156a.5.5 0 0 0 1 0v-2.156a4.47 4.47 0 0 0-1.309-3.16l-.337-.338a.5.5 0 0 0-.708 0">
                                            </path>
                                            <path
                                                d="M14 9a2 2 0 1 1 0-4a2 2 0 0 1 0 4m0 1a3 3 0 1 1 0-6a3 3 0 0 1 0 6m-4.5 3.25a2.5 2.5 0 0 0-2.5 2.5v1.3a.5.5 0 0 1-1 0v-1.3a3.5 3.5 0 0 1 7 0v1.3a.5.5 0 1 1-1 0v-1.3a2.5 2.5 0 0 0-2.5-2.5">
                                            </path>
                                            <path
                                                d="M9.5 11.75a2 2 0 1 0 0-4a2 2 0 0 0 0 4m0 1a3 3 0 1 0 0-6a3 3 0 0 0 0 6">
                                            </path>
                                        </g>
                                    </svg>
                                    Santri
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div x-data="{ id: $id('accordion') }" :class="{ 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-slate-300': activeAccordion==id, 'text-slate-600 dark:text-slate-500 hover:text-slate-900 dark:hover:text-slate-300': activeAccordion!=id }" class="cursor-pointer group">
                <button @click="setActiveAccordion(id)" class="mb-2 hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 select-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m12 .586l6 6V9h4v10h1v2H1v-2h1V9h4V6.586zM18 19h2v-8h-2zM6 11H4v8h2zm2-3.586V19h3v-7h2v7h3V7.414l-4-4z" />
                    </svg>
                    School
                    <svg class="ms-auto block w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="p-4 pt-2 opacity-70">


                        <ul class="pt-2 ps-2">
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="{{ 'levels.index' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 48 48">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M6 6h31v5h-2V8H8v23h21.387v2H6zm30 13a3 3 0 1 0 0-6a3 3 0 0 0 0 6m2.031 2.01c1.299 0 2.327.584 3 1.486c.629.845.895 1.89.955 2.855a7.626 7.626 0 0 1-.397 2.92c-.3.87-.807 1.77-1.589 2.387V40.5a1.5 1.5 0 0 1-2.98.247L35.73 33h-.298l-1.458 7.776A1.5 1.5 0 0 1 31 40.5V26.233a63.223 63.223 0 0 0-.592.919l-.078.123l-.02.032l-.005.009a1.5 1.5 0 0 1-1.274.707h-5a1.5 1.5 0 1 1 0-3h4.177c.243-.376.563-.864.899-1.354c.35-.511.736-1.052 1.08-1.476c.167-.207.354-.423.542-.6c.092-.087.22-.2.376-.3a1.72 1.72 0 0 1 .926-.282z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Kelas
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="{{ 'users.guru' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m12 18.692l-6-3.261v-4.846L3.077 9L12 4.154L20.923 9v6.385h-1V9.562L18 10.585v4.846zm0-5.992L18.83 9L12 5.3L5.17 9zm0 4.852l5-2.7v-3.717l-5 2.708l-5-2.708v3.717zm0-3.487" />
                                    </svg>
                                    Guru
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div x-data="{ id: $id('accordion') }" :class="{ 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-slate-300': activeAccordion==id, 'text-slate-600 dark:text-slate-500 hover:text-slate-900 dark:hover:text-slate-300': activeAccordion!=id }" class="cursor-pointer group">
                <button @click="setActiveAccordion(id)" class="mb-2 hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 select-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2 11h15M2 8h20M6.5 5c-.604 0-1.176.129-1.682.358c-.332.15-.498.224-.658.472S4 6.324 4 6.818V8h5V6.818c0-.494 0-.74-.16-.988s-.326-.323-.658-.472A4.1 4.1 0 0 0 6.5 5m0 9a4.06 4.06 0 0 0-1.92.475c-.106.057-.16.085-.25.166a1.2 1.2 0 0 0-.301.504C4 15.263 4 15.36 4 15.553c0 .416 0 .625.061.791a1 1 0 0 0 .595.595c.166.061.375.061.792.061h2.104c.417 0 .626 0 .792-.061a1 1 0 0 0 .595-.595C9 16.178 9 15.97 9 15.552c0-.192 0-.29-.029-.407a1.2 1.2 0 0 0-.302-.504a1 1 0 0 0-.249-.166A4.06 4.06 0 0 0 6.5 14M2 17h15M2 20h20m-5-8h5m-5 3h5m0-11v18M17 4v18M2 4v18" color="currentColor" />
                    </svg>
                    Sapras
                    <svg class="ms-auto block w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="p-4 pt-2 opacity-70">
                        <ul class="pt-2 ps-2">
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M2 10q0-2.5 1.113-4.587T6.1 1.95l1.175 1.6q-1.5 1.1-2.387 2.775T4 10zm18 0q0-2-.888-3.675T16.726 3.55l1.175-1.6q1.875 1.375 2.988 3.463T22 10zM4 19v-2h2v-7q0-2.075 1.25-3.687T10.5 4.2v-.7q0-.625.438-1.062T12 2q.625 0 1.063.438T13.5 3.5v.7q2 .5 3.25 2.113T18 10v7h2v2zm8 3q-.825 0-1.412-.587T10 20h4q0 .825-.587 1.413T12 22m-4-5h8v-7q0-1.65-1.175-2.825T12 6q-1.65 0-2.825 1.175T8 10z" />
                                    </svg>
                                    Laporan Baru
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M4 19v-2h2v-7q0-2.075 1.25-3.687T10.5 4.2V2h3v2.2q2 .5 3.25 2.113T18 10v7h2v2zm8 3q-.825 0-1.412-.587T10 20h4q0 .825-.587 1.413T12 22M2 10q0-2.5 1.113-4.587T6.1 1.95l1.175 1.6q-1.5 1.1-2.387 2.775T4 10zm18 0q0-2-.888-3.675T16.726 3.55l1.175-1.6q1.875 1.375 2.988 3.463T22 10z" />
                                    </svg>
                                    Report
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 mb-1 py-2 px-2.5 text-sm text-slate-700 rounded-lg
                             hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300
                             dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M11 11.825V21q0 .425.288.713T12 22q.425 0 .713-.288T13 21v-9.175l1.9 1.875q.275.275.688.288t.712-.288q.275-.275.275-.7t-.275-.7l-3.6-3.6q-.3-.3-.7-.3t-.7.3l-3.6 3.6q-.275.275-.288.688t.288.712q.275.275.7.275t.7-.275zM12 4Q8.65 4 6.325 6.325T4 12q0 .825.162 1.625t.488 1.55q.175.425.112.85t-.387.75q-.3.3-.737.138t-.663-.638Q2.5 15.25 2.25 14.188T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 1.125-.238 2.213t-.737 2.112q-.225.45-.662.6t-.738-.15q-.3-.3-.387-.725t.087-.825q.35-.775.513-1.587T20 12q0-3.35-2.325-5.675T12 4" />
                                    </svg>
                                    Pengaturan
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<!--         
        <ul class="space-y-1.5">
            <li>
                <a class="flex items-center gap-x-3.5 py-1 px-2.5 text-sm text-slate-700 rounded-lg dark:text-white"
                    href="#">
                    Pengaturan
                </a>
            </li>
            <hr>
            <li class="hs-accordion" id="users-accordion">
                <button type="button"
                    class="mb-1 hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-slate-400 dark:hover:text-slate-300 dark:hs-accordion-active:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M13.07 10.41a5 5 0 0 0 0-5.82A3.39 3.39 0 0 1 15 4a3.5 3.5 0 0 1 0 7a3.39 3.39 0 0 1-1.93-.59M5.5 7.5A3.5 3.5 0 1 1 9 11a3.5 3.5 0 0 1-3.5-3.5m2 0A1.5 1.5 0 1 0 9 6a1.5 1.5 0 0 0-1.5 1.5M16 17v2H2v-2s0-4 7-4s7 4 7 4m-2 0c-.14-.78-1.33-2-5-2s-4.93 1.31-5 2m11.95-4A5.32 5.32 0 0 1 18 17v2h4v-2s0-3.63-6.06-4Z" />
                    </svg>
                    Config
                    <svg class="hs-accordion-active:block ms-auto hidden w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>

                    <svg class="hs-accordion-active:hidden ms-auto block w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div id="users-accordion-child"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                    <ul class="pt-2 ps-2">
                        <li>
                            <a class="mb-1 flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                href="{{ route('periods.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 256 256">
                                    <path fill="currentColor"
                                        d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12" />
                                </svg>
                                Periode Pendaftaran
                            </a>
                        </li>
                        <li>
                            <a class="mb-1 flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                href="{{ route('quotas.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 256 256">
                                    <path fill="currentColor"
                                        d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12" />
                                </svg>
                                Quota Pendaftran
                            </a>
                        </li>
                        <li>
                            <a class="mb-1 flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                href="{{ route('wa.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 256 256">
                                    <path fill="currentColor"
                                        d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12" />
                                </svg>
                                Whastapp
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="hs-accordion" id="users-accordion">
                <button type="button"
                    class="mb-1 hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-slate-400 dark:hover:text-slate-300 dark:hs-accordion-active:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M13.07 10.41a5 5 0 0 0 0-5.82A3.39 3.39 0 0 1 15 4a3.5 3.5 0 0 1 0 7a3.39 3.39 0 0 1-1.93-.59M5.5 7.5A3.5 3.5 0 1 1 9 11a3.5 3.5 0 0 1-3.5-3.5m2 0A1.5 1.5 0 1 0 9 6a1.5 1.5 0 0 0-1.5 1.5M16 17v2H2v-2s0-4 7-4s7 4 7 4m-2 0c-.14-.78-1.33-2-5-2s-4.93 1.31-5 2m11.95-4A5.32 5.32 0 0 1 18 17v2h4v-2s0-3.63-6.06-4Z" />
                    </svg>
                    Users
                    <svg class="hs-accordion-active:block ms-auto hidden w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>

                    <svg class="hs-accordion-active:hidden ms-auto block w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div id="users-accordion-child"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                    <ul class="pt-2 ps-2">
                        <li>
                            <a class="mb-1 flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                href="{{ route('users.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 256 256">
                                    <path fill="currentColor"
                                        d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12" />
                                </svg>
                                list
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="hs-accordion" id="log-accordion">
                <button type="button"
                    class="mb-1 hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-slate-400 dark:hover:text-slate-300 dark:hs-accordion-active:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <g fill="currentColor">
                            <path d="M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6" />
                            <path fill-rule="evenodd"
                                d="M12 3a1 1 0 0 1 1 1v1.07A7.004 7.004 0 0 1 18.93 11H20a1 1 0 1 1 0 2h-1.07A7.004 7.004 0 0 1 13 18.93V20a1 1 0 1 1-2 0v-1.07A7.004 7.004 0 0 1 5.07 13H4a1 1 0 1 1 0-2h1.07A7.005 7.005 0 0 1 11 5.07V4a1 1 0 0 1 1-1m-5 9a5 5 0 1 1 10 0a5 5 0 0 1-10 0"
                                clip-rule="evenodd" />
                        </g>
                    </svg>
                    Log
                    <svg class="hs-accordion-active:block ms-auto hidden w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>

                    <svg class="hs-accordion-active:hidden ms-auto block w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div id="log-accordion-child"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                    <ul class="pt-2 ps-2">
                        <li>
                            <a class="mb-1 flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                href="{{ route('log.change') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 256 256">
                                    <path fill="currentColor"
                                        d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12" />
                                </svg>
                                Data
                            </a>
                        </li>
                        <li>
                            <a class="mb-1 flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                href="{{ route('log.activity') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 256 256">
                                    <path fill="currentColor"
                                        d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12" />
                                </svg>
                                Aktivitas
                            </a>
                        </li>
                        <li>
                            <a class="mb-1 flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 256 256">
                                    <path fill="currentColor"
                                        d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12" />
                                </svg>
                                Visitor
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="hs-accordion" id="dev-accordion">
                <button type="button"
                    class="mb-1 hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-slate-400 dark:hover:text-slate-300 dark:hs-accordion-active:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M13.07 10.41a5 5 0 0 0 0-5.82A3.39 3.39 0 0 1 15 4a3.5 3.5 0 0 1 0 7a3.39 3.39 0 0 1-1.93-.59M5.5 7.5A3.5 3.5 0 1 1 9 11a3.5 3.5 0 0 1-3.5-3.5m2 0A1.5 1.5 0 1 0 9 6a1.5 1.5 0 0 0-1.5 1.5M16 17v2H2v-2s0-4 7-4s7 4 7 4m-2 0c-.14-.78-1.33-2-5-2s-4.93 1.31-5 2m11.95-4A5.32 5.32 0 0 1 18 17v2h4v-2s0-3.63-6.06-4Z" />
                    </svg>
                    Developer
                    <svg class="hs-accordion-active:block ms-auto hidden w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>

                    <svg class="hs-accordion-active:hidden ms-auto block w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div id="users-accordion-child"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                    <ul class="pt-2 ps-2">
                        <li>
                            <a class="mb-1 flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                href="{{ url('/dashboard/changelog') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 256 256">
                                    <path fill="currentColor"
                                        d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12" />
                                </svg>
                                Changelog
                            </a>
                        </li>

                        <li>
                            <a class="mb-1 flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                href="{{ url('/dashboard/todo') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 256 256">
                                    <path fill="currentColor"
                                        d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12" />
                                </svg>
                                To do
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul> -->
    </nav>
</div>