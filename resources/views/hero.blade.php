
{{ $recents}}
<section class="relative min-h-[80svh] mb-92 w-full">
    @foreach ($blogs as $var )
        <div class="aspect-h-2 aspect-w-5 animate-pulse bg-gray-50">
            <img
                data-src="{{ $var['image'] }}"
                alt="{{ $var['title'] }}"
                class="lazy object-cover object-center opacity-0 transition duration-300 ease-in-out" />
        </div>
    <div
        class="absolute inset-x-0 bottom-0 z-10 mx-auto w-full max-w-3xl translate-y-4/5 px-4 sm:translate-y-3/4 sm:px-6 lg:translate-y-1/2">
        <div
            class="flex items-center justify-center rounded-2xl bg-white/90 px-5 py-8 shadow-md backdrop-blur-md sm:p-10 sm:shadow-lg md:p-12 lg:p-14">
            <div class="flex flex-col items-center text-center">
                <a href="post.html" class="group mt-3 block">
                    <h2
                        class="text-2xl font-medium tracking-normal text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out group-hover:underline sm:text-3xl sm:decoration-3 md:tracking-tight lg:text-4xl lg:leading-tight">
                        {{ $var['title']}}
                    </h2>
                </a>

            </div>
        </div>
    </div>
    @endforeach
</section>
