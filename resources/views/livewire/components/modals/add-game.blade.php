<x-form wire:submit='save' no-separator>
    <div class="flex flex-col gap-4">
        <div class="flex gap-4 justify-center">
            <div class="flex flex-col gap-4 w-2/3">
                <x-input label="Título" placeholder="Título do game" wire:model='gameDTO.title' />
                <div class="w-full">
                    <x-choices label="Gêneros" placeholder="Selecione gênero" placeholder-value="" :options="$genres"
                        option-label="genre" wire:model='gameDTO.genres' />
                </div>
                <div class="w-full">
                    <x-choices label="Plataforma" option-sub-label="plataform" placeholder="Selecione plataforma"
                        placeholder-value="" :options="$platforms" wire:model='gameDTO.platforms' />
                </div>
                <div class="flex space-x-4 w-full">
                    <div class="w-1/2">
                        <x-choices label="Classificação" placeholder="Classificação" single
                            option-label="classification" placeholder-value="" :options="$classifications"
                            wire:model='gameDTO.classification' />
                    </div>
                    <div class="w-1/2">
                        <x-input label="Desenvolvedora" placeholder="Desenvolvedora" placeholder-value=""
                            wire:model='gameDTO.developed_by' />
                    </div>
                </div>
                <div class="flex space-x-4 w-full">
                    <div class="w-1/2">
                        <x-datetime label="Lançamento" placeholder="Lançamento do game"
                            wire:model='gameDTO.release_date' />
                    </div>
                    <div class="w-1/2">
                        <x-input label="Duração" placeholder="Duração" wire:model='gameDTO.duration' x-mask="999" />
                    </div>
                </div>
            </div>
            <div class="w-1/3">
                <x-file class="space-y-2" wire:model.blur="gameDTO.image" crop-after-change
                    accept="image/png, image/jpeg" change-text="Seleciona capa" crop-title-text="Cortar imagem"
                    crop-cancel-text="Cancelar" crop-save-text="Corta">
                    <img src="{{ $gameDTO->image ?? asset('/images/layouts/Logo2.png') }}"
                        class="bg-contain rounded-md border border-accent shadow-sm max-h-96" alt="Imagem do Game" />
                    <p class="px-1 py-2 text-base">
                        Selecione imagem do game
                    </p>
                </x-file>
            </div>
        </div>
        <label class="form-control">
            <div class="label">
                <span class="label-text">Sinopse</span>
            </div>
            <x-textarea wire:model='gameDTO.synopsis' placeholder="Sinopse do game..." rows="5" inline />
        </label>
        <div class="flex justify-between">
            <x-button type="submit" label="Cancelar" class="btn-error" />
            <x-button type="submit" spinner='save' label="Salvar" class="btn-success" />
        </div>
    </div>
</x-form>
