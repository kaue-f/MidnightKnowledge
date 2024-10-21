<div class="w-full justify-center gap-4">
    <div class="join max-[600px]:join-vertical join-horizontal">
        <div class="h-10 bg-accent hover:bg-accent/80 join-item">
            <input type="radio" id="title" name="options" class="peer hidden" wire:model.live="assortment"
                value="title|asc" />
            <label for="title" wire:click='orderSortBy'
                class="flex size-full items-center gap-x-2 font-medium px-[0.85rem] max-[600px]:peer-checked:rounded-t-md peer-checked:rounded-l-md peer-checked:bg-primary text-sm hover:cursor-pointer perer-checked:hover:bg-primary/80">
                Título
                <x-icon
                    name="{{ $this->sortBy['direction'] == 'desc' && $this->sortBy['column'] == 'title' ? 'fas.sort-amount-down-alt' : 'fas.sort-amount-up' }}" />
            </label>
        </div>
        <div class="h-10 bg-accent hover:bg-accent/80 join-item">
            <input type="radio" id="rating" name="options" class="peer hidden" wire:model.live="assortment"
                value="rating|desc" />
            <label for="rating" wire:click='orderSortBy'
                class="flex size-full items-center gap-x-2 font-medium px-[0.85rem] peer-checked:bg-primary text-sm hover:cursor-pointer perer-checked:hover:bg-primary/80">
                Classificação
                <x-icon
                    name="{{ $this->sortBy['direction'] == 'asc' && $this->sortBy['column'] == 'rating' ? 'fas.sort-amount-up' : 'fas.sort-amount-down-alt' }}" />
            </label>
        </div>
        <div class="h-10 bg-accent hover:bg-accent/80 join-item">
            <input type="radio" id="add" name="options" class="peer hidden" wire:model.live="assortment"
                value="created_at|desc" />
            <label for="add" wire:click='orderSortBy'
                class="flex size-full items-center gap-x-2 font-medium px-[0.85rem] peer-checked:bg-primary text-sm hover:cursor-pointer perer-checked:hover:bg-primary/80">
                Recentemente
                <x-icon
                    name="{{ $this->sortBy['direction'] == 'asc' && $this->sortBy['column'] == 'created_at' ? 'fas.sort-amount-up' : 'fas.sort-amount-down-alt' }}" />
            </label>
        </div>
        <div class="h-10 bg-accent hover:bg-accent/80 join-item" wire:click='orderSortBy'>
            <input type="radio" id="year" name="options" class="peer hidden" wire:model.live="assortment"
                value="release_date|desc" />
            <label for="year"
                class="flex size-full items-center gap-x-2 font-medium px-[0.85rem] max-[600px]:peer-checked:rounded-b-md peer-checked:rounded-r-md peer-checked:bg-primary text-sm hover:cursor-pointer perer-checked:hover:bg-primary/80">
                Ano de Lançamento
                <x-icon
                    name="{{ $this->sortBy['direction'] == 'asc' && $this->sortBy['column'] == 'release_date' ? 'fas.sort-amount-up' : 'fas.sort-amount-down-alt' }}" />
            </label>
        </div>
    </div>
</div>
