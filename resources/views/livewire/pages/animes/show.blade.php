<x-layouts.view :title="$anime->title" :synopsis="$anime->synopsis" :$breadcrumbs>
    <x-slot:cover>
        <livewire:components.ui.image-viewer :image="$anime->image" :title="$anime->title" />
    </x-slot:cover>

    <x-slot:detail>
        <x-ui.classification-badge :classification="$anime->classification" />
        <x-ui.season-row :current="$anime->season" :total="$anime->season_count" />
        <x-ui.detail-row description="Total de Episódios" :value="$anime->episodes" />
        <x-ui.detail-row description="Filmes" :value="$anime->movie_count" />
        <x-ui.detail-row description="OVAs e Especiais" :value="$anime->ova_special_count" />
    </x-slot:detail>

    <x-slot:top>
        <div class="dropdown dropdown-bottom">
            <div tabindex="0" role="button"
                class="flex flex-row space-x-1 items-center hover:cursor-pointer hover:text-primary">
                <x-icon name="{{ $userLibraryEntry['library'] ? 's-bookmark' : 'o-bookmark' }}" class="h-7 w-7" />
                <div class="font-medium items-center">
                    {{ $userLibraryEntry['library'] ? $userLibraryEntry['status'] : '' }}
                </div>
            </div>
            <ul tabindex="0" class="dropdown-content menu bg-base-300 z-1 w-52 p-2 shadow shadow-white/10 rounded">
                <li class="text-xs opacity-50 p-2">
                    {{ $userLibraryEntry['library'] ? 'Atualização de progresso' : 'Adicionar na biblioteca' }}
                </li>
                @foreach ($statuses as $key => $value)
                    <li>
                        <div wire:click='handleLibrary(true,"{{ $key }}")'
                            class="flex justify-between {{ $userLibraryEntry['status'] === $value ? 'text-success font-medium' : '' }} hover:text-primary hover:bg-transparent active:bg-transparent py-1 px-2 hover:cursor-pointer">
                            {{ $value }}
                            <x-icon name="c-plus" class="hover:text-primary" />
                        </div>
                    </li>
                @endforeach
                @if ($userLibraryEntry['library'])
                    <hr class="rounded-none my-2">
                    <li>
                        <div wire:click='handleLibrary(false)'
                            class="flex justify-between hover:text-error hover:bg-transparent active:bg-transparent py-1 px-2 hover:cursor-pointer">
                            Remover da biblioteca
                            <x-icon name="o-bookmark-slash" class="hover:text-primary" />
                        </div>
                    </li>
                @endif
            </ul>
        </div>
        @if ($userLibraryEntry['library'])
            <div>
                <x-swap wire:model.live="userLibraryEntry.favorite" id="custom">
                    <x-slot:true>
                        <x-icon name="s-heart"
                            class="w-7 h-7 hover:cursor-pointer text-red-600 hover:text-red-600/75" />
                    </x-slot:true>
                    <x-slot:false>
                        <x-icon name="o-heart" class="w-7 h-7 hover:cursor-pointer" />
                    </x-slot:false>
                </x-swap>
            </div>
        @endif
    </x-slot:top>

    <x-slot:ratings>
        <x-rating wire:model.live="ratings.value" class="rating-sm bg-yellow-500" total="10" />
        <p wire:text="ratings.value" class="font-medium text-yellow-500"></p>
    </x-slot:ratings>

    <x-slot:tags>
        <x-badge value="{{ $anime->anime_type->name }}"
            class="badge-sm font-medium bg-blue-950 border-0 rounded-sm shadow shadow-white/10 hover:cursor-default" />
        <x-ui.genre-tags :items="$anime->genres()->get()" />
    </x-slot:tags>

    <x-slot:chart>
        <livewire:components.review-charts :content="$anime" :type="App\Enums\ContentType::ANIME" />
    </x-slot:chart>

    <x-slot:comment>
        <livewire:components.comment-section :content="$anime" :type="App\Enums\ContentType::ANIME" />
    </x-slot:comment>
</x-layouts.view>
