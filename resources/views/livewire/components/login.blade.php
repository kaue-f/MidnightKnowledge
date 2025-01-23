<x-form wire:submit="login" no-separator class="w-full">
    <div class="space-y-4">
        <x-input label="Nome de usuário ou e-mail" wire:model='loginDTO.user' />
        <div class="tooltip-secondary" id="capslockAlert" data-tip="CapsLock Ativo">
            <x-password id="passwordInput" onfocus="piru()"  maxlength="25" label="Senha" wire:model='loginDTO.password' right/>
        </div>
        <div class="flex justify-between text-xs py-2 text-base-content/75">
            <x-checkbox class="border-0 checkbox-sm rounded-md bg-accent" label="Lembre-me"
                wire:model="loginDTO.remember" />
            <a href="#" class=" hover:underline hover:text-purple-400">Esqueceu senha</a>
        </div>
        <x-slot:actions>
            <x-button label="Entrar" class="w-full btn-success" type="submit" spinner="login" />
        </x-slot:actions>
    </div>
</x-form>

@push('scripts')
    
        <script src="js/capslock-alert.js"></script>
   
@endpush
