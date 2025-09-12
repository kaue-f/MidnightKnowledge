<x-form wire:submit="login" no-separator class="w-full">
    <div class="space-y-4 ">
        <x-input label="Nickname ou e-mail" wire:model='loginForm.user' />
        <x-password maxlength="25" label="Senha" wire:model='loginForm.password' right />
        <div class="flex justify-between text-xs py-2 opacity-80">
            <x-checkbox class="border-0 checkbox-sm rounded-md bg-accent checked:checkbox-primary" label="Lembre-me"
                wire:model="loginForm.remember" />
            <a href="#" class=" hover:underline hover:text-purple-400">Esqueceu senha</a>
        </div>
        <div class="w-full space-y-2">
        <x-button label="Entrar" class="w-full btn-success" type="submit" spinner="login" />
        <span class="text-xs flex justify-center items-center">
            Ou</span >
        <a href="{{ route('signup') }}" class="hover:underline text-xs flex justify-center items-center">
            Crie uma conta
        </a>
    </div>
    </div>

</x-form>