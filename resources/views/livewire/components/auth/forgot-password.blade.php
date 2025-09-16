<x-form wire:submit="sendResetLink" no-separator class="px-4 w-4/5">
    <div class="gap-2">
        <h5 class="text-xl font-semibold text-center">
            {{ trans('components/auth/forgot-password.title') }}
        </h5>
        <p class="text-justify opacity-85">
            {{ trans('components/auth/forgot-password.subtitle') }}
        </p>
    </div>

    <x-input label="{{ trans('components/auth/forgot-password.label') }}" type="email"
        placeholder="{{ trans('components/auth/forgot-password.placeholder') }}" wire:model="email" />

    <x-slot:actions>
        <div class="flex flex-row justify-between w-full">
            <x-button label="{{ trans('components/auth/forgot-password.return') }}" class="btn-accent"
                link="{{ route('welcome') }}" />

            <x-button label="{{ trans('components/auth/forgot-password.send') }}" class="btn-success" type="submit"
                spinner="sendResetLink" />
        </div>
    </x-slot:actions>
</x-form>
