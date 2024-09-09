
<x-form wire:submit="save" no-separator class="w-full">
    {{-- <p class="text-center text-lg font-bold">Login</p> --}}
    <div class="space-y-4">
        <x-input label="Name" />
        <x-input label="Password" wire:model="password" />
        <div class="flex justify-end text-xs text-gray-400 mt-2 mb-4">
            <a href="#" class="hover:underline hover:text-purple-400">Forgot Password ?</a>
        </div>
        <x-slot:actions>
            <x-button label="Sign in" class="w-full bg-primary border-0" type="submit" spinner="save" />
        </x-slot:actions>
    </div>
</x-form>
