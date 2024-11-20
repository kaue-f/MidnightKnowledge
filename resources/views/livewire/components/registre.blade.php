<x-form wire:submit="register" no-separator class="w-full">
    <div class="space-y-4">

        <x-input label="Nome de usuário" wire:model='userDTO.name' />
        <x-input label="E-mail" wire:model='userDTO.email' />
    <div class="flex flex-row gap-4">
        <x-password label="Senha" wire:model="userDTO.password"  right/>
        <x-password label="Confirmar senha" wire:model="password"  right/>
    </div>

        <x-slot:actions>
            <x-button label="Registrar" class="w-full btn-secondary" type="submit" spinner="save" />
        </x-slot:actions>
    </div>
</x-form>
