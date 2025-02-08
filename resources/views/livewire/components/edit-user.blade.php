<div class="flex flex-col gap-4 border-b border-white/50 pb-3.5">
    <h1 class="text-lg font-semibold">Editar Informações do Usuário</h1>
    <x-button class="btn-accent" icon="o-pencil-square" label="Editar Usuário" @click="$wire.modalUser = true" />

    <x-modal wire:model="modalUser" title="Editar Usuário" class="backdrop-blur" box-class="w-100 rounded">
        <x-form class="flex flex-col gap-5" wire:submit="edit">
            <x-input label="Nickname" wire:model='userForm.nickname' />
            <x-input label="Nome do usuário" wire:model='userForm.username' />
            <x-input label="E-mail" wire:model='userForm.email' />
            <x-datepicker label="Data de nascimento" wire:model="userForm.birthday" icon="o-calendar"
                :config="$config" />
            <x-slot:actions>
                <div class="flex justify-between w-full">
                    <x-button label="Cancelar" class="btn-sm btn-error" @click="$wire.modalUser = false" />
                    <x-button type="submit" label="Confirmar" class="btn-sm btn-success" spinner="edit" />
                </div>
            </x-slot:actions>
        </x-form>
    </x-modal>
</div>
