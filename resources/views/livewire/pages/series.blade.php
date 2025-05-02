<section>
    <div class="flex flex-row flex-1 justify-between items-center">
        <h1 class="content-title">Séries</h1>
        <div class="px-4">
            @auth
                <x-icon class="h-8 text-primary hover:text-primary/75 hover:cursor-pointer" name="m-plus"
                    @click="$wire.modalSerie = true" />
            @endauth
        </div>
    </div>
    <div x-data="{ open: false }" class="flex flex-col gap-4">
        <div class="flex flex-col-reverse lg:flex-row lg:justify-between lg:items-center gap-4">
            <div class="w-full justify-center gap-4">
                <div class="filter">
                    <input class="btn btn-neutral border-accent checked:btn-primary" type="radio" name="serie"
                        aria-label="Título" wire:click="seriesQuery('title|asc')" />
                    <input class="btn btn-neutral border-accent checked:btn-primary" type="radio" name="serie"
                        aria-label="Classificação" wire:click="seriesQuery('ratings_avg_rating|desc')" />
                    <input class="btn btn-neutral border-accent checked:btn-primary" type="radio" name="serie"
                        aria-label="Recentemente" wire:click="seriesQuery('created_at|desc')" />
                    <input class="btn btn-neutral border-accent checked:btn-primary" type="radio" name="serie"
                        aria-label="Ano de Lançamento" wire:click="seriesQuery('release_date|desc')" />
                    <input class="btn btn-neutral border-accent filter-reset" type="radio" name="serie"
                        aria-label="All" wire:click="seriesQuery"
                        x-on:click="$wire.sortBy = { column: 'id', direction: 'asc' }" />
                </div>
            </div>
            <div class="flex flex-row items-center space-x-4">
                <x-form wire:submit="seriesQuery">
                    <x-input class="max-[424px]:w-56 w-80 sm:w-96 rounded-e-none" wire:model="search"
                        placeholder="Search" autocomplete="off" clearable>
                        <x-slot:append>
                            <x-button icon="o-magnifying-glass" class="btn-primary rounded-s-none rounded"
                                type="submit" wire:loading.attr="disabled" />
                        </x-slot:append>
                    </x-input>
                </x-form>
                <div>
                    <x-icon class="h-7 text-primary hover:text-primary/75 hover:cursor-pointer" name="m-funnel"
                        x-on:click="open = ! open" />
                </div>
            </div>
        </div>
        <div x-show.important="open" x-transition:enter="transition ease-out duration-300" x-cloak
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90">
            <x-form wire:submit="seriesQuery" class="space-y-2">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div>
                        <x-choices-offline class="w-full" label="Gêneros" placeholder="Selecione gênero"
                            option-sub-label="description" :options="$genres" option-label="genre" wire:model="genre"
                            searchable no-result-text="Ops! Nenhum resultado encontrado." />
                    </div>
                    <div>
                        <x-choices class="w-full" label="Classificação de conteúdo"
                            placeholder="Selecione classificação" option-avatar="image" option-label="classification"
                            :options="$classifications" wire:model="classification" />
                    </div>
                    <div class="flex flex-row space-x-4 items-end lg:justify-end">
                        <x-button class="btn-error" label="Redefinir Filtros" wire:click='resetFilter' spinner />
                        <x-button label="Filtrar" class="btn-success" type="submit" x-on:click="open = ! open" />
                    </div>
                </div>
            </x-form>
        </div>
        <x-hr target="seriesQuery, resetFilter" />
    </div>

    <article wire:loading.remove wire:target.except="seriesQuery">
        @foreach ($series as $serie)
            <x-ui.cover content="serie" :item="$serie" />
        @endforeach
    </article>

    <x-ui.loading-coffee except="seriesQuery, resetFilter" />

    <div class="flex gap-6 w-full">
        @if (!isNullOrEmpty($series->hasPages()))
            <div>
                <x-select class="select-sm border-none!" :options="$numbersPage" wire:model.live="page" />
            </div>
        @endif
        <div class="w-full">
            {{ $series->links() }}
        </div>
    </div>
    <livewire:components.modals.add-serie :user="Auth::user()" :$classifications :$genres wire:model.live="modalSerie" />
</section>
