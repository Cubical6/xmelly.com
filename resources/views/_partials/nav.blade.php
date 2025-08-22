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
                <svg class="h-10 transition duration-100 ease-in-out hover:-rotate-2 hover:scale-104 hover:drop-shadow-2xl" alt="Pest Logo" alt="Pest Logo" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 381 100"><path fill="#fff" fill-rule="evenodd" d="M16.6067 27.5097 22.9939 0h56.7875c15.6811 0 25.5336 12.3165 22.0066 27.5097l-1.9167 8.2529c-3.5272 15.1932-19.099 27.5097-34.7805 27.5097H36.697l-8.3033 35.7624H0l14.6906-63.2721h56.787l1.9166-8.2529H16.6067ZM295.574 0h85.181c-3.528 15.1932-19.1 27.5097-34.781 27.5097h-11.358l-16.606 71.525h-28.394l16.607-71.525h-73.824l-1.917 8.2529h28.394c15.682 0 25.535 12.3165 22.007 27.5097l-1.916 8.2526c-3.527 15.1937-19.1 27.5098-34.781 27.5098h-56.787l6.387-27.5098h56.787l1.916-8.2526h-28.394c-15.681 0-25.533-12.3165-22.006-27.5097l1.916-8.2529C207.532 12.3165 223.105 0 238.786 0h56.788Zm-93.7 0h-85.181l-6.387 27.5097h85.181L201.874 0Zm-25.34 35.7626h-68.145l-6.387 27.5097h68.145l6.387-27.5097Zm8.734 35.7623h-85.182l-6.3867 27.5098H178.88l6.388-27.5098Z" clip-rule="evenodd"/></svg>
            </a>
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
