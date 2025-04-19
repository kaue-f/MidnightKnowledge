<div class="flex flex-col w-1/4 gap-4 justify-center items-center">
    <a href="/" wire:navigate class="-mt-40">
        <img src="{{ asset('images/layouts/Logo2.png') }}" style="height: 10rem;">
    </a>

    <div x-data="{ open: $wire.entangle('open') }"
        class="w-full rounded-lg bg-base-200 border border-neutral p-8 shadow-md shadow-white/10">
        <div class="flex justify-center space-x-10 pb-3">
            <p x-on:click="open = false" class="text-center text-lg cursor-pointer self-center"
                :class="{ 'border-b-2 border-primary font-semibold text-primary': !open }">
                Login
            </p>
            <p x-on:click="open = true" class="text-center cursor-pointer text-lg self-center"
                :class="{ 'border-b-2 border-primary font-semibold text-primary': open }">
                Registre-se
            </p>
        </div>
        <div :class="{ 'hidden': open }" class="w-full">
            <livewire:components.auth.login />
        </div>
        <div :class="{ 'hidden': !open }" class="w-full">
            <livewire:components.auth.register>
        </div>
    </div>
</div>
