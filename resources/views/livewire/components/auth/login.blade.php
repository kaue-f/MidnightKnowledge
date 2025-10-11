<x-form wire:submit="login" no-separator class="w-full">
    <div class="space-y-4">
        <div class="space-y-4 relative">
            <x-input label="{{ trans('components/auth/login.label.user') }}" wire:model='loginForm.user'
                placeholder="{{ trans('components/auth/login.placeholder.user') }}" />
            <div class="mb-16 relative">
                <x-password maxlength="25" label="{{ trans('components/auth/login.label.password') }}"
                    placeholder="{{ trans('components/auth/login.placeholder.password') }}" wire:model='loginForm.password'
                    right />
                <x-ui.alert-capslock />
            </div>
        </div>

        <div class="flex justify-between items-center text-xs py-2 opacity-80">
            <x-checkbox class="border-0 checkbox-sm rounded-md bg-accent checked:checkbox-primary"
                label="{{ trans('components/auth/login.label.remember') }}" wire:model="loginForm.remember" />
            <a wire:navigate href="{{ route('password.request') }}" class=" hover:underline hover:text-purple-400">
                {{ trans('components/auth/login.forgot_password') }}
            </a>
        </div>
        <x-slot:actions>
            <div class="w-full space-y-2">
                <x-button label="{{ trans('components/auth/login.label.confirm') }}" class="w-full btn-success"
                    type="submit" spinner="login" />
                <span class="text-xs flex justify-center items-center">
                    {{ trans('components/auth/login.or') }}
                </span>
                <a href="{{ route('signup') }}" class="hover:underline text-xs flex justify-center items-center">
                    {{ trans('components/auth/login.register') }}
                </a>
            </div>
        </x-slot:actions>
    </div>
</x-form>
