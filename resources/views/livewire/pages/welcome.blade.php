<div class="flex flex-col w-full max-w-md mx-auto gap-6 justify-center items-center px-4 ">
    <a href="/" wire:navigate class="mt-6 sm:mt-0">
        <img src="{{ asset('images/midnight/midnight-horizontal.png') }}" class="h-28 sm:h-40">
    </a>

    <div class="w-full bg-base-200 p-6 sm:p-8 rounded-xl"
        style="background-color:transparent">
        
        <div class="w-full">
            <livewire:components.auth.login />
        </div>
       
    </div>
</div>
