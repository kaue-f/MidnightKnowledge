<section>
    <div class="flex flex-row justify-between -mt-5 -mb-3.5">
        <x-breadcrumbs class="text-base-content/80" :items="$breadcrumbs" separator="lucide.chevron-right"
            link-item-class="hover:text-secondary font-medium text-base-content" />
    </div>
    <div class="flex flex-col lg:flex-row justify-center gap-6">
        <div class="flex flex-col gap-4 xl:w-2/6 lg:w-1/3">
            {{ $cover }}
            <div class="hidden lg:flex flex-col px-1 space-y-2">
                {{ $detail }}
            </div>
        </div>
        <div class="flex flex-col gap-4 xl:w-full lg:w-2/3">
            <div class="flex flex-col min-h-[450px] gap-4">
                <div class="flex flex-col w-full gap-1">
                    <div class="flex justify-between items-center">
                        <div class="flex flex-1 flex-row space-x-4 items-center">
                            <h1 class="text-4xl font-semibold">{{ $title }}</h1>
                        </div>
                        <div class="flex gap-4">
                            {{ $top }}
                        </div>
                    </div>
                    <div class="flex space-x-2 items-center justify-start">
                        {{ $ratings }}
                    </div>
                </div>
                <div class="flex flex-row w-full gap-2.5">
                    {{ $tags }}
                </div>

                <div class="flex flex-col w-full">
                    <p class="font-light opacity-80">Sinopse</p>
                    <div class="text-justify markdown">
                        {!! $synopsis !!}
                    </div>
                </div>

                <div class="lg:hidden flex flex-wrap justify-between space-x-2 w-full px-1 space-y-2">
                    {{ $detail }}
                </div>
            </div>
            <div x-data="{ open: true }" class="flex flex-col w-full">
                <div class="flex justify-center gap-2 w-full border-b border-black/65">
                    <div class="px-2 pb-1 hover:cursor-pointer transition-all ease-linear duration-300"
                        :class="open ? 'border-b-2 border-primary font-medium' : 'font-light'" x-on:click="open = true">
                        <div x-cloak class="space-x-0.5">
                            <x-icon x-show="open" name="m-chart-bar" />
                            <x-icon x-show="!open" name="o-chart-bar" />
                            <span>Análise</span>
                        </div>
                    </div>
                    <div class="px-2 pb-1 hover:cursor-pointer transition-all ease-linear duration-300"
                        :class="!open ? 'border-b-2 border-primary font-medium' : 'font-light'"
                        x-on:click="open = false">
                        <div x-cloak class="space-x-0.5">
                            <x-icon x-show="open" name="o-chat-bubble-left-right" />
                            <x-icon x-show="!open" name="m-chat-bubble-left-right" />
                            <span>Comentários</span>
                        </div>
                    </div>
                </div>
                <div x-show="open" x-transition.all.duration.300ms>
                    {{ $chart }}
                </div>
                <div x-show="!open" x-cloak x-transition.all.duration.300ms>
                    {{ $comment }}
                </div>
            </div>
        </div>
    </div>
</section>
