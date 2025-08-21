<svg class="pointer-events-none fixed inset-0 -z-10 h-screen mix-blend-overlay opacity-80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" preserveAspectRatio="none">
    <defs>
        <filter id="noise-filter">
            <feTurbulence type="turbulence" baseFrequency="1" numOctaves="1" stitchTiles="stitch" result="noise"></feTurbulence>
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0" result="coloredNoise"></feColorMatrix>
        </filter>
    </defs>
    <rect width="100%" height="100%" filter="url(#noise-filter)"></rect>
</svg>

<div class="pointer-events-none fixed inset-0 min-h-screen h-full -z-20 [mask-image:radial-gradient(ellipse_at_100%_100%,black_20%,transparent_80%)] opacity-90">
    <div class="pointer-events-none absolute inset-0 overflow-hidden">
        <div class="beam-background absolute -inset-[20px] z-20 blur-[80px] filter"></div>
    </div>
</div>

<header class="mx-auto max-w-7xl px-6 lg:px-8 py-8">
    <div class="absolute inset-x-0 top-8 z-0">
        <div class="border-t border-white/10"></div>
        <div class="mt-2 border-t border-white/10"></div>
    </div>

    <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between py-6">
        <div class="flex items-center gap-4">
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
        </div>

        <div class="gap-x-4 flex">
            <div class="flex items-center justify-end w-full">
                <div id="docsearch"></div>
            </div>

            <a href="https://github.com/pestphp/pest" target="_blank" class="hidden sm:inline-flex isolate group rounded-3xl">
                <div class="relative inline-flex items-center gap-x-1.5 rounded-l-full bg-white/10 px-2 py-1.5 text-sm font-semibold text-white group-hover:bg-white/15 focus:z-10 border-y-1 border-l-1 border-white/5">
                    <svg class="size-5" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C7.16 0 0 7.16 0 16c0 7.08 4.58 13.06 10.94 15.18.8.14 1.1-.34 1.1-.76 0-.38-.02-1.64-.02-2.98-4.02.74-5.06-.98-5.38-1.88-.18-.46-.96-1.88-1.64-2.26-.56-.3-1.36-1.04-.02-1.06 1.26-.02 2.16 1.16 2.46 1.64 1.44 2.42 3.74 1.74 4.66 1.32.14-1.04.56-1.74 1.02-2.14-3.56-.4-7.28-1.78-7.28-7.9 0-1.74.62-3.18 1.64-4.3-.16-.4-.72-2.04.16-4.24 0 0 1.34-.42 4.4 1.64 1.28-.36 2.64-.54 4-.54 1.36 0 2.72.18 4 .54 3.06-2.08 4.4-1.64 4.4-1.64.88 2.2.32 3.84.16 4.24 1.02 1.12 1.64 2.54 1.64 4.3 0 6.14-3.74 7.5-7.3 7.9.58.5 1.08 1.46 1.08 2.96 0 2.14-.02 3.86-.02 4.4 0 .42.3.92 1.1.76A16.026 16.026 0 0 0 32 16c0-8.84-7.16-16-16-16Z" fill="currentColor"></path></svg>
                </div>
                <span class="relative ml-px inline-flex items-center rounded-r-full bg-white/10 pr-2.5 pl-2 py-1.5 text-sm font-semibold text-white group-hover:bg-white/15 focus:z-10 border-y-1 border-r-1 border-white/5">+10k</span>
            </a>

            <div class="flex lg:hidden">
                <button aria-label="Toggle Documentation Navigation" @click.prevent="toggle()" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 uppercase text-sm">Menu</button>
            </div>
        </div>
    </nav>

    <div class="absolute inset-x-0 top-28 z-0">
        <div class="border-t border-white/10"></div>
        <div class="mt-2 border-t border-white/10"></div>
    </div>
</header>
