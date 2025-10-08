<nav class="flex justify-between items-center max-w-(--breakpoint-2xl) mx-auto py-1.5 px-6 navbar-dropdown">
    <div class="flex w-1/2 items-center lg:w-auto">
        <div class="lg:hidden justify-start hover:cursor-pointer items-center" wire:click="$toggle('showDrawer')">
            <img class="h-14 w-auto block sm:hidden" src="{{ asset('images/midnight/midnight-simples.png') }}"
                alt="Midnight Knowledge">
            <img class="h-16 w-auto hidden sm:block" src="{{ asset('images/midnight/midnight-compacta.png') }}"
                alt="Midnight Knowledge">
        </div>
        <a href="{{ route('home') }}" wire:navigate class="hidden lg:flex">
            <img class="h-16 w-auto" src="{{ asset('images/midnight/midnight-compacta.png') }}"
                alt="Midnight Knowledge">
        </a>
    </div>

    <div class="hidden gap-3 xl:gap-6 lg:flex mt-2.5 text-lg font-false tracking-wider">
        <a class="flex justify-center items-center text-center hover:text-primary {{ parse_url(url()->current(), PHP_URL_PATH) == '' ? 'border-b-2 border-b-primary' : '' }}"
            wire:navigate href="{{ route('home') }}">
            {{ trans('components/layouts/navbar.navigation.home') }}
        </a>

        @foreach ($navigationItems as $item)
            <a class="flex justify-center items-center text-center hover:text-primary {{ parse_url(url()->current(), PHP_URL_PATH) == $item['path'] ? 'border-b-2 border-b-primary' : '' }}"
                wire:navigate href="{{ $item['route'] }}">
                {{ $item['label'] }}
            </a>
        @endforeach
    </div>
    <div class="flex justify-end gap-3 xl:gap-6 items-center">
        <div>
            <x-button
                class="btn-sm text-sm xl:w-64 justify-between text-white transition-colors bg-gradient-to-b from-primary to-secondary hover:bg-gradient-to-t hover:from-primary/75 hover:to-secondary/75 max-lg:hidden shadow-xs shadow-white/20"
                @click.stop="$dispatch('mary-search-open')">
                <x-icon name="c-magnifying-glass" />
                <p class="hidden xl:block">{{ trans('components/layouts/navbar.filter.search') }}</p>
                <div class="space-x-0.5">
                    <x-kbd class="kbd-sm bg-gradient-to-b from-bg-base-100 to-base-300 border-base-300">
                        Shift
                    </x-kbd>
                    <x-kbd class="kbd-sm bg-gradient-to-b from-bg-base-100 to-base-300 border-base-300">
                        {{ trans('components/layouts/navbar.filter.space') }}
                    </x-kbd>
                </div>
            </x-button>
            <x-button class="btn-circle text-white btn-ghost lg:hidden" @click.stop="$dispatch('mary-search-open')">
                <x-icon class="w-8 h-8" name="c-magnifying-glass" />
            </x-button>
        </div>
        <div>
            <x-dropdown right>
                <x-slot:trigger class="relative">
                    <img src="{{ asset($avatar) }}" class="size-14 rounded-full hover:cursor-pointer" />
                    @if ($hasNotification)
                        <div class="absolute top-0.5 right-0.5 inline-grid *:[grid-area:1/1]">
                            <div class="status w-2.5 h-2.5 status-secondary animate-ping"></div>
                            <div class="status w-2.5 h-2.5 status-info"></div>
                        </div>
                    @endif
                </x-slot:trigger>
                <x-menu-item class="flex flex-col items-center hover:bg-transparent lg:w-64 w-52" @click.stop="">
                    <img src="{{ asset($avatar) }}" class="lg:size-40 size-32 rounded-full" />
                    <div class="font-semibold text-lg text-center pt-3">
                        {{ $name }}
                    </div>
                </x-menu-item>

                @auth
                    <x-menu-item icon="lucide.user" title="{{ trans('components/layouts/navbar.dropdown.profile') }}"
                        link="{{ route('my.profile') }}" />

                    <x-menu-item icon="lucide.library-big"
                        title="{{ trans('components/layouts/navbar.dropdown.library') }}"
                        link="{{ route('my.library') }}" />

                    <x-menu-separator />

                    <x-menu-item icon="lucide.message-square-text"
                        title="{{ trans('components/layouts/navbar.dropdown.notification') }}"
                        badge="{{ $notificationUnread }}" link="{{ route('my.notifications') }}"
                        badge-classes="float-right rounded-full text-white bg-gradient-to-bl from-primary to-secondary hover:bg-gradient-to-tr hover:from-primary/75 shadow-sm shadow-white/30" />

                    <x-menu-sub icon="lucide.languages"
                        title="{{ trans('components/layouts/navbar.dropdown.languages') }}">
                        @foreach ($languages as $key => $language)
                            <x-menu-item wire:click="changeLanguage('{{ $key }}')"
                                class="{{ config('app.locale') === $key ? 'font-bold bg-neutral hover:bg-neutral/75' : '' }}">
                                <div class="flex flex-row items-center gap-2">
                                    <img class="w-6 h-auto" src="{{ asset($language['flag']) }}"
                                        alt="{{ $language['label'] }}">
                                    {{ $language['label'] }}
                                </div>
                            </x-menu-item>
                        @endforeach
                    </x-menu-sub>

                    <x-menu-item icon="lucide.cog" title="{{ trans('components/layouts/navbar.dropdown.settings') }}"
                        link="{{ route('my.settings') }}" />
                    <x-menu-separator />

                    <x-menu-item icon="lucide.log-out" title="{{ trans('components/layouts/navbar.dropdown.logout') }}"
                        wire:click="logout" spinner @click.stop="" />
                @else
                    <x-menu-separator />
                    <x-menu-sub icon="lucide.languages"
                        title="{{ trans('components/layouts/navbar.dropdown.languages') }}">
                        @foreach ($languages as $key => $language)
                            <x-menu-item wire:click="changeLanguage('{{ $key }}')"
                                class="{{ config('app.locale') === $key ? 'font-bold bg-neutral hover:bg-neutral/75' : '' }}">
                                <div class="flex flex-row items-center gap-2">
                                    <img class="w-6 h-auto" src="{{ asset($language['flag']) }}"
                                        alt="{{ $language['label'] }}">
                                    {{ $language['label'] }}
                                </div>
                            </x-menu-item>
                        @endforeach
                    </x-menu-sub>
                    <x-menu-separator />
                    <x-menu-item icon="lucide.log-in" title="{{ trans('components/layouts/navbar.dropdown.login') }}"
                        link="{{ route('welcome') }}" />
                    <x-menu-item icon="lucide.pen-square"
                        title="{{ trans('components/layouts/navbar.dropdown.register') }}" link="{{ route('signup') }}" />
                @endauth
            </x-dropdown>
        </div>
    </div>

    <x-drawer wire:model="showDrawer" class="w-1/3 gap-4 px-4! bg-base-100">
        <div class="flex justify-center">
            <img class="h-36" src="{{ asset('images/midnight/midnight-horizontal.png') }}"
                @click="$wire.showDrawer = false" alt="Midnight Knowledge">
        </div>
        <ul class="flex flex-col items-center flex-wrap gap-2 w-full p-3 font-false tracking-wider">
            <li>
                <a class="flex justify-start items-center hover:text-primary py-1 px-1.5 {{ parse_url(url()->current(), PHP_URL_PATH) == '' ? 'border-l-2 border-b-2 border-primary rounded-bl' : '' }}"
                    wire:navigate href="{{ route('home') }}">
                    {{ trans('components/layouts/navbar.navigation.home') }}
                </a>
            </li>

            @foreach ($navigationItems as $item)
                <li>
                    <a class="flex justify-start items-center hover:text-primary py-1 px-1.5 {{ parse_url(url()->current(), PHP_URL_PATH) == $item['path'] ? 'border-l-2 border-b-2 border-primary rounded-bl' : '' }}"
                        wire:navigate href="{{ $item['route'] }}">
                        {{ $item['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </x-drawer>
</nav>
