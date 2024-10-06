<nav class="flex items-center sticky top-0 z-10 max-w-screen-2xl mx-auto py-2 px-4">
    <div class="flex w-3/5">
        <img src="images/layouts/Logo3.png" style="width: 5rem">
    </div>
    <div class="flex gap-4 text-lg font-semibold w-1/5 navbar-dropdown">
        <div class="hover:text-primary hover:cursor-pointer">
            Home
        </div>
        <x-dropdown>
            <x-slot:trigger>
                <div class="label py-0 gap-1 hover:text-primary">
                    Explorar
                    <x-icon name="s-chevron-down" />
                </div>
            </x-slot:trigger>
            <x-menu-item class="font-medium hover:text-primary hover:bg-transparent" title="Animes e Mangás"
                {{-- link="" --}} no-wire-navigate />
            <x-menu-item class="font-medium hover:text-primary hover:bg-transparent" title="Filmes e Séries"
                {{-- link="" --}} no-wire-navigate />
            <x-menu-item class="font-medium hover:text-primary hover:bg-transparent" title="Livros"
                {{-- link="" --}} no-wire-navigate />
            <x-menu-item class="font-medium hover:text-primary hover:bg-transparent" title="Games" link="/games"
                no-wire-navigate />
        </x-dropdown>
        <div class="hover:text-primary hover:cursor-pointer">
            Biblioteca
        </div>
    </div>
    <div class="flex w-1/5 justify-end">
        <div>
            {{-- Search --}}
        </div>
        <div class="navbar-dropdown">
            <x-dropdown right>
                <x-slot:trigger>
                    <x-avatar class="!w-12 hover:cursor-pointer" :image="$avatar" />
                </x-slot:trigger>

                <x-menu-item class="flex flex-col items-center hover:bg-transparent w-60" @click.stop="">
                    <x-avatar class="!w-32 hover:cursor-pointer" :image="$avatar" />
                    <div class="text-sm font-semibold text-center pt-3">
                        Usuário
                    </div>
                </x-menu-item>

                <x-menu-separator />

                <x-menu-item icon="o-user" title="Meu Perfil" {{-- link="" --}} no-wire-navigate />

                {{-- change theme --}}

                <x-menu-item @click.stop="">
                    <x-button class="btn-xs text-base btn-ghost w-full font-normal hover:bg-transparent" label="Logout"
                        wire:click="" icon-right="m-arrow-right-end-on-rectangle" spinner />
                </x-menu-item>
            </x-dropdown>
        </div>
    </div>
</nav>
