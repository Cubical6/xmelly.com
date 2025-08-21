<!-- thin border line on the left side -->
<nav class="ml-8 pl-2 lg:block hidden"
    x-transition:enter="transition-all ease-in-out duration-700"
    x-transition:enter-start="-left-full"
    x-transition:enter-end="left-0"
    x-transition:leave="transition-all ease-in-out duration-700"
    x-transition:leave-start="top-0"
    x-transition:leave-end="-top-full">

    <div x-ref="dialog" x-on:keydown.escape.window="close()"
        class="
            lg:w-48 xl:w-56 lg:h-screen w-full
            fixed lg:relative top-0 left-0 z-50
            h-screen lg:h-auto
            bg-white dark:bg-gray-800 bg-pattern lg:!bg-transparent lg:!bg-none
            pt-16 lg:pt-0
            text-left
        ">
            <div class="
                docs-nav h-full lg:h-auto
                pt-6 lg:pt-0.5 pb-6 px-4 lg:pl-0 lg:pr-4
                overflow-y-auto overflow-x-auto lg:overflow-inherit
            ">
                <h2>Partners</h2>

                <ul class="pb-8 border-b border-white/10 lg:gap-6 drop-shadow lg:px-0 flex flex-wrap items-center justify-center gap-3 px-6">
                    <li class="block">
                        <a href="https://laracasts.com/?ref=pestphp" target="_blank" rel="noopener" class="table">
                            <img src="/www/assets/sponsors/laracasts.svg" class="w-auto h-12" />
                        </a>
                    </li>
                    <li class="block">
                        <a href="https://coderabbit.ai/?ref=pestphp" target="_blank" rel="noopener" class="table">
                            <img src="/www/assets/sponsors/coderabbit.svg" class="w-auto h-12" />
                        </a>
                    </li>
                    <li class="block">
                        <a href="https://cmsmax.com/?ref=pestphp" target="_blank" rel="noopener" class="table">
                            <img src="/www/assets/sponsors/cmsmax.png" class="w-auto h-10" />
                        </a>
                    </li>
                    <li class="block">
                        <a href="https://nativephp.com/mobile?ref=pestphp.com" target="_blank" rel="noopener" class="table">
                            <img src="/www/assets/sponsors/native-php.svg" class="w-auto h-12" />
                        </a>
                    </li>
                </ul>
                <ul class="pb-8 border-b border-white/10 drop-shadow md:gap-3 lg:px-0 flex flex-wrap items-center justify-center gap-3 px-6 mt-6">
                    <li class="md:block hidden w-full h-0 -mt-12"></li>
                        <a href="https://forge.laravel.com/?ref=pestphp" target="_blank" rel="noopener" class="table">
                            <img src="/www/assets/sponsors/forge.svg" class="w-auto h-5" />
                        </a>
                    </li>
                    <li class="md:block hidden w-full h-0 -mt-12"></li>
                        <a href="https://spatie.be/?ref=pestphp" target="_blank" rel="noopener" class="table">
                            <img src="/www/assets/sponsors/spatie.svg" class="w-auto h-7" />
                        </a>
                    </li>
                    <li class="md:block hidden w-full h-0 -mt-12"></li>
                    <li class="block">
                        <a href="https://localazy.com/?ref=pestphp" target="_blank" rel="noopener" class="table">
                            <img src="/www/assets/sponsors/localazy.svg" class="w-auto h-5" />
                        </a>
                    </li>
                    <li class="md:block hidden w-full h-0 -mt-12"></li>
                    <li class="block">
                        <a href="https://devtools-for-livewire.com/?ref=pestphp" target="_blank" rel="noopener" class="table">
                            <img src="/www/assets/sponsors/devtools-for-livewire.svg" class="w-auto h-4" />
                        </a>
                    </li>
                    <li class="md:block hidden w-full h-0 -mt-12"></li>
                    <li class="block">
                        <a href="https://loadforge.com/?ref=pestphp" target="_blank" rel="noopener" class="table">
                            <img src="/www/assets/sponsors/loadforge.svg" class="w-auto h-5" />
                        </a>
                    </li>
                    <li class="md:block hidden w-full h-0 -mt-12"></li>
                    <li class="block">
                        <a href="https://route4me.com/?ref=pestphp" target="_blank" rel="noopener" class="table">
                            <img src="/www/assets/sponsors/route4me.svg" class="w-auto h-6" />
                        </a>
                    </li>
                    <li class="md:block hidden w-full h-0 -mt-12"></li>
                    <li class="block">
                        <a href="https://zapiet.com/?ref=pestphp" target="_blank" rel="noopener" class="table">
                            <img src="/www/assets/sponsors/zapiet.svg" class="w-auto h-5" />
                        </a>
                    </li>
                    <li class="md:block hidden w-full h-0 -mt-12"></li>
                    <li class="block">
                        <a href="https://docuwriter.ai/?ref=pestphp" target="_blank" rel="noopener" class="table">
                            <img src="/www/assets/sponsors/docuwriter-ai.svg" class="w-auto h-8" />
                        </a>
                    </li>
                    <li class="md:block hidden w-full h-0 -mt-12"></li>
                    <li class="block">
                        <a href="https://getnerdify.com/?ref=pestphp" target="_blank" rel="noopener" class="table">
                            <img src="/www/assets/sponsors/nerdify.png" class="w-auto h-12" />
                        </a>
                    </li>
                    <li class="md:block hidden w-full h-0 -mt-12"></li>
                    <li class="block">
                        <a href="https://akaunting.com/?ref=pestphp" target="_blank" rel="noopener" class="table">
                            <img src="/www/assets/sponsors/akaunting.svg" class="w-auto h-5" />
                        </a>
                    </li>
                </ul>
                <div class="mt-8 text-center">
                    <a href="https://github.com/sponsors/nunomaduro" target="_blank" class="sm:w-auto focus:outline-none sm:mt-0 w-full px-8 py-2 text-sm font-bold text-white bg-transparent border border-white/50 rounded-lg">
                        Your logo here
                    </a>
                </div>
            </div>
    </div>
</nav>
