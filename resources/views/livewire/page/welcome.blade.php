<article
    class="flex flex-col w-1/5 gap-4 justify-center rounded-lg items-center backdrop-blur-sm bg-accent/30 px-10 py-6">
    <h1 class="w-full text-center font-bold text-2xl">Midnight Knowledge</h1>
    <div x-data="{ open: false }" class="w-full">
        <div class="flex justify-center space-x-10 pb-3">
            <p x-on:click="open = ! open" class="text-center cursor-pointer"
                :class="{ 'border-b-2 border-secondary font-bold text-lg text-secondary': !open }">
                Login
            </p>
            <p x-on:click="open = ! open" class="text-center cursor-pointer"
                :class="{ 'border-b-2 border-secondary font-bold text-lg text-secondary ': open }">
                Registre-se
            </p>
        </div>
        <div :class="{ 'hidden': open }" class="w-full">
            <livewire:components.login />
        </div>
        <div :class="{ 'hidden': !open }" class="w-full">
            <livewire:components.registre>
        </div>
    </div>
</article>
