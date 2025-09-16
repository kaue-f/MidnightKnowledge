<x-form wire:submit="resetPassword" no-separator class="px-4 w-4/5">
    <div class="gap-2">
        <h5 class="text-xl font-semibold text-center">
            {{ trans('components/auth/reset-password.title') }}
        </h5>
    </div>

    <x-input label="{{ trans('components/auth/reset-password.label.email') }}" disabled type="email"
        wire:model="email" />

    <x-password maxlength="25" label="{{ trans('components/auth/reset-password.label.password') }}" wire:model="password"
        right hint="{{ trans('components/auth/reset-password.label.password_hint') }}"
        placeholder="{{ trans('components/auth/reset-password.placeholder.password') }}" />

    <x-password maxlength="25" label="{{ trans('components/auth/reset-password.label.confirm_password') }}"
        placeholder="{{ trans('components/auth/reset-password.placeholder.confirm_password') }}"
        wire:model="password_confirmation" right />

    <x-slot:actions>
        <x-button label="{{ trans('components/auth/reset-password.label.reset') }}" class="btn-success w-full"
            type="submit" spinner="resetPassword" />
    </x-slot:actions>
</x-form>
