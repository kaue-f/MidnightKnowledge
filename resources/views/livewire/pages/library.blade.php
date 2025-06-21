<section>
    <div class="flex flex-row flex-1 justify-between gap-2 items-start md:items-center">
        <h3 class="content-title">Minha Biblioteca</h3>
        <x-form wire:submit="loadUserLibrary">
            <x-input class="max-[424px]:w-56 w-full md:w-96 rounded-e-none" wire:model="search" placeholder="Search"
                autocomplete="off" clearable>
                <x-slot:append>
                    <x-button icon="o-magnifying-glass" class="btn-primary rounded-s-none rounded" type="submit"
                        wire:loading.attr="disabled" />
                </x-slot:append>
            </x-input>
        </x-form>

    </div>

    <div x-data="{ open: false }" class="flex flex-col">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">
            <div class="join justify-start">
                @foreach ($contentTypes as $key => $label)
                    <input type="checkbox" aria-label="{{ $label }}"
                        class="btn btn-sm btn-neutral not-checked:btn-soft checked:btn-primary join-item"
                        wire:model.live="types" value="{{ $key }}" />
                @endforeach
            </div>
            <div class="flex flex-row items-center justify-between gap-4">
                <div class="items-center gap-4">
                    <div class="filter">
                        <input class="btn btn-sm btn-neutral border-accent checked:btn-primary" type="radio"
                            name="content" aria-label="Título" wire:click="loadUserLibrary('title|asc')" />
                        <input class="btn btn-sm btn-neutral border-accent checked:btn-primary" type="radio"
                            name="content" aria-label="Classificação" wire:click="loadUserLibrary('avg_rating|desc')" />
                        <input class="btn btn-sm btn-neutral border-accent checked:btn-primary" type="radio"
                            name="content" aria-label="Adicionado"
                            wire:click="loadUserLibrary('created_at_library|desc')" />
                        <input class="btn btn-sm btn-neutral border-accent checked:btn-primary" type="radio"
                            name="content" aria-label="Recentemente" wire:click="loadUserLibrary('created_at|desc')" />
                        <input class="btn btn-sm btn-neutral border-accent checked:btn-primary" type="radio"
                            name="content" aria-label="Ano de Lançamento"
                            wire:click="loadUserLibrary('release_date|desc')" />
                        <input class="btn btn-sm btn-neutral border-accent filter-reset" type="radio" name="content"
                            aria-label="All" wire:click="loadUserLibrary"
                            x-on:click="$wire.sortBy = { column: 'id', direction: 'asc' }" />
                    </div>
                </div>
                <div>
                    <x-icon class="h-6 text-primary hover:text-primary/75 hover:cursor-pointer" name="m-funnel"
                        x-on:click="open = ! open" />
                </div>
            </div>
        </div>

        <div x-show.important="open" x-transition:enter="transition ease-out duration-300" x-cloak
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90">
            <x-form class="space-y-2 pt-6" wire:submit="loadUserLibrary" no-separator>
                <x-tabs wire:model="selectedTab">
                    <x-tab name="all-tab">
                        <x-slot:label>
                            <div class="flex items-center gap-x-1">
                                Geral
                                @if ($filters['genre'] || $filters['status'] || $filters['classification'])
                                    <div class="inline-grid *:[grid-area:1/1]">
                                        <div class="status status-secondary animate-ping"></div>
                                        <div class="status status-secondary"></div>
                                    </div>
                                @endif
                            </div>
                        </x-slot:label>
                        <div class="grid-filter">
                            <div>
                                <x-choices-offline class="w-full" label="Gêneros" placeholder="Selecione gênero"
                                    option-sub-label="description" :options="$genres" option-label="genre"
                                    wire:model="filters.genre" searchable clearable
                                    no-result-text="Ops! Nenhum resultado encontrado." />
                            </div>
                            <div class="group focus-select">
                                <x-choices class="w-full" label="Status" placeholder="Selecione status" values-as-string
                                    :options="$statuses" wire:model="filters.status" clearable />
                            </div>
                            <div>
                                <x-choices class="w-full" label="Classificação de conteúdo"
                                    placeholder="Selecione classificação" option-avatar="image"
                                    option-label="classification" :options="$classifications" wire:model="filters.classification"
                                    clearable />
                            </div>
                        </div>
                    </x-tab>
                    <x-tab name="anime-tab">
                        <x-slot:label>
                            <div class="flex items-center gap-x-1">
                                Animes
                                @if ($filters['anime']['animeType'])
                                    <div class="inline-grid *:[grid-area:1/1]">
                                        <div class="status status-secondary animate-ping"></div>
                                        <div class="status status-secondary"></div>
                                    </div>
                                @endif
                            </div>
                        </x-slot:label>
                        <div class="grid-filter">
                            <div>
                                <x-choices-offline class="w-full" label="Formato do anime"
                                    placeholder="Selecione o formato" option-sub-label="description" :options="$animeTypes"
                                    wire:model="filters.anime.animeType" searchable
                                    no-result-text="Ops! Nenhum resultado encontrado." clearable />
                            </div>
                        </div>
                    </x-tab>
                    <x-tab name="movie-tab" label="Filmes" hidden>
                        <div class="grid-filter"></div>
                    </x-tab>
                    <x-tab name="game-tab">
                        <x-slot:label>
                            <div class="flex items-center gap-x-1">
                                Games
                                @if ($filters['game']['plataform'] || $filters['game']['developer'])
                                    <div class="inline-grid *:[grid-area:1/1]">
                                        <div class="status status-secondary animate-ping"></div>
                                        <div class="status status-secondary"></div>
                                    </div>
                                @endif
                            </div>
                        </x-slot:label>
                        <div class="grid-filter">
                            <div>
                                <x-choices-offline class="w-full" label="Plataformas" option-sub-label="category"
                                    placeholder="Selecione plataforma" :options="$platforms"
                                    wire:model="filters.game.plataform" searchable
                                    no-result-text="Ops! Nenhum resultado encontrado." clearable />
                            </div>
                            <div>
                                <x-choices-offline class="w-full" label="Desenvolvedoras"
                                    placeholder="Selecione desenvolvedora" :options="$developers"
                                    wire:model="filters.game.developer" searchable values-as-string
                                    no-result-text="Ops! Nenhum resultado encontrado." clearable />
                            </div>
                        </div>
                    </x-tab>
                    <x-tab name="manga-tab" label="Mangás" hidden>
                        <div class="grid-filter"></div>
                    </x-tab>
                    <x-tab name="book-tab">
                        <x-slot:label>
                            <div class="flex items-center gap-x-1">
                                Livros
                                @if (
                                    $filters['book']['format'] ||
                                        $filters['book']['serie'] ||
                                        $filters['book']['author'] ||
                                        $filters['book']['published']
                                )
                                    <div class="inline-grid *:[grid-area:1/1]">
                                        <div class="status status-secondary animate-ping"></div>
                                        <div class="status status-secondary"></div>
                                    </div>
                                @endif
                            </div>
                        </x-slot:label>
                        <div class="grid-filter">
                            <div>
                                <x-choices-offline class="w-full" label="Formatos" option-sub-label="description"
                                    placeholder="Selecione formato de livro" :options="$formats"
                                    wire:model="filters.book.format" searchable
                                    no-result-text="Ops! Nenhum resultado encontrado." clearable />
                            </div>
                            <div>
                                <x-choices-offline class="w-full" label="Séries" placeholder="Selecione série"
                                    :options="$series" wire:model="filters.book.serie" searchable values-as-string
                                    no-result-text="Ops! Nenhum resultado encontrado." clearable />
                            </div>
                            <div>
                                <x-choices-offline class="w-full" label="Autores" placeholder="Selecione autor"
                                    :options="$authors" wire:model="filters.book.author" searchable values-as-string
                                    no-result-text="Ops! Nenhum resultado encontrado." clearable />
                            </div>
                            <div>
                                <x-choices-offline class="w-full" label="Editoras" placeholder="Selecione editora"
                                    :options="$publishedBy" wire:model="filters.book.published" searchable values-as-string
                                    no-result-text="Ops! Nenhum resultado encontrado." clearable />
                            </div>
                        </div>
                    </x-tab>
                    <x-tab name="serie-tab" label="Séries" hidden>
                        <div class="grid-filter"></div>
                    </x-tab>
                </x-tabs>
                <div class="flex flex-row space-x-4 lg:justify-end">
                    <x-button class="btn-sm btn-error" label="Redefinir Filtros" wire:click='resetFilter' spinner />
                    <x-button label="Filtrar" class="btn-sm btn-success" type="submit"
                        x-on:click="open = ! open" />
                </div>
            </x-form>
        </div>
        <x-hr target="loadUserLibrary, resetFilter, types" />
    </div>

    <article wire:loading.remove wire:target.except="loadUserLibrary, types">
        @foreach ($contents as $content)
            <x-ui.library-cover :content="$content->type" :item="$content" />
        @endforeach
    </article>

    <x-ui.loading-coffee except="loadUserLibrary, resetFilter, types" />

    <div class="flex gap-6 w-full">
        @if ($contents->hasPages())
            <div>
                <x-select class="select-sm border-none!" :options="$numbersPage" wire:model.live="page" />
            </div>
        @endif
        <div class="w-full">
            {{ $contents->links() }}
        </div>
    </div>
</section>
