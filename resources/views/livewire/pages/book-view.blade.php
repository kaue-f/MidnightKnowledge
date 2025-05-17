<x-layouts.view :title="$book->title" :synopsis="$book->synopsis">
    <x-slot:cover>
        <livewire:components.ui.image-viewer :image="$book->image" :title="$book->title" />
    </x-slot:cover>

    <x-slot:detail>
        <div class="flex flex-wrap gap-2 w-full">
            @foreach ($book->formats()->get() as $item)
                <x-badge value="{{ $item->name }}"
                    class="badge-sm font-medium bg-blue-950 border-0 rounded-sm shadow shadow-white/10 hover:cursor-default" />
            @endforeach
        </div>
        <x-ui.classification-badge :classification="$book->classification" />
        <x-ui.detail-row description="Páginas" :value="$book->pages" />
        @if (!isNullOrEmpty($book->chapter))
            <x-ui.detail-row description="Capítulos" :value="$book->chapter" />
        @endif
        <x-ui.detail-row description="Volume" :value="$book->volume" />
        <x-ui.detail-row description="Série" :value="$book->series" />
        <x-ui.detail-row description="Autor" :value="$book->author" />
        <x-ui.detail-row description="Data de Lançamento" icon="fas.calendar-alt" :value="$book->release_date" />
        <x-ui.detail-row description="Editora" :value="$book->published_by" />
    </x-slot:detail>

    <x-slot:top>
        <div class="dropdown dropdown-bottom">
            <div tabindex="0" role="button" class="flex flex-row space-x-1 items-center">
                <x-icon name="{{ $library ? 's-bookmark' : 'o-bookmark' }}" class="h-7 w-7 hover:text-primary" />
                <div class="font-medium items-center">{{ $library ? $status : '' }}</div>
            </div>
            <ul tabindex="0" class="dropdown-content menu bg-base-300 z-1 w-52 p-2 shadow shadow-white/10 rounded">
                <li class="text-xs opacity-50 p-2">
                    {{ $library ? 'Atualização de progresso' : 'Adicionar na biblioteca' }}
                </li>
                @foreach ($statuses as $key => $value)
                    <li>
                        <div wire:click='handleLibrary(true,"{{ $key }}")'
                            class="flex justify-between {{ $status === $value ? 'text-success font-medium' : '' }} hover:text-primary hover:bg-transparent active:bg-transparent py-1 px-2 hover:cursor-pointer">
                            {{ $value }}
                            <x-icon name="c-plus" class="hover:text-primary" />
                        </div>
                    </li>
                @endforeach
                @if ($library)
                    <hr class="rounded-none my-2">
                    <li>
                        <div wire:click='handleLibrary(false)'
                            class="flex justify-between hover:text-primary hover:bg-transparent active:bg-transparent py-1 px-2 hover:cursor-pointer">
                            Remover da biblioteca
                            <x-icon name="o-bookmark-slash" class="hover:text-primary" />
                        </div>
                    </li>
                @endif
            </ul>
        </div>
        @if ($library)
            <div>
                <x-swap wire:model.live="favorite" id="custom">
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
        {{-- <x-badge value="{{ $book->book_-> }}"
            class="badge-sm font-medium bg-blue-950 border-0 rounded-sm shadow shadow-white/10 hover:cursor-default" /> --}}
        <x-ui.genre-tags :items="$book->genres()->get()" />
    </x-slot:tags>

    <x-slot:chart>
        <livewire:components.review-charts :content="$book" :type="App\Enums\ContentType::BOOK" />
    </x-slot:chart>

    <x-slot:comment>
        <livewire:components.comment-section :content="$book" :type="App\Enums\ContentType::BOOK" />
    </x-slot:comment>
</x-layouts.view>
