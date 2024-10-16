<section class="flex flex-col gap-6">
    <div class="flex flex-row flex-1 sjustify-between">
        <h1 class="text-2xl font-bold">Games</h1>
    </div>
    <div x-data="{ open: false }" class="flex flex-col gap-4">
        <div class="flex flex-row justify-end items-center space-x-4">
            <x-input class="w-full md:w-96" icon="o-magnifying-glass" wire:model.live.debounce.300ms="search"
                placeholder="Search" autocomplete="off" clearable />
            <x-icon class="h-6 text-primary hover:text-primary/75 hover:cursor-pointer" name="m-funnel"
                x-on:click="open = ! open" />
        </div>
        <div class="px-4" x-show.important="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90">
            <x-form wire:submit="filter">
                <div class="flex flex-wrap gap-6 justify-between">
                    <x-select label="Ordenar por" placeholder="" placeholder-value="" :options="$assortments"
                        wire:model="assortment" />

                    <x-choices class="w-auto lg:w-96" label="Gêneros" placeholder="Selecione gênero"
                        placeholder-value="" :options="$genres" option-label="genre" wire:model="genre" />

                    <x-choices class="w-auto lg:w-96" label="Plataforma" option-sub-label="plataform"
                        placeholder="Selecione plataforma" placeholder-value="" :options="$plataforms"
                        wire:model="plataform" />

                    <x-choices class="w-auto lg:w-72" label="Classificação de conteúdo"
                        placeholder="Selecione classificação" option-label="classification" placeholder-value=""
                        :options="$classifications" wire:model="classification" />
                </div>
                <x-slot:actions>
                    <div class="flex gap-x-4">
                        <x-button class="btn-sm btn-error" label="Redefinir Filtros" wire:click='resetFilter' />
                        <x-button label="Filtrar" class="btn-sm btn-primary" type="submit" spinner="filter"
                            x-on:click="open = ! open" />
                    </div>
                </x-slot:actions>
            </x-form>
        </div>
    </div>
    <article class="grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 grid-cols-2 w-full gap-6 py-4 px-8">
        @foreach ($games as $game)
            <div class="flex flex-col justify-start space-y-2">
                <div
                    class="relative hover:bg-gradient-to-b from-white/50 to-[#0003] xl:h-96 lg:h-80 md:h-72 sm:h-64 h-56 rounded-md overflow-hidden group">
                    <div
                        class="flex absolute bottom-0 right-0 items-center gap-x-2 text-[#fcd53f] font-medium text-base p-2 opacity-0 group-hover:opacity-100 group-hover:z-10 transition-opacity duration-300">
                        <x-icon class="h-5" name="bi.star-fill" />
                        {{ $game['average_rating'] }}
                    </div>
                    <img class="absolute w-full h-full group-hover:mix-blend-overlay group-hover:scale-110 transition-transform duration-300 object-cover"
                        src="{{ $game['image'] }}" alt="">
                </div>
                <p class="font-medium px-2">{{ $game['title'] }}</p>
            </div>
        @endforeach
    </article>
</section>
