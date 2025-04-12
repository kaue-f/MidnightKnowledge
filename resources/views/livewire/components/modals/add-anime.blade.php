<x-modal wire:model="modalAnime" title="Cadastrar Anime" class="backdrop-blur-sm" box-class="p-6 w-11/12 max-w-4xl">
    <x-form wire:submit="save" no-separator>
        <div class="flex flex-col gap-4">
            <div class="flex gap-4 justify-center">
                <div class="flex flex-col gap-4 w-2/3">
                    <x-input label="Título" placeholder="Título do game" wire:model="animeForm.title"
                        autocomplete="off" />
                    <div class="w-full">
                        <x-choices-offline label="Gêneros" placeholder="Selecione gênero" placeholder-value=""
                            :options="$genres" option-sub-label="description" option-label="genre"
                            wire:model="animeForm.genres" searchable
                            no-result-text="Ops! Nenhum resultado encontrado." />
                    </div>
                    <div class="flex space-x-4 w-full">
                        <div class="w-1/2">
                            <x-choices label="Classificação" placeholder="Classificação" single
                                option-label="classification" placeholder-value="" :options="$classifications"
                                wire:model="animeForm.classification" />
                        </div>
                        <div class="w-1/2">
                            <x-datepicker label="Lançamento" placeholder="Lançamento do game"
                                wire:model="animeForm.release_date" icon="o-calendar" :config="$config" />
                        </div>
                    </div>
                    <div class="flex space-x-4 w-full">
                        <div class="w-1/2">
                            <x-input label="Total de episódio" placeholder="12" wire:model="animeForm.episodes"
                                x-mask="9999" autocomplete="off" />
                        </div>
                        <div class="w-1/2">
                            <x-choices label="Formato do anime" placeholder="Selecione o formato" placeholder-value=""
                                single :options="$animeTypes" option-sub-label="description" wire:model="animeForm.type" />
                        </div>
                    </div>
                    <div class="flex space-x-4 w-full">
                        <div class="w-1/2">
                            <x-input label="Temporada atual" placeholder="1" wire:model="animeForm.season"
                                x-mask="9999" autocomplete="off"
                                hint="Alguns animes usam arco no lugar de temporada." />
                        </div>
                        <div class="w-1/2">
                            <x-input label="Número total de temporadas" placeholder="1"
                                wire:model="animeForm.season_count" x-mask="9999" autocomplete="off"
                                hint="Alguns animes usam arco no lugar de temporada." />
                        </div>
                    </div>
                    <div class="flex space-x-4 w-full">
                        <div class="w-1/2">
                            <x-input label="Quantidade de filmes" placeholder="1" wire:model="animeForm.movie_count"
                                x-mask="9999" autocomplete="off" />
                        </div>
                        <div class="w-1/2">
                            <x-input label="Quantidade de OVAs e especiais" placeholder="1"
                                wire:model="animeForm.ova_special_count" x-mask="9999" autocomplete="off" />
                        </div>
                    </div>
                </div>
                <div class="w-1/3">
                    <x-file class="space-y-2" wire:model="animeForm.image" accept="image/png, image/jpeg, image/webp">
                        <img src="{{ $animeForm->image ?? asset('/images/layouts/Logo2.png') }}"
                            class="bg-contain rounded-md shadow-xs max-h-96" alt="Imagem do Game" />
                        <p class="px-1 py-2 text-base w-full text-center">
                            Selecione imagem do anime
                        </p>
                    </x-file>
                </div>
            </div>
        </div>
        <fieldset class="fieldset synopsisField @error('animeForm.synopsis') synopsisField-Error @enderror">
            <legend class="fieldset-legend">Sinopse</legend>
            <x-markdown wire:model="animeForm.synopsis" :config="$configSynopsis" omit-error />
            <div class="flex justify-between">
                @error('animeForm.synopsis')
                    <div class="fieldset text-error label-text-alt p-1 w-full">{{ $message }}</div>
                @enderror
                <small class="w-full text-end text-xs opacity-80 p-1 font-light"
                    :class="{ 'opacity-100 font-normal text-red-500': ($wire.animeForm.synopsis?.length) > 1500 }">
                    Limite: <span x-text="(1500 - ($wire.animeForm.synopsis?.length ?? 0))"></span>
                </small>
            </div>
        </fieldset>
        <div class="flex justify-between">
            <x-button label="Cancelar" class="btn-error" wire:click="close" spinner />
            <x-button type="submit" spinner="save" label="Salvar" class="btn-success" wire:target="animeForm.image"
                wire:loading.attr="disabled" />
        </div>
    </x-form>
</x-modal>
