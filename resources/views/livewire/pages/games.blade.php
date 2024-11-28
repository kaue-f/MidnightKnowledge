<section class="flex flex-col gap-6">
    <div class="flex flex-row flex-1 justify-between items-center">
        <h1 class="text-2xl font-bold">Games</h1>
        <div class="px-4">
            <x-icon class="h-8 text-primary hover:text-primary/75 hover:cursor-pointer" name="m-plus"
                @click="$wire.modalGame = true" />
        </div>
    </div>
    <div x-data="{ open: false }" class="flex flex-col gap-4">
        <div class="flex flex-col-reverse lg:flex-row lg:justify-between lg:items-center gap-4">
            <livewire:components.ui.sort-by wire:model.live='sortBy' />

            <div class="flex flex-row items-center space-x-4">
                <x-input class="max-[424px]:w-56 w-80 sm:w-96" icon="o-magnifying-glass"
                    wire:model.live.debounce.300ms="search" placeholder="Search" autocomplete="off" clearable />
                <x-icon class="h-6 text-primary hover:text-primary/75 hover:cursor-pointer" name="m-funnel"
                    x-on:click="open = ! open" />
            </div>
        </div>
        <div class="px-6" x-show.important="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90">
            <x-form wire:submit="filter">
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4  gap-6 py-4 border-b border-b-white">
                    <div>
                        <x-choices class="w-full" label="Gêneros" placeholder="Selecione gênero" placeholder-value=""
                            :options="$genres" option-label="genre" wire:model="genre" />
                    </div>
                    <div>
                        <x-choices class="w-full" label="Plataforma" option-sub-label="plataform"
                            placeholder="Selecione plataforma" placeholder-value="" :options="$platforms"
                            wire:model="plataform" />
                    </div>
                    <div>
                        <x-choices class="w-full" label="Classificação de conteúdo"
                            placeholder="Selecione classificação" option-label="classification" placeholder-value=""
                            :options="$classifications" wire:model="classification" />
                    </div>
                    <div class="flex gap-x-4 items-end h-full place-self-end pb-2">
                        <x-button class="btn-sm btn-error" label="Redefinir Filtros" wire:click='resetFilter' />
                        <x-button label="Filtrar" class="btn-sm btn-primary" type="submit" spinner="filter"
                            x-on:click="open = ! open" />
                    </div>
                </div>
            </x-form>
        </div>
    </div>
    <article class="grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 grid-cols-2 w-full gap-6 py-4 px-8">
        @foreach ($games as $game)
            <livewire:components.ui.cover :item="$game" :key="$game['id']" />
        @endforeach
    </article>
    <x-modal wire:model="modalGame" title="Cadastrar Game" class="backdrop-blur"
        box-class="p-6 w-11/12 max-w-4xl rounded-md">
        <livewire:components.modals.add-game :$genres :$platforms :$classifications />
    </x-modal>
</section>
