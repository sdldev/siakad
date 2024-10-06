<aside :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
  class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-slate-100 dark:bg-slate-900 duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0"
  @click.outside="sidebarToggle = false">
  <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
    <a href="/dashboard">
      SIAKAD
    </a>
    <button class="block lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
      <svg class="fill-current" width="20" height="18" viewBox="0 0 20 18" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
          d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
          fill="" />
      </svg>
    </button>
  </div>
  <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
    <nav class="mt-5 px-4 py-4 lg:mt-9 lg:px-6" x-data="{selected: $persist('Website')}">
      <div>
        <h3 class="mb-4 ml-4 text-sm ">APPs</h3>

        <ul class="mb-6 flex flex-col gap-1.5">
          <li>
            <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="#" @click.prevent="selected = (selected === 'Website' ? '':'Website')">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                  <path d="M3.338 17A10 10 0 0 0 12 22a10 10 0 0 0 8.662-5M3.338 7A10 10 0 0 1 12 2a10 10 0 0 1 8.662 5" />
                </g>
              </svg>
              Website

              <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                :class="{ 'rotate-180': (selected === 'Website') }" width="20" height="20" viewBox="0 0 20 20"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                  fill="" />
              </svg>
            </a>
            <div class="translate transform overflow-hidden"
              :class="(selected === 'Website') ? 'block' :'hidden'">
              <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                <li><a href="{{ route('posts.index') }}" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Index Artikel</a></li>
                <li><a href="{{ route('categories.index') }}" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Kategori</a></li>
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Pengaturan</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="#" @click.prevent="selected = (selected === 'Pendaftaran' ? '':'Pendaftaran')">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 64 64">
                <path fill="currentColor" d="M30.694 32.174c-1.168 1.088-10.529 10.17-10.529 10.17l2.499 2.464s8.317-7.676 9.566-8.837c.309-.286.832-.831 1.799-.831h28.365v-3.928H33.043c-.858.001-1.671.337-2.349.961zm16.805-21.351c3.326 0 5.141-2.303 5.141-5.141a5.14 5.14 0 1 0-5.141 5.141m-7.622 8.834h1.724l-2.526 9.075h16.85l-2.528-9.075h1.724l2.622 9.075h4.454l-3.58-12.042c-.473-1.663-2.576-4.609-6.217-4.609h-9.802c-3.639 0-5.74 2.946-6.217 4.609l-3.575 12.042h4.454zm-14.574 8.599l-4.525-8.437s-.266-.402-.759-.163c-.443.214-.243.713-.243.713l1.501 2.865l.934 1.785l-1.077-.485c-1.908-.86-2.96-1.227-3.382-1.416c-.075-.035-.445-.238-.621-.625c-.5-1.118-2.635-6.522-3.114-7.717c-.405-1.011-1.404-2.447-3.457-2.955c-2.337-.578-4.693.896-5.249 3.241L2.122 28.503c-.284 1.084-.772 4.016-.772 5.252l.021 26.254C1.387 62.224 2.986 64.01 5.199 64c2.21-.007 3.723-1.808 3.716-4.02L8.91 37.738l3.401-14.355c.397.971.889 2.154 1.05 2.438c.383.67.761 1.131 1.533 1.494c0 0 4.451 1.842 6.174 2.628a2.47 2.47 0 0 0 2.821-.782l.238-.493l.082.157s.507.893 1.256.934c.215-.681-.161-1.503-.161-1.503zm-6.88-22.618a5.141 5.141 0 1 1-10.283 0a5.142 5.142 0 0 1 10.283 0"></path>
                <path fill="currentColor" d="m20.739 39.187l10.018-9.324l-1.302-1.397l-10.018 9.325z"></path>
              </svg>
              Pendaftaran
              <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                :class="{ 'rotate-180': (selected === 'Pendaftaran') }" width="20" height="20" viewBox="0 0 20 20"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                  fill="" />
              </svg>
            </a>
            <div class="translate transform overflow-hidden"
              :class="(selected === 'Pendaftaran') ? 'block' :'hidden'">
              <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                <li><a href="{{ route('posts.index') }}" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Index</a></li>
                <li><a href="{{ route('categories.index') }}" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Penilaian</a></li>
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Pengaturan</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div
      class="mx-auto mb-10 w-full max-w-60 rounded-sm border border-strokedark bg-boxdark px-4 py-6 text-center shadow-default">
      <h3 class="mb-1 font-semibold ">SIAKAD</h3>
      <p class="mb-4 text-xs">v1.0.0</p>
      <a href="" target="_blank" rel="nofollow"
        class="flex items-center justify-center rounded-md  hover:bg-opacity-95">
        By: Santrimu
      </a>
    </div>
  </div>
</aside>