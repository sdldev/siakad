<div
    class="xl:hidden fixed bottom-0 left-0 z-50 w-full h-16 bg-gradient-to-t from-primary-900 via-primary-900 to-primary-600">
    <div class="grid h-full max-w-lg grid-cols-4 mx-auto font-medium">
        <a href="/" type="button"
            class="inline-flex flex-col items-center justify-center px-5
             hover:bg-primary-200 dark:hover:bg-primary-800 group">
            <svg class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                <polyline points="9 22 9 12 15 12 15 22" />
            </svg>
            <span
                class="text-sm text-primary-100 dark:text-primary-400
                 group-hover:text-primary-900 dark:group-hover:text-primary-900">Home</span>
        </a>

        <div
            class="inline-flex flex-col items-center justify-center px-5
            hover:bg-primary-200 dark:hover:bg-primary-800 group hs-dropdown relative [--placement:top-left]">
            <div id="hs-dropdown-transform-style" type="button"
                class="hs-dropdown-toggle  inline-flex flex-col items-center justify-center px-5
                hover:bg-primary-200 dark:hover:bg-primary-800 group">

                <svg class="h-6 w-6 text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <path d="M3.5 5.5l1.5 1.5l2.5 -2.5" />
                    <path d="M3.5 11.5l1.5 1.5l2.5 -2.5" />
                    <path d="M3.5 17.5l1.5 1.5l2.5 -2.5" />
                    <line x1="11" y1="6" x2="20" y2="6" />
                    <line x1="11" y1="12" x2="20" y2="12" />
                    <line x1="11" y1="18" x2="20" y2="18" />
                </svg>
                <span
                    class="text-sm text-primary-100 dark:text-primary-400
                        group-hover:text-primary-900 dark:group-hover:text-primary-900">Menu</span>
            </div>

            <div class="hs-dropdown-menu hs-overlay w-72 transition-[opacity,margin]
                        duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 bg-white
                        shadow-md rounded-lg p-2 dark:bg-primary-800 dark:border dark:border-primary-700 dark:divide-primary-700"
                aria-labelledby="hs-dropup">
                <a class="flex items-center gap-x-3.5 py-4 px-4 rounded-lg text-sm text-primary-800
                hover:bg-primary-100 focus:outline-none focus:bg-primary-100 dark:text-primary-300
                dark:hover:bg-primary-700 dark:hover:text-primary-300 dark:focus:bg-primary-700"
                    href="/uang-saku">
                    Uang Saku
                </a>

                <a class="flex items-center gap-x-3.5 py-4 px-4 rounded-lg text-sm text-primary-800
                hover:bg-primary-100 focus:outline-none focus:bg-primary-100 dark:text-primary-300
                dark:hover:bg-primary-700 dark:hover:text-primary-300 dark:focus:bg-primary-700"
                    href="/uang-saku">
                    Uang Saku
                </a>

            </div>
        </div>

        {{--
        <div
            class="inline-flex flex-col items-center justify-center px-5
                hover:bg-primary-200 dark:hover:bg-primary-800 group ">
            <!-- Trigger for Modal -->
            <div type="button"
                class="inline-flex flex-col items-center justify-center px-5
            hover:bg-primary-200 dark:hover:bg-primary-800 group">
                <svg class="h-6 w-6 text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <path d="M3.5 5.5l1.5 1.5l2.5 -2.5" />
                    <path d="M3.5 11.5l1.5 1.5l2.5 -2.5" />
                    <path d="M3.5 17.5l1.5 1.5l2.5 -2.5" />
                    <line x1="11" y1="6" x2="20" y2="6" />
                    <line x1="11" y1="12" x2="20" y2="12" />
                    <line x1="11" y1="18" x2="20" y2="18" />
                </svg>
                <span
                    class="text-sm text-primary-100 dark:text-primary-400
             group-hover:text-primary-900 dark:group-hover:text-primary-900">Menu</span>
            </div>
            @include('frontend.modal.navbuttommodal')
        </div> --}}


        <a href="/profil" type="button"
            class="inline-flex flex-col items-center justify-center px-5
             hover:bg-primary-200 dark:hover:bg-primary-800 group">
            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <span
                class="text-sm text-primary-100 dark:text-primary-400
                 group-hover:text-primary-900 dark:group-hover:text-primary-900">Profil</span>
        </a>
        <a href="https://api.whatsapp.com/send/?phone=6285269838181&text=Assalamualaikum%20kak%2C%20ingin%20saya%20ingin%20berdiskusi"
            type="button"
            class="inline-flex flex-col items-center justify-center px-5
             hover:bg-primary-200 dark:hover:bg-primary-800 group">
            <svg class="h-6 w-6 text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" />
                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5
                2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                <line x1="15" y1="9" x2="20" y2="4" />
                <polyline points="15 5 15 9 19 9" />
            </svg>
            <span
                class="text-sm text-primary-100 dark:text-primary-400
                 group-hover:text-primary-900 dark:group-hover:text-primary-900">Kontak</span>
        </a>
    </div>
</div>
