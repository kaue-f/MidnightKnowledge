<x-modal wire:model="modalGame" title="Cadastrar Game" class="backdrop-blur-sm" box-class="p-6 w-11/12 max-w-4xl">
    <x-form wire:submit="save" no-separator>
        <div class="flex flex-col gap-4">
            <div class="flex gap-4 justify-center">
                <div class="flex flex-col gap-4 w-2/3">
                    <x-input label="Título" placeholder="Título do game" wire:model="gameForm.title"
                        autocomplete="off" />
                    <div class="w-full">
                        <x-choices-offline label="Gêneros" placeholder="Selecione gênero" placeholder-value=""
                            :options="$genres" option-sub-label="description" option-label="genre"
                            wire:model="gameForm.genres" searchable />
                    </div>
                    <div class="w-full">
                        <x-choices-offline label="Plataforma" option-sub-label="plataform"
                            placeholder="Selecione plataforma" placeholder-value="" :options="$platforms"
                            wire:model="gameForm.platforms" searchable />
                    </div>
                    <div class="flex space-x-4 w-full">
                        <div class="w-1/2">
                            <x-choices label="Classificação" placeholder="Classificação" single
                                option-label="classification" placeholder-value="" :options="$classifications"
                                wire:model="gameForm.classification" />
                        </div>
                        <div class="w-1/2">
                            <x-input label="Desenvolvedora" placeholder="Desenvolvedora" placeholder-value=""
                                wire:model="gameForm.developed_by" autocomplete="off" />
                        </div>
                    </div>
                    <div class="flex space-x-4 w-full">
                        <div class="w-1/2">
                            <x-datepicker label="Lançamento" placeholder="Lançamento do game"
                                wire:model="gameForm.release_date" icon="o-calendar" :config="$config" />
                        </div>
                        <div class="w-1/2">
                            <x-input label="Duração" placeholder="Duração" wire:model="gameForm.duration" x-mask="999"
                                autocomplete="off" />
                        </div>
                    </div>
                </div>
                <div class="w-1/3">
                    <x-file class="space-y-2" wire:model="gameForm.image" accept="image/png, image/jpeg, image/webp">
                        <img src="{{ $gameForm->image ?? asset('/images/layouts/Logo2.png') }}"
                            class="bg-contain rounded-md shadow-xs max-h-96" alt="Imagem do Game" />
                        <p class="px-1 py-2 text-base w-full text-center">
                            Selecione imagem do game
                        </p>
                    </x-file>
                </div>
            </div>
            <fieldset class="fieldset synopsisField @error('gameForm.synopsis') synopsisField-Error @enderror">
                <legend class="fieldset-legend">Sinopse</legend>
                <x-markdown wire:model="gameForm.synopsis" :config="$configSynopsis" omit-error />
                <div class="flex justify-between">
                    @error('gameForm.synopsis')
                    <div class="fieldset text-error label-text-alt p-1 w-full">{{ $message }}</div>
                    @enderror
                    <small class="w-full text-end text-xs opacity-80 p-1 font-light"
                        :class="{'opacity-100 font-normal text-red-500': ($wire.gameForm.synopsis?.length) > 500}">
                        Limite: <span x-text="(500 - ($wire.gameForm.synopsis?.length ?? 0))"></span>
                    </small>
                </div>
            </fieldset>
            <div class="flex justify-between">
                <x-button label="Cancelar" class="btn-error" wire:click="close" spinner />
                <x-button type="submit" spinner="save" label="Salvar" class="btn-success" wire:target="gameForm.image"
                    wire:loading.attr="disabled" />
            </div>
        </div>
    </x-form>
</x-modal>