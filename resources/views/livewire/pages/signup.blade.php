<div class="w-full h-screen flex bg-gradient-to-b from-[#0008A4] to-[#180047]">
    <!-- Lado esquerdo -->
    <div class="hidden md:flex w-1/2 flex-col justify-center items-center text-white p-10">
        <div class="max-w-md text-center space-y-6">
            <h2 class="text-xl font-bold">
                Sua coleção, seu universo geek
            </h2>
            <h1 class="text-5xl font-bold leading-tight">Cria sua conta grátis</h1>

            <!-- Logo -->
            <div class="flex justify-center">
                <img src="{{ asset('images/midnight/midnight-vertical.png') }}" 
                     alt="Midnight Knowledge Logo"
                     class="w-70 h-100">
            </div>
        </div>
    </div>

    <!-- Lado direito -->
    <div class="flex w-full md:w-1/2 flex-col justify-center items-center backdrop-blur bg-black/50 p-10">
        <div class="w-full max-w-md">
            <h2 class="text-lg text-center font-semibold text-white mb-6">
                Cadastre-se e comece a organizar, descobrir e compartilhar suas mídias favoritas.
            </h2>

            <!-- Formulário -->
            <x-form wire:submit="register" no-separator class="w-full space-y-4">
                <x-input 
                    label="Nickname" 
                    wire:model='registerForm.nickname' 
                    hint="O nickname pode conter apenas letras e números, e hífens simples (não pode começar ou terminar com hífen)." 
                />

                <x-input label="E-mail" wire:model='registerForm.email' type="email" />

                <x-password 
                    maxlength="50" 
                    label="Senha" 
                    wire:model="registerForm.password" 
                    hint="A senha deve ter pelo menos 15 caracteres OU no mínimo 8 incluindo número e letra minúscula." 
                    right 
                />

                <x-input 
                    label="Seu país/Região" 
                    wire:model="registerForm.country" 
                    value="Brazil" 
                    readonly 
                />

                <x-slot:actions>
                    <div class="py-3 w-full">
                        <x-button label="Create account" class="w-full btn-success" type="submit" spinner="register" />
                    </div>
                </x-slot:actions>
            </x-form>
        </div>
    </div>
</div>
