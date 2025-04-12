<nav class="flex justify-between items-center max-w-(--breakpoint-2xl) mx-auto py-3 px-6 navbar-dropdown">
    <div class="flex w-1/2 items-center lg:w-auto">
        <a class="lg:hidden justify-start">
            <img src="{{ asset('images/layouts/Logo3.png') }}" wire:click="$toggle('showDrawer')" style="width:6rem">
        </a>
        <a href="/" wire:navigate class="hidden lg:flex">
            <img src="{{ asset('images/layouts/Logo3.png') }}" style="width:5rem">
        </a>
    </div>
    <div class="hidden gap-4 text-lg font-semibold lg:flex items-center">
        <x-button class="btn-ghost text-lg hover:text-primary hover:bg-transparent" label="Home" link="/" />
        <x-dropdown>
            <x-slot:trigger>
                <div class="py-0 gap-1 hover:text-primary hover:cursor-pointer">
                    Explorar
                    <x-icon name="s-chevron-down" />
                </div>
            </x-slot:trigger>
            <x-menu-item class="font-medium hover:text-primary hover:bg-transparent" title="Animes" link="/animes" />
            <x-menu-item class="font-medium hover:text-primary hover:bg-transparent" title="Filmes" link="/" />
            <x-menu-item class="font-medium hover:text-primary hover:bg-transparent" title="Games" link="/games" />
            <x-menu-item class="font-medium hover:text-primary hover:bg-transparent" title="Mangás" link="/" />
            <x-menu-item class="font-medium hover:text-primary hover:bg-transparent" title="Livros" link="/" />
            <x-menu-item class="font-medium hover:text-primary hover:bg-transparent" title="Séries" link="/" />
        </x-dropdown>
        <x-button class="btn-ghost text-lg hover:text-primary hover:bg-transparent" label="Biblioteca" link="/" />
    </div>
    <div class="flex justify-end gap-6 items-center">
        <div>
            <x-button class="btn-sm text-base text-white btn-primary max-sm:hidden"
                @click.stop="$dispatch('mary-search-open')">
                <x-icon name="c-magnifying-glass" />
                Search
                <x-kbd class="kbd-xs bg-accent border-base-300">Shift</x-kbd>
                <x-kbd class="kbd-xs bg-accent border-base-300">Espaço</x-kbd>
            </x-button>
            <x-button class="btn-circle text-white btn-ghost sm:hidden" @click.stop="$dispatch('mary-search-open')">
                <x-icon class="w-8 h-8" name="c-magnifying-glass" />
            </x-button>
        </div>
        <div>
            <x-dropdown right>
                <x-slot:trigger>
                    <img src="{{ asset($avatar) }}" class="size-14 rounded-full hover:cursor-pointer" />
                </x-slot:trigger>
                <x-menu-item class="flex flex-col items-center hover:bg-transparent lg:w-64 w-52" @click.stop="">
                    <img src="{{ asset($avatar) }}" class="lg:size-40 size-32 rounded-full" />
                    <div class="font-semibold text-lg text-center pt-3">
                        {{ $name }}
                    </div>
                </x-menu-item>
                <x-menu-separator />
                @auth
                    <x-menu-item icon="o-user" title="Meu Perfil" link="/user/profile" />
                    <x-menu-item icon="o-cog-8-tooth" title="Configurações" link="/settings" />
                    <x-menu-item icon="o-arrow-right-end-on-rectangle" title="Logout" wire:click="logout" spinner
                        @click.stop="" />
                @else
                    <x-menu-item class="justify-center!" title="Entrar" link="/login" />
                    <x-menu-item class="justify-center!" title="Cadastrar" link="/sign" />
                @endauth
            </x-dropdown>
        </div>
    </div>
    <x-drawer wire:model="showDrawer" class="w-1/3 gap-4 px-4!">
        <div class="flex justify-center">
            <img src="{{ asset('images/layouts/Logo3.png') }}" @click="$wire.showDrawer = false" style="width:75%">
        </div>
        <x-menu class="w-full">
            <x-menu-item class="hover:text-primary hover:cursor-pointer navbar-dropdown" title="Home"
                link="/" />
            <ul class="menu">
                <li>
                    <h2 class="menu-title">Explorar</h2>
                    <ul>
                        <li><a href="/" wire:navigate
                                class="font-medium hover:text-primary hover:bg-transparent">Animes</a></li>
                        <li><a href="/animes" wire:navigate
                                class="font-medium hover:text-primary hover:bg-transparent">Filmes</a></li>
                        <li><a href="/games" wire:navigate
                                class="font-medium hover:text-primary hover:bg-transparent">Games</a></li>
                        <li><a href="/" wire:navigate
                                class="font-medium hover:text-primary hover:bg-transparent">Mangás</a></li>
                        <li><a href="/" wire:navigate
                                class="font-medium hover:text-primary hover:bg-transparent">Livros</a></li>
                        <li><a href="/" wire:navigate
                                class="font-medium hover:text-primary hover:bg-transparent">Séries</a></li>
                    </ul>
                </li>
            </ul>
            <x-menu-item class="hover:text-primary hover:cursor-pointer" title="Biblioteca" link="/" />
        </x-menu>
    </x-drawer>
</nav>
