<x-form wire:submit="register" no-separator class="w-full">
    <div class="space-y-4">
        <x-input label="Nickname" wire:model='registerForm.nickname' />
        <x-input label="E-mail" wire:model='registerForm.email' />
        <x-password maxlength="25" label="Senha" wire:model="registerForm.password" right />
        <x-password maxlength="25" label="Confirmar senha" wire:model="registerForm.confirmPassword" right />
    </div>

    <x-slot:actions>
        <div class="py-3 w-full">
            <x-button label="Registrar" class="w-full btn-success" type="submit" spinner="register" />
        </div>
    </x-slot:actions>
</x-form>
