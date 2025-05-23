<x-modal wire:model="modalBook" title="Cadastrar Livro" class="backdrop-blur" box-class="p-6 w-11/12 max-w-4xl">
    <x-form wire:submit="save" no-separator>
        <div class="flex flex-col gap-4">
            <div class="flex gap-4 justify-center">
                <div class="flex flex-col gap-4 w-2/3">
                    <x-input label="Título" placeholder="Título do livro" wire:model="bookForm.title"
                        autocomplete="off" />
                    <div class="w-full">
                        <x-choices-offline label="Gêneros" placeholder="Selecione gênero" placeholder-value=""
                            :options="$genres" option-sub-label="description" option-label="genre"
                            wire:model="bookForm.genres" searchable
                            no-result-text="Ops! Nenhum resultado encontrado." />
                    </div>
                    <div class="w-full">
                        <x-choices label="Formato de livro" placeholder="Selecione o formato" placeholder-value=""
                            :options="$formats" option-sub-label="description" wire:model="bookForm.formats" />
                    </div>
                    <div class="flex space-x-4 w-full">
                        <div class="w-1/2">
                            <x-choices label="Classificação" placeholder="Classificação" single option-avatar="image"
                                option-label="classification" placeholder-value="" :options="$classifications"
                                wire:model="bookForm.classification" />
                        </div>
                        <div class="w-1/2">
                            <x-datepicker label="Lançamento" placeholder="Lançamento do livro"
                                wire:model="bookForm.release_date" icon="o-calendar" :config="$config" />
                        </div>
                    </div>
                    <div class="flex space-x-4 w-full">
                        <div class="w-1/2">
                            <x-input label="Números de páginas" placeholder="500" wire:model="bookForm.pages"
                                x-mask="9999" autocomplete="off" />
                        </div>
                        <div class="w-1/2">
                            <x-input label="Quantidade de capítulos" placeholder="5" wire:model="bookForm.chapter"
                                x-mask="9999" autocomplete="off" />
                        </div>
                    </div>
                    <div class="flex space-x-4 w-full">
                        <div class="w-1/2">
                            <x-input label="Volume" placeholder="1" wire:model="bookForm.volume" x-mask="9999"
                                autocomplete="off" />
                        </div>
                        <div class="w-1/2" x-data="{ open: true }">
                            <div class="w-full" :class="{ 'hidden': !open }">
                                <x-choices-offline label="Série" single placeholder="Selecione série" :options="$series"
                                    searchable wire:model="gameForm.serie" values-as-string
                                    no-result-text="Nenhum resultado. Clique no botão + para adicionar uma série.">
                                    <x-slot:append>
                                        <x-button icon="o-plus" class="join-item btn-primary"
                                            x-on:click="open = ! open" tooltip="Adicionar" />
                                    </x-slot:append>
                                </x-choices-offline>
                            </div>
                            <div class="w-full" :class="{ 'hidden': open }">
                                <x-input label="Série" placeholder="Digite uma nova série" wire:model="gameForm.serie"
                                    autocomplete="off">
                                    <x-slot:append>
                                        <x-button icon="o-magnifying-glass" class="join-item btn-primary"
                                            x-on:click="open = ! open" tooltip="Buscar" />
                                    </x-slot:append>
                                </x-input>
                            </div>
                        </div>
                    </div>
                    <div class="flex space-x-4 w-full">
                        <div class="w-1/2" x-data="{ open: true }">
                            <div class="w-full" :class="{ 'hidden': !open }">
                                <x-choices-offline label="Autor" single placeholder="Selecione autor" :options="$authors"
                                    searchable wire:model="gameForm.author" values-as-string
                                    no-result-text="Nenhum resultado. Clique no botão + para adicionar um autor.">
                                    <x-slot:append>
                                        <x-button icon="o-plus" class="join-item btn-primary"
                                            x-on:click="open = ! open" tooltip="Adicionar" />
                                    </x-slot:append>
                                </x-choices-offline>
                            </div>
                            <div class="w-full" :class="{ 'hidden': open }">
                                <x-input label="Autor" placeholder="Digite um novo autor" wire:model="gameForm.author"
                                    autocomplete="off">
                                    <x-slot:append>
                                        <x-button icon="o-magnifying-glass" class="join-item btn-primary"
                                            x-on:click="open = ! open" tooltip="Buscar" />
                                    </x-slot:append>
                                </x-input>
                            </div>
                        </div>
                        <div class="w-1/2" x-data="{ open: true }">
                            <div class="w-full" :class="{ 'hidden': !open }">
                                <x-choices-offline label="Editora" single placeholder="Selecione editora"
                                    :options="$series" searchable wire:model="gameForm.published_by" values-as-string
                                    no-result-text="Nenhum resultado. Clique no botão + para adicionar uma editora.">
                                    <x-slot:append>
                                        <x-button icon="o-plus" class="join-item btn-primary"
                                            x-on:click="open = ! open" tooltip="Adicionar" />
                                    </x-slot:append>
                                </x-choices-offline>
                            </div>
                            <div class="w-full" :class="{ 'hidden': open }">
                                <x-input label="Editora" placeholder="Digite uma nova Editora"
                                    wire:model="gameForm.published_by" autocomplete="off">
                                    <x-slot:append>
                                        <x-button icon="o-magnifying-glass" class="join-item btn-primary"
                                            x-on:click="open = ! open" tooltip="Buscar" />
                                    </x-slot:append>
                                </x-input>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-1/3">
                    <x-file class="space-y-2" wire:model="bookForm.image" accept="image/png, image/jpeg, image/webp">
                        <img src="{{ $bookForm->image ?? asset('/images/layouts/Logo2.png') }}"
                            class="bg-contain rounded-md shadow-xs max-h-96" alt="Imagem do Livro" />
                        <p class="px-1 py-2 text-base w-full text-center">
                            Selecione imagem do livro
                        </p>
                    </x-file>
                </div>
            </div>
        </div>
        <fieldset class="fieldset synopsisField @error('bookForm.synopsis') synopsisField-Error @enderror">
            <legend class="fieldset-legend">Sinopse</legend>
            <x-markdown wire:model="bookForm.synopsis" :config="$configSynopsis" omit-error />
            <div class="flex justify-between">
                @error('bookForm.synopsis')
                    <div class="fieldset text-error label-text-alt p-1 w-full">{{ $message }}</div>
                @enderror
                <small class="w-full text-end text-xs opacity-80 p-1 font-light"
                    :class="{ 'opacity-100 font-normal text-red-500': ($wire.bookForm.synopsis?.length) > 2000 }">
                    Limite: <span x-text="(2000 - ($wire.bookForm.synopsis?.length ?? 0))"></span>
                </small>
            </div>
        </fieldset>
        <div class="flex justify-between">
            <x-button label="Cancelar" class="btn-error" wire:click="close" spinner />
            <x-button type="submit" spinner="save" label="Salvar" class="btn-success" wire:target="bookForm.image"
                wire:loading.attr="disabled" />
        </div>
    </x-form>
</x-modal>
