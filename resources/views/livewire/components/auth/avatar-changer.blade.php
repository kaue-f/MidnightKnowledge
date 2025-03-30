<div class="flex flex-col gap-4">
    <h1 class="text-lg font-semibold">Alterar Imagem de Perfil</h1>
    <x-form class="flex flex-col gap-4 items-start" wire:submit="changeImage">
        <div class="px-2.5 relative">
            <x-file wire:model="image" accept="image/png, image/jpeg" change-text="Seleciona imagem de perfil">
                <img src="{{ asset($avatar) }}" class="size-52 rounded-full border-2 border-accent"
                    wire:loading.class.remove="border-2" />
                <div wire:loading wire:target="changeImage"
                    class="absolute size-52 rounded-full border-2 border-b-transparent border-l-primary/60 border-t-primary/80 border-r-primary inset-0 animate-spin">
                </div>
            </x-file>
        </div>
        <div class="flex flex-row space-x-24">
            <x-button class="btn-sm btn-success" label="Salvar" type="submit" spinner="changeImage" wire:target="image"
                wire:loading.attr="disabled" />
        </div>
    </x-form>
</div>