<div class="flex flex-col gap-4 border-b border-white/50 pb-3.5">
    <h1 class="text-lg font-semibold">Alterar Imagem de Perfil</h1>

    <div class="flex flex-col gap-4 items-start">
        <div class="px-2.5">
            <x-file wire:model.live="image" accept="image/png, image/jpeg" change-text="Seleciona imagem de perfil">
                <img src="{{ asset($avatar) }}" class="size-52 rounded-full border-2 border-accent" />
            </x-file>
        </div>
        <div class="flex flex-row space-x-24">
            {{-- <x-button class="btn-xs btn-error" label="Cancelar" @click="$wire.image=''" /> --}}
            <x-button class="btn-sm btn-success" label="Salvar" wire:click='changeImage' spinner />
        </div>
    </div>
</div>
