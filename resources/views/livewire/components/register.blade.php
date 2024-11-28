<x-form wire:submit="register" no-separator class="w-full">
    <div class="space-y-4">

        <x-input label="Nome de usuário" wire:model='registerDTO.username' />
        <x-input label="E-mail" wire:model='registerDTO.email' />
        <x-password label="Senha" wire:model="registerDTO.password" right />
        <x-password label="Confirmar senha" wire:model="registerDTO.confirmPassword" right />

    </div>

    <x-slot:actions>
        <div class="py-3 w-full">
            <x-button label="Registrar" class="w-full btn-secondary" type="submit" spinner="register" />
        </div>
    </x-slot:actions>
</x-form>
