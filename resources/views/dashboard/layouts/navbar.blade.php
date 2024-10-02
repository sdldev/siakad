<nav class="flex basis-full items-center w-full mx-auto px-4 sm:px-6 md:px-8" aria-label="Global">
    <div class="me-5 lg:me-0 lg:hidden">
        <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Santrim-Mu">SantriMU</a>
    </div>
    <div class="w-full flex items-center justify-end ms-auto sm:justify-between sm:gap-x-3 sm:order-3">
        <div class="sm:hidden">
        </div>
        <div class="hidden sm:block">
        </div>

        <div class="flex flex-row items-center justify-end gap-2">
            <nav x-data="{navigationMenuOpen: false,
                            navigationMenu: '',
                            navigationMenuCloseDelay: 200,
                            navigationMenuCloseTimeout: null,
                            navigationMenuLeave() {
                                let that = this;
                                this.navigationMenuCloseTimeout = setTimeout(() => {
                                    that.navigationMenuClose();
                                }, this.navigationMenuCloseDelay);
                            },
                            navigationMenuReposition(navElement) {
                                this.navigationMenuClearCloseTimeout();
                                this.$refs.navigationDropdown.style.left = navElement.offsetLeft + 'px';
                                this.$refs.navigationDropdown.style.marginLeft = (navElement.offsetWidth/2) + 'px';
                            },
                            navigationMenuClearCloseTimeout(){
                                clearTimeout(this.navigationMenuCloseTimeout);
                            },
                            navigationMenuClose(){
                                this.navigationMenuOpen = false;
                                this.navigationMenu = '';
                            }
                        }"
                class="relative z-10 w-auto">
                <div class="relative">
                    <ul class="flex items-center justify-end flex-1 p-1 space-x-1 list-none text-neutral-700 group border-neutral-200/80">
                        <li>
                            <button
                                :class="{ 'bg-neutral-100' : navigationMenu=='getting-started', 'hover:bg-neutral-100' : navigationMenu!='getting-started' }" @mouseover="navigationMenuOpen=true; navigationMenuReposition($el); navigationMenu='getting-started'" @mouseleave="navigationMenuLeave()" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors rounded-md hover:text-neutral-900 focus:outline-none disabled:opacity-50 disabled:pointer-events-none group w-max">
                                <span>User</span>
                                <svg :class="{ '-rotate-180' : navigationMenuOpen==true && navigationMenu == 'getting-started' }" class="relative top-[1px] ml-1 h-3 w-3 ease-out duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
                <div x-ref="navigationDropdown" x-show="navigationMenuOpen"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90"
                    @mouseover="navigationMenuClearCloseTimeout()" @mouseleave="navigationMenuLeave()"
                    class="absolute top-0 pt-3 duration-200 ease-out -translate-x-1/2 translate-y-11" x-cloak>

                    <div class="flex justify-center w-auto h-auto overflow-hidden bg-white border rounded-md shadow-sm border-neutral-200/70">

                        <div x-show="navigationMenu == 'getting-started'" class="flex items-stretch justify-center w-full max-w-2xl p-6 gap-x-3">
                            <div class="flex-shrink-0 w-48 rounded pt-28 pb-7 bg-gradient-to-br from-neutral-800 to-black">
                                <div class="relative px-7 space-y-1.5 text-white">
                                    <img class="inline-block h-[2.375rem] w-[2.375rem] rounded-full ring-2 ring-white dark:ring-gray-800" src="/images/avatar.webp" alt="Image Description">
                                    <span class="block font-bold">{{ Auth::user()->name }}</span>
                                    <span class="block text-sm opacity-60">{{ Auth::user()->role_id }}</span>
                                </div>
                            </div>
                            <div class="w-72">
                                <a href="#_" @click="navigationMenuClose()" class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
                                    <span class="block mb-1 font-medium text-black">Profile</span>
                                </a>
                                <a href="#_" @click="navigationMenuClose()" class="block px-3.5 py-3 text-sm rounded hover:bg-neutral-100">
                                    <span class="block mb-1 font-medium text-black">Chenge Password</span>
                                </a>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-gray-800
                                    hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400
                                    dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20">
                                        <path fill="currentColor"
                                            d="M10.24 0c3.145 0 6.057 1.395 7.988 3.744a.644.644 0 0 1-.103.92a.68.68 0 0 1-.942-.1a8.961 8.961 0 0 0-6.944-3.256c-4.915 0-8.9 3.892-8.9 8.692c0 4.8 3.985 8.692 8.9 8.692a8.962 8.962 0 0 0 7.016-3.343a.68.68 0 0 1 .94-.113a.644.644 0 0 1 .115.918C16.382 18.564 13.431 20 10.24 20C4.583 20 0 15.523 0 10S4.584 0 10.24 0m6.858 7.16l2.706 2.707c.262.261.267.68.012.936l-2.644 2.643a.662.662 0 0 1-.936-.01a.662.662 0 0 1-.011-.937l1.547-1.547H7.462a.662.662 0 0 1-.67-.654c0-.362.3-.655.67-.655h10.269l-1.558-1.558a.662.662 0 0 1-.011-.936a.662.662 0 0 1 .936.011" />
                                    </svg>
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</nav>