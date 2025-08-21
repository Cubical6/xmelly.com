<nav
    class="lg:block hidden"
    :class="{ 'block lg:block': isOpen === true, 'hidden lg:block': isOpen === false }"
    x-transition:enter="transition-all ease-in-out duration-700"
    x-transition:enter-start="-left-full"
    x-transition:enter-end="left-0"
    x-transition:leave="transition-all ease-in-out duration-700"
    x-transition:leave-start="top-0"
    x-transition:leave-end="-top-full"
>
    <div x-ref="dialog" x-on:keydown.escape.window="close()" class="fixed lg:relative inset-y-0 right-0 z-50 lg:w-48 xl:w-56 w-full bg-gray-900/50 lg:bg-transparent lg:backdrop-blur-none lg:ring-0 backdrop-blur-xl px-6 lg:pl-0 py-14 lg:py-0 sm:max-w-sm sm:ring-1 sm:ring-gray-100/10">
        <div class="lg:hidden flex items-center gap-4">
            <a aria-label="Home" href="/" class="-m-1.5 p-1.5 shrink-0">
                <span class="sr-only">Pest | The elegant PHP testing framework</span>
                <svg class="h-10 transition duration-100 ease-in-out hover:-rotate-2 hover:scale-104 hover:drop-shadow-2xl" alt="Pest Logo" viewBox="0 0 141 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M35.6103 9.08235C36.4877 4.07843 33.1507 0 28.1687 0H5.60867L4.01067 9.08235H26.5707L26.038 12.1098H3.478L0 32H9.024L10.9197 21.1765H24.4557C29.4377 21.1765 34.2003 17.098 35.0777 12.0941L35.6103 9.08235ZM62.134 12.2039H38.1483L36.7383 19.7961H60.7083L62.134 12.2039ZM71.7847 0H40.2007L38.6027 9.09804H70.2023L71.7847 0ZM34.592 32H66.1917L67.774 22.902H36.19L34.592 32ZM83.8167 0C78.8973 0 74.1503 4.15686 73.1947 9.09804L72.9283 10.6196H72.944C72.333 15.451 75.5603 19.5608 80.4013 19.5608H93.9373L93.342 22.902H70.782L69.184 32H91.744C96.726 32 101.489 27.9216 102.366 22.902L102.946 19.5608C103.823 14.5412 100.486 10.4627 95.504 10.4627H81.968L82.203 9.09804H112.299L108.288 32H117.343L121.354 9.09804H130.378C135.36 9.09804 140.123 5.01961 141 0H83.8167Z" fill="white"/>
                </svg>
            </a>

            <button x-tooltip="Soon" class="flex items-center gap-0.5 rounded-full py-1.5 pr-1.5 pl-2.5 text-xs font-medium tabular-nums bg-white/10 text-white hover:bg-white/15 ring-1 ring-white/15 hover:ring-white/20" aria-label="Select version of library" type="button" aria-haspopup="menu">
                v4.0
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" class="size-4 fill-gray-300"><path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path></svg>
            </button>

            <button @click="close()" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-400 absolute right-10">
                <span class="sr-only">Close menu</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6"><path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" /></svg>
            </button>
        </div>

        <div class="docs-nav h-full lg:h-auto mt-10 lg:mt-0 lg:pt-0.5 pb-6 lg:pl-0 lg:pr-4 overflow-y-auto overflow-x-auto lg:overflow-inherit">
            {{ $slot }}
        </div>
    </div>
</nav>

