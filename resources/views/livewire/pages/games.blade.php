<section>
    <div class="flex flex-row flex-1 justify-between items-center">
        <h1 class="text-2xl font-bold">Games</h1>
        <div class="px-4">
            @auth
                <x-icon class="h-8 text-primary hover:text-primary/75 hover:cursor-pointer" name="m-plus"
                    @click="$wire.modalGame = true" />
            @endauth
        </div>
    </div>
    <div x-data="{ open: false }" class="flex flex-col gap-4">
        <div class="flex flex-col-reverse lg:flex-row lg:justify-between lg:items-center gap-4">
            <div class="w-full justify-center gap-4">
                <div class="join max-[600px]:join-vertical join-horizontal">
                    <div class="h-10 bg-accent hover:bg-accent/80 join-item">
                        <input type="radio" id="title" name="options" class="peer hidden" checked />
                        <label for="title" wire:click="gamesQuery('title|asc')"
                            class="flex size-full items-center gap-x-2 font-medium px-[0.85rem] max-[600px]:peer-checked:rounded-t peer-checked:rounded-l peer-checked:bg-primary text-sm hover:cursor-pointer perer-checked:hover:bg-primary/80">
                            Título
                            <x-icon
                                name="{{ $sortBy['direction'] == 'desc' && $sortBy['column'] == 'title' ? 'fas.sort-amount-down-alt' : 'fas.sort-amount-up' }}" />
                        </label>
                    </div>
                    <div class="h-10 bg-accent hover:bg-accent/80 join-item">
                        <input type="radio" id="rating" name="options" class="peer hidden" />
                        <label for="rating" wire:click="gamesQuery('ratings_avg_rating|desc')"
                            class="flex size-full items-center gap-x-2 font-medium px-[0.85rem] peer-checked:bg-primary text-sm hover:cursor-pointer perer-checked:hover:bg-primary/80">
                            Classificação
                            <x-icon
                                name="{{ $sortBy['direction'] == 'asc' && $sortBy['column'] == 'ratings_avg_rating' ? 'fas.sort-amount-up' : 'fas.sort-amount-down-alt' }}" />
                        </label>
                    </div>
                    <div class="h-10 bg-accent hover:bg-accent/80 join-item">
                        <input type="radio" id="add" name="options" class="peer hidden" />
                        <label for="add" wire:click="gamesQuery('created_at|desc')"
                            class="flex size-full items-center gap-x-2 font-medium px-[0.85rem] peer-checked:bg-primary text-sm hover:cursor-pointer perer-checked:hover:bg-primary/80">
                            Recentemente
                            <x-icon
                                name="{{ $sortBy['direction'] == 'asc' && $sortBy['column'] == 'created_at' ? 'fas.sort-amount-up' : 'fas.sort-amount-down-alt' }}" />
                        </label>
                    </div>
                    <div class="h-10 bg-accent hover:bg-accent/80 join-item">
                        <input type="radio" id="year" name="options" class="peer hidden" />
                        <label for="year"wire:click="gamesQuery('release_date|desc')"
                            class="flex size-full items-center gap-x-2 font-medium px-[0.85rem] max-[600px]:peer-checked:rounded-b peer-checked:rounded-r peer-checked:bg-primary text-sm hover:cursor-pointer perer-checked:hover:bg-primary/80">
                            Ano de Lançamento
                            <x-icon
                                name="{{ $sortBy['direction'] == 'asc' && $sortBy['column'] == 'release_date' ? 'fas.sort-amount-up' : 'fas.sort-amount-down-alt' }}" />
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex flex-row items-center space-x-4">
                <x-form wire:submit="gamesQuery">
                    <x-input class="max-[424px]:w-56 w-80 sm:w-96 !rounded-e-none" wire:model="search"
                        placeholder="Search" autocomplete="off" clearable>
                        <x-slot:append>
                            <x-button icon="o-magnifying-glass" class="btn-primary !rounded-s-none" type="submit" />
                        </x-slot:append>
                    </x-input>
                </x-form>
                <div>
                    <x-icon class="h-7 text-primary hover:text-primary/75 hover:cursor-pointer" name="m-funnel"
                        x-on:click="open = ! open" />
                </div>
            </div>
        </div>
        <div x-show.important="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90">
            <x-form wire:submit="gamesQuery">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                    <div>
                        <x-choices-offline class="w-full" label="Gêneros" placeholder="Selecione gênero"
                            option-sub-label="description" placeholder-value="" :options="$genres" option-label="genre"
                            wire:model="genre" searchable />
                    </div>
                    <div>
                        <x-choices-offline class="w-full" label="Plataforma" option-sub-label="category"
                            placeholder="Selecione plataforma" placeholder-value="" :options="$platforms"
                            wire:model="plataform" searchable />
                    </div>
                    <div>
                        <x-choices class="w-full" label="Classificação de conteúdo"
                            placeholder="Selecione classificação" option-label="classification" placeholder-value=""
                            :options="$classifications" wire:model="classification" />
                    </div>
                    <div class="flex gap-x-4 items-end h-full place-self-end pb-2">
                        <x-button class="btn-sm btn-error" label="Redefinir Filtros" wire:click='resetFilter' spinner />
                        <x-button label="Filtrar" class="btn-sm btn-primary" type="submit"
                            x-on:click="open = ! open" />
                    </div>
                </div>
            </x-form>
        </div>
        <x-hr target="gamesQuery" />
    </div>
    <article wire:loading.remove wire:target.except="gamesQuery">
        @foreach ($games as $game)
            <x-ui.cover :item="$game" />
        @endforeach
    </article>
    <div wire:loading class="flex w-full text-center h-full" wire:target.except="gamesQuery">
        <span class="loading loading-spinner w-32 text-primary/75"></span>
    </div>
    <div class="flex gap-6 w-full">
        @if (!isNullOrEmpty($games))
            <div>
                <x-select class="select-sm !border-none" :options="$numbersPage" wire:model.live="page" />
            </div>
        @endif

        <div class="w-full">
            {{ $games->links() }}
        </div>
    </div>
    <livewire:components.modals.add-game :$genres :$platforms :$classifications :user="Auth::user()"
        wire:model.live='modalGame' />
</section>
