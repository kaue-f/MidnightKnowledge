<div class="flex flex-col gap-4 border-b border-white/50 pb-3.5">
    <h1 class="text-lg font-semibold">Alterar Senha do Usuário</h1>
    <x-button class="btn-accent" icon="o-key" label="Alterar Senha" @click="$wire.passwordModal = true" />
    <x-modal wire:model="passwordModal" class="backdrop-blur" box-class="w-96 rounded" title="Alterar Senha">
        <div class="flex flex-col space-y-2 px-2">
            <x-password label="Senha atual" wire:model="passwordForm.currentPassword" clearable />
            <x-password label="Nova senha" wire:model="passwordForm.password" clearable />
            <x-password label="Confirmar senha" wire:model="passwordForm.confirmPassword" clearable />
        </div>
        <x-slot:actions>
            <div class="flex justify-between w-full">
                <x-button label="Cancelar" class="btn-sm btn-error" @click="$wire.passwordModal  = false" />
                <x-button label="Confirmar" class="btn-sm btn-success" spinner wire:click='changerPassword' />
            </div>
        </x-slot:actions>
    </x-modal>
</div>
