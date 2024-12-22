<section class="flex flex-col gap-6 py-6 px-10 ">
    <div class="flex flex-row justify-center space-x-6">
        <div class="flex flex-col gap-4 w-2/5">
            <div class="flex h-[450px]">
                <img class="h-full w-full bg-center rounded shadow-md shadow-black" src="{{ asset($game['image']) }}"
                    alt="{{ $game['title'] }}">
            </div>
            <div class="flex flex-col px-1 space-y-2">
                <div class="flex flex-wrap gap-2 w-full">
                    @foreach ($game->platforms()->get() as $item)
                        <x-badge value="{{ $item->plataform }}"
                            class="badge-sm font-medium hover:bg-[#13138c] border-0 rounded shadow shadow-black hover:cursor-default" />
                    @endforeach
                </div>
                <div class="flex flex-row h-16 w-40 gap-2 items-center">
                    <img class="h-12 w-auto" src="{{ asset($classification['image']) }}"
                        alt="{{ $classification->classification }}">
                    <p class="text-xs font-light">{{ $classification->description }}</p>
                </div>
                <div class="flex flex-col space-y-1 w-full">
                    <p class="font-light text-base-content/85">Data de Lançamento</p>
                    <div class="space-x-0.5 items-center">
                        <x-icon class="text-base-content/75 w-3 h-3" name="fas.calendar-alt" />
                        <span class="text-sm capitalize">{{ hasDate($game->release_date) }}</span>
                    </div>
                </div>
                <div class="flex flex-col space-y-1 w-full">
                    <p class="font-light text-base-content/85">Desenvolvedor</p>
                    <span class="text-sm">{{ hasValue($game->developed_by) }}</span>
                </div>
                <div class="flex flex-col space-y-1 w-full">
                    <p class="font-light text-base-content/85">Duração média do jogo</p>
                    <div class="space-x-0.5 items-center">
                        <x-icon class="text-base-content/75 w-3 h-3" name="bi.clock-fill" />
                        <span class="text-sm">{{ hasValue($game->durantion) }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-4 w-full">
            <div class="flex flex-col h-[450px] gap-4">
                <div class="flex flex-col w-full">
                    <div class="flex justify-between items-center">
                        <div class="flex flex-1 flex-row space-x-4 items-center">
                            <p class="text-3xl font-semibold">{{ $game->title }} </p>
                        </div>
                        <div class="flex gap-4">
                            <div class="dropdown dropdown-bottom">
                                <div tabindex="0" role="button" class="flex flex-row space-x-1 items-center">
                                    <x-icon name="{{ $library ? 'bi.bookmark-fill' : 'bi.bookmark' }}"
                                        class="h-7 w-7 hover:text-primary" />
                                    <div class="font-medium items-center">{{ $library ?? $status }}</div>
                                </div>
                                <ul tabindex="0"
                                    class="dropdown-content menu bg-base-300 rounded z-[1] w-52 p-2 shadow">
                                    <li class="text-xs text-base-content/70 p-2">
                                        {{ $library ? 'Atualização de progresso' : 'Adicionar na biblioteca' }}
                                    </li>
                                    @foreach ($statuses as $key => $value)
                                        <li>
                                            <div wire:click='handleLibrary(true,"{{ $key }}")'
                                                class="flex justify-between hover:text-primary hover:bg-transparent active:bg-transparent py-1 px-2 hover:cursor-pointer">
                                                {{ $value }}
                                                <x-icon name="bi.bookmark-plus" class="hover:text-primary" />
                                            </div>
                                        </li>
                                    @endforeach
                                    @if ($library == true)
                                        <hr class="rounded-none my-2">
                                        <li>
                                            <div wire:click='handleLibrary(false)'
                                                class="flex justify-between hover:text-primary hover:bg-transparent active:bg-transparent py-1 px-2 hover:cursor-pointer">
                                                Remover da biblioteca
                                                <x-icon name="bi.bookmark-dash" class="hover:text-primary" />
                                            </div>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            <div>
                                <x-swap wire:model.live="favorite" id="custom">
                                    <x-slot:true>
                                        <x-icon name="bi.heart-fill"
                                            class="w-7 h-7 hover:cursor-pointer text-red-600 hover:text-red-600/75" />
                                    </x-slot:true>
                                    <x-slot:false>
                                        <x-icon name="bi.heart" class="w-7 h-7 hover:cursor-pointer" />
                                    </x-slot:false>
                                </x-swap>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between" x-data="{ open: $wire.entangle('ratings.open') }">
                        <div role="button" class="flex space-x-1 items-center" :class="{ 'hidden': open }"
                            x-on:click="open = ! open">
                            <x-icon name="bi.star" class="w-4 h-4 text-yellow-500" />
                            <p class="text-yellow-500">{{ $ratings['avg'] }}</p>
                        </div>
                        <div :class="{ 'hidden': !open }">
                            <x-rating wire:model.live="ratings.value" class="bg-yellow-500" total="10"
                                x-on:click.debounce.500ms="open = ! open" />
                        </div>
                    </div>
                </div>
                <div class="flex gap-2">
                    <div class="flex flex-col gap-4 w-full">
                        <div class="flex flex-wrap gap-2">
                            @foreach ($game->genres()->get() as $item)
                                <x-badge value="{{ $item->genre }}"
                                    class="badge-sm font-medium hover:bg-[#11650bbf] border-0 rounded shadow shadow-black hover:cursor-default" />
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full">
                    <p class="font-light text-base-content/85">Sinopse</p>
                    <p class="text-justify">
                        {{ hasValue($game->synopsis) }}
                    </p>
                </div>
            </div>
            <div x-data="{ open: true }" class="flex flex-col w-full">
                <div class="flex justify-center gap-2 w-full border-b border-black/65">
                    <div class="px-2 pb-1 hover:cursor-pointer"
                        :class="open ? 'border-b-2 border-primary font-medium' : 'font-light'" x-on:click="open = true">
                        Avaliações
                    </div>
                    <div class="px-2 pb-1 hover:cursor-pointer"
                        :class="!open ? 'border-b-2 border-primary font-medium' : 'font-light'"
                        x-on:click="open = false">
                        Estatísticas
                    </div>
                </div>
                <div class="" :class="open ? '' : 'hidden'">
                </div>
                <div class="" :class="!open ? '' : 'hidden'">
                </div>
            </div>
        </div>
    </div>
</section>
