<aside :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
  class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-slate-100 dark:bg-slate-900 duration-300 ease-linear lg:static lg:translate-x-0"
  @click.outside="sidebarToggle = false">
  <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
    <a href="/dashboard">SIAKAD</a>
    <button class="block lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
      <svg class="fill-current" width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z" fill="" />
      </svg>
    </button>
  </div>
  <nav class="no-scrollbar flex flex-col overflow-y-auto mt-5 px-4 py-4 lg:mt-9 lg:px-6" x-data="{ selected: $persist('Website') }">
    <h3 class="mb-4 ml-4 text-sm">APPs</h3>
    <ul class="mb-6 flex flex-col gap-1.5">
      @foreach ([
      ['title' => 'Website', 'route' => 'posts.index', 'icon' => 'website-icon.svg', 'submenu' => [
      ['title' => 'Index Artikel', 'route' => 'posts.index'],
      ['title' => 'Kategori', 'route' => 'categories.index'],
      ['title' => 'Pengaturan', 'route' => 'dashboard']
      ]],
      ['title' => 'Pendaftaran', 'route' => 'registration.index', 'icon' => 'registration-icon.svg', 'submenu' => [
      ['title' => 'Index', 'route' => 'dashboard'],
      ['title' => 'Penilaian', 'route' => 'dashboard'],
      ['title' => 'Pengaturan', 'route' => 'dashboard']
      ]]
      ] as $item)
      <li>
        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
          href="#" @click.prevent="selected = (selected === '{{ $item['title'] }}' ? '' : '{{ $item['title'] }}')">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
              @if ($item['icon'] === 'website-icon.svg')
              <path d="M19.5 7A9 9 0 0 0 12 3a8.99 8.99 0 0 0-7.484 4" />
              <path d="M11.5 3a17 17 0 0 0-1.826 4M12.5 3a17 17 0 0 1 1.828 4M19.5 17a9 9 0 0 1-7.5 4a8.99 8.99 0 0 1-7.484-4" />
              <path d="M11.5 21a17 17 0 0 1-1.826-4m2.826 4a17 17 0 0 0 1.828-4M2 10l1 4l1.5-4L6 14l1-4m10 0l1 4l1.5-4l1.5 4l1-4M9.5 10l1 4l1.5-4l1.5 4l1-4" />
              @elseif ($item['icon'] === 'registration-icon.svg')
              <path d="M12 2C10.34 2 9 3.34 9 5c0 1.66 1.34 3 3 3s3-1.34 3-3c0-1.66-1.34-3-3-3zm-6 8c-1.1 0-2 .9-2 2v5c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-5c0-1.1-.9-2-2-2H6zm0 2h12v5H6v-5z" />
              @endif
            </g>
          </svg>
          {{ $item['title'] }}
          <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current" :class="{ 'rotate-180': (selected === '{{ $item['title'] }}') }" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z" fill="" />
          </svg>
        </a>
        <div class="translate transform overflow-hidden" :class="(selected === '{{ $item['title'] }}') ? 'block' :'hidden'">
          <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
            @foreach ($item['submenu'] as $submenu)
            <li>
              <a href="{{ route($submenu['route']) }}" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">
                {{ $submenu['title'] }}
              </a>
            </li>
            @endforeach
          </ul>
        </div>
      </li>
      @endforeach
    </ul>
  </nav>
  <div class="mx-auto mb-10 w-full max-w-60 rounded-sm border border-strokedark bg-boxdark px-4 py-6 text-center shadow-default">
    <h3 class="mb-1 font-semibold">SIAKAD</h3>
    <p class="mb-4 text-xs">v1.0.0</p>
    <a href="" target="_blank" rel="nofollow" class="flex items-center justify-center rounded-md hover:bg-opacity-95">
      By: Santrimu
    </a>
  </div>
</aside>