<div
    class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold">
    @yield('title')
    </h2>
    <nav>
        <ol class="flex items-center gap-2">
            <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
            </svg>
            @for($i = 0; $i <= count(Request::segments()); $i++)
                <li class="font-medium text-primary">
                {{Request::segment($i)}}
                @if($i < count(Request::segments()) & $i> 0) >

                @endif
                </li>
            @endfor

        </ol>
    </nav>
</div>