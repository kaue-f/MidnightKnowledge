<x-form wire:submit="register" no-separator class="w-full">
    <div class="space-y-4">
        <x-input label="{{ trans('components/auth/register.label.nickname') }}" wire:model='registerForm.nickname'
            hint="{{ trans('components/auth/register.label.nickname_hint') }}"
            placeholder="{{ trans('components/auth/register.placeholder.nickname') }}" />

        <x-input label="{{ trans('components/auth/register.label.email') }}"
            placeholder="{{ trans('components/auth/register.placeholder.email') }}" wire:model='registerForm.email'
            type="email" />

        <x-password maxlength="25" label="{{ trans('components/auth/register.label.password') }}"
            wire:model="registerForm.password" right hint="{{ trans('components/auth/register.label.password_hint') }}"
            placeholder="{{ trans('components/auth/register.placeholder.password') }}" />

        <x-password maxlength="25" label="{{ trans('components/auth/register.label.confirm_password') }}"
            placeholder="{{ trans('components/auth/register.placeholder.confirm_password') }}"
            wire:model="registerForm.password_confirmation" right />
    </div>
    <x-slot:actions>
        <div class="w-full space-y-2">
            <x-button label="{{ trans('components/auth/register.label.register') }}" class="w-full btn-success"
                type="submit" spinner="register" />
            <span class="text-xs flex justify-center items-center">
                {{ trans('components/auth/register.or') }}
            </span>
            <a href="{{ route('welcome') }}" class="hover:underline text-xs flex justify-center items-center">
                {{ trans('components/auth/register.login') }}
            </a>
        </div>
    </x-slot:actions>
</x-form>
