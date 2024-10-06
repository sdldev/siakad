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
              href="#" @click.prevent="selected = (selected === 'Website' ? '':'Website')"
              :class="{ '': (selected === 'Website') || (page === 'ecommerce' || page === 'analytics' || page === 'stocks') }">
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
              href="#" @click.prevent="selected = (selected === 'Tahfidz' ? '':'Tahfidz')"
              :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Tahfidz') || (page === 'list' || page === 'kanban') }">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M11.015 33.445v8.2L42.5 26.742V6.355L24 15.657L5.5 6.355v20.387l31.485 14.903v-8.2m-12.92-2.947V19.373" />
              </svg>

              Tahfidz

              <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                :class="{ 'rotate-180': (selected === 'Tahfidz') }" width="20" height="20" viewBox="0 0 20 20"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                  fill="" />
              </svg>
            </a>
            <div class="translate transform overflow-hidden" :class="(selected === 'Tahfidz') ? 'block' :'hidden'">
              <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Input Baru</a></li>
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Index</a></li>
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Pengaturan</a></li>
              </ul>
            </div>
          </li>

          <li>
            <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="#" @click.prevent="selected = (selected === 'Uang Saku' ? '':'Uang Saku')"
              :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Uang Saku') || (page === 'formElements' || page === 'formLayout' || page === 'proFormElements' || page === 'proFormLayout') }">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48">
                <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                  <path d="M28.772 24.667A4 4 0 0 0 25 22v-1h-2v1a4 4 0 1 0 0 8v4c-.87 0-1.611-.555-1.887-1.333a1 1 0 1 0-1.885.666A4 4 0 0 0 23 36v1h2v-1a4 4 0 0 0 0-8v-4a2 2 0 0 1 1.886 1.333a1 1 0 1 0 1.886-.666M23 24a2 2 0 1 0 0 4zm2 10a2 2 0 1 0 0-4z" />
                  <path d="M13.153 8.621C15.607 7.42 19.633 6 24.039 6c4.314 0 8.234 1.361 10.675 2.546l.138.067c.736.364 1.33.708 1.748.987L32.906 15C41.422 23.706 48 41.997 24.039 41.997S6.479 24.038 15.069 15l-3.67-5.4c.283-.185.642-.4 1.07-.628q.318-.171.684-.35m17.379 6.307l2.957-4.323c-2.75.198-6.022.844-9.172 1.756c-2.25.65-4.75.551-7.065.124a25 25 0 0 1-1.737-.386l1.92 2.827c4.115 1.465 8.981 1.465 13.097.002M16.28 16.63c4.815 1.86 10.602 1.86 15.417-.002a29.3 29.3 0 0 1 4.988 7.143c1.352 2.758 2.088 5.515 1.968 7.891c-.116 2.293-1.018 4.252-3.078 5.708c-2.147 1.517-5.758 2.627-11.537 2.627c-5.785 0-9.413-1.091-11.58-2.591c-2.075-1.437-2.986-3.37-3.115-5.632c-.135-2.35.585-5.093 1.932-7.87c1.285-2.648 3.078-5.197 5.005-7.274m-1.15-6.714c.8.238 1.636.445 2.484.602c2.15.396 4.306.454 6.146-.079a54 54 0 0 1 6.53-1.471C28.45 8.414 26.298 8 24.038 8c-3.445 0-6.658.961-8.908 1.916" />
                </g>
              </svg>
              Uang Saku
              <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                :class="{ 'rotate-180': (selected === 'Uang Saku') }" width="20" height="20" viewBox="0 0 20 20"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                  fill="" />
              </svg>
            </a>
            <div class="translate transform overflow-hidden" :class="(selected === 'Uang Saku') ? 'block' :'hidden'">
              <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Input Baru</a></li>
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Index</a></li>
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Pengaturan</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="#" @click.prevent="selected = (selected === 'Permasalahan Santri' ? '':'Permasalahan Santri')"
              :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Permasalahan Santri') || (page === 'Permasalahan Santri' || page === 'proPermasalahan Santri') }">
              <svg xmlns="http://www.w3.org/2000/svg" width="14.12" height="20" viewBox="0 0 1152 1632">
                <path fill="currentColor" d="M1124 388L832 680v824q0 46-33 79t-79 33t-79-33t-33-79v-384h-64v384q0 46-33 79t-79 33t-79-33t-33-79V680L28 388Q0 360 0 320t28-68q29-28 68.5-28t67.5 28l228 228h368l228-228q28-28 68-28t68 28q28 29 28 68.5t-28 67.5M800 224q0 93-65.5 158.5T576 448t-158.5-65.5T352 224t65.5-158.5T576 0t158.5 65.5T800 224" />
              </svg>

              Permasalahan Santri

              <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                :class="{ 'rotate-180': (selected === 'Permasalahan Santri') }" width="20" height="20" viewBox="0 0 20 20"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                  fill="" />
              </svg>
            </a>
            <div class="translate transform overflow-hidden" :class="(selected === 'Permasalahan Santri') ? 'block' :'hidden'">
              <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Input Baru</a></li>
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Index</a></li>
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Pengaturan</a></li>
              </ul>
            </div>
          </li>

          <li>
            <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="#" @click.prevent="selected = (selected === 'Pendaftaran' ? '':'Pendaftaran')"
              :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Pendaftaran') || (page === 'settings' || page === 'fileManager' || page === 'dataPermasalahan Santri' || page === 'pricingPermasalahan Santri' || page === 'errorPage' || page === 'mailSuccess' || page === 'faq' || page === 'team' || page === 'termsCondition') }">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 64 64">
                <path fill="currentColor" d="M30.694 32.174c-1.168 1.088-10.529 10.17-10.529 10.17l2.499 2.464s8.317-7.676 9.566-8.837c.309-.286.832-.831 1.799-.831h28.365v-3.928H33.043c-.858.001-1.671.337-2.349.961zm16.805-21.351c3.326 0 5.141-2.303 5.141-5.141a5.14 5.14 0 1 0-5.141 5.141m-7.622 8.834h1.724l-2.526 9.075h16.85l-2.528-9.075h1.724l2.622 9.075h4.454l-3.58-12.042c-.473-1.663-2.576-4.609-6.217-4.609h-9.802c-3.639 0-5.74 2.946-6.217 4.609l-3.575 12.042h4.454zm-14.574 8.599l-4.525-8.437s-.266-.402-.759-.163c-.443.214-.243.713-.243.713l1.501 2.865l.934 1.785l-1.077-.485c-1.908-.86-2.96-1.227-3.382-1.416c-.075-.035-.445-.238-.621-.625c-.5-1.118-2.635-6.522-3.114-7.717c-.405-1.011-1.404-2.447-3.457-2.955c-2.337-.578-4.693.896-5.249 3.241L2.122 28.503c-.284 1.084-.772 4.016-.772 5.252l.021 26.254C1.387 62.224 2.986 64.01 5.199 64c2.21-.007 3.723-1.808 3.716-4.02L8.91 37.738l3.401-14.355c.397.971.889 2.154 1.05 2.438c.383.67.761 1.131 1.533 1.494c0 0 4.451 1.842 6.174 2.628a2.47 2.47 0 0 0 2.821-.782l.238-.493l.082.157s.507.893 1.256.934c.215-.681-.161-1.503-.161-1.503zm-6.88-22.618a5.141 5.141 0 1 1-10.283 0a5.142 5.142 0 0 1 10.283 0" />
                <path fill="currentColor" d="m20.739 39.187l10.018-9.324l-1.302-1.397l-10.018 9.325z" />
              </svg>

              Pendaftaran

              <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                :class="{ 'rotate-180': (selected === 'Tahfidz') }" width="20" height="20" viewBox="0 0 20 20"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                  fill="" />
              </svg>
            </a>
            <div class="translate transform overflow-hidden" :class="(selected === 'Pendaftaran') ? 'block' :'hidden'">
              <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Index</a></li>
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Penilaian</a></li>
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Pengaturan</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <div>
        <h3 class="mb-4 ml-4 text-sm ">DATA</h3>
        <ul class="mb-6 flex flex-col gap-1.5">
          <li>
            <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="#" @click.prevent="selected = (selected === 'Charts' ? '':'Charts')"
              :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Charts') || (page === 'basicChart' || page === 'advancedChart') }">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16">
                        <path fill="currentColor"
                            d="M2 4.5a.5.5 0 0 0-1 0V13a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-1 0V8h-1.756a4.49 4.49 0 0 0 .256-1.5c0-.706-.319-1.338-.731-1.865c-.415-.53-.956-.992-1.476-1.368a13.055 13.055 0 0 0-2.037-1.2L8.22 2.05l-.01-.004l-.003-.002h-.001a.502.502 0 0 0-.41 0l-.004.002l-.01.004l-.037.017a12.839 12.839 0 0 0-.606.307c-.388.21-.908.514-1.431.893c-.52.376-1.06.838-1.476 1.368C3.82 5.162 3.5 5.795 3.5 6.5c0 .526.09 1.03.256 1.5H2zM11.163 8H4.837A3.486 3.486 0 0 1 4.5 6.5c0-.399.181-.818.519-1.249c.335-.428.794-.827 1.274-1.174A12.056 12.056 0 0 1 8 3.054a12.056 12.056 0 0 1 1.707 1.023c.48.347.94.746 1.274 1.174c.338.43.519.85.519 1.249c0 .537-.12 1.045-.337 1.5M14 13h-4v-1a2 2 0 1 0-4 0v1H2V9h12zm-7-1a1 1 0 1 1 2 0v1H7zM2.25 2.75a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0m12.25.75a.75.75 0 1 0 0-1.5a.75.75 0 0 0 0 1.5" />
                    </svg>
              Ponpes
              <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                :class="{ 'rotate-180': (selected === 'Charts') }" width="20" height="20" viewBox="0 0 20 20"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                  fill="" />
              </svg>
            </a>
            <div class="translate transform overflow-hidden" :class="(selected === 'Charts') ? 'block' :'hidden'">
              <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Hujroh</a></li>
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">PJ Hujroh</a></li>
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Santri</a></li>
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Ustadz/zah</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="#" @click.prevent="selected = (selected === 'UiElements' ? '':'UiElements')"
              :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'UiElements') || (page === 'alerts' || page === 'buttons' || page === 'buttonsGroup' || page === 'badge' || page === 'breadcrumb' || page === 'card'|| page === 'dropdowns' || page === 'Modals' || page === 'tabs' || page === 'tooltips' || page === 'popovers' || page === 'accordion' || page === 'notifications' || page === 'pagination' || page === 'progress' || page === 'carousel' || page === 'images' || page === 'videos' || page === 'spinners' || page === 'uiList' || page === 'avatars') }">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor"
                  d="m12 .586l6 6V9h4v10h1v2H1v-2h1V9h4V6.586zM18 19h2v-8h-2zM6 11H4v8h2zm2-3.586V19h3v-7h2v7h3V7.414l-4-4z" />
              </svg>
              Sekolah

              <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                :class="{ 'rotate-180': (selected === 'UiElements') }" width="20" height="20" viewBox="0 0 20 20"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                  fill="" />
              </svg>
            </a>
            <div class="translate transform overflow-hidden"
              :class="(selected === 'UiElements') ? 'block' :'hidden'">
              <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Kelas</a></li>
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Guru</a></li>
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Pengaturan</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
              href="#" @click.prevent="selected = (selected === 'AuthPendaftaran' ? '':'AuthPendaftaran')"
              :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'AuthPendaftaran') || (page === 'register' || page === 'login' || page === 'forgetPassword' || page === 'comingSoon' || page === 'twoStepVerification' || page === 'underMaintenance') }">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2 11h15M2 8h20M6.5 5c-.604 0-1.176.129-1.682.358c-.332.15-.498.224-.658.472S4 6.324 4 6.818V8h5V6.818c0-.494 0-.74-.16-.988s-.326-.323-.658-.472A4.1 4.1 0 0 0 6.5 5m0 9a4.06 4.06 0 0 0-1.92.475c-.106.057-.16.085-.25.166a1.2 1.2 0 0 0-.301.504C4 15.263 4 15.36 4 15.553c0 .416 0 .625.061.791a1 1 0 0 0 .595.595c.166.061.375.061.792.061h2.104c.417 0 .626 0 .792-.061a1 1 0 0 0 .595-.595C9 16.178 9 15.97 9 15.552c0-.192 0-.29-.029-.407a1.2 1.2 0 0 0-.302-.504a1 1 0 0 0-.249-.166A4.06 4.06 0 0 0 6.5 14M2 17h15M2 20h20m-5-8h5m-5 3h5m0-11v18M17 4v18M2 4v18" color="currentColor" />
              </svg>
              Sapras
              <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                :class="{ 'rotate-180': (selected === 'AuthPendaftaran') }" width="20" height="20" viewBox="0 0 20 20"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                  fill="" />
              </svg>
            </a>
            <div class="translate transform overflow-hidden"
              :class="(selected === 'AuthPendaftaran') ? 'block' :'hidden'">
              <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Laporan Baru</a></li>
                <li><a href="#" class="group relative flex items-center gap-2.5 rounded-md px-4 text-sm duration-300 ease-in-out hover:text-slate-500">Report</a></li>
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