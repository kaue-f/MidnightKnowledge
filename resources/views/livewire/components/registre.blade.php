<x-form wire:submit="register" no-separator class="w-full">
    <div class="space-y-4">

        <x-input label="Nome de usuário" wire:model='userDTO.username' />
        <x-input label="E-mail" wire:model='userDTO.email' />
        <x-password label="Senha" wire:model="userDTO.password" right />
        <x-password label="Confirmar senha" wire:model="password" right />

    </div>

    <x-slot:actions>
        <div class="py-3 w-full">
            <x-button label="Registrar" class="w-full btn-secondary" type="submit" spinner="register" />
        </div>
    </x-slot:actions>
</x-form>
