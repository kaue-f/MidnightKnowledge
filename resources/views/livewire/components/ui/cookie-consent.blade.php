<div class="fixed flex justify-center items-center inset-x-0 bottom-6 z-50">
    <div class="flex flex-col bg-base-300 rounded-sm py-2 px-4 shadow-sm shadow-accent/75 gap-0.5">
        <p class="font-medium text-sm">
            {{ __('components/ui/cookie-consent.message') }}
            <span>
                {{ __('components/ui/cookie-consent.read') }}
                <a class="font-semibold hover:text-primary underline" href="{{ route('home') }}" target="_blank"
                    rel="noopener noreferrer">
                    {{ __('components/ui/cookie-consent.privacy_policy') }}
                </a>
            </span>
        </p>
        <div class="flex justify-center gap-2 items-center">
            <p class="font-medium text-sm">
                {{ __('components/ui/cookie-consent.question') }}
            </p>
            <x-button label="{{ __('components/ui/cookie-consent.accept') }}" class="btn-success btn-xs btn-outline"
                wire:click="handle(true)" />
            <x-button label="{{ __('components/ui/cookie-consent.reject') }}" class="btn-error btn-xs btn-outline"
                wire:click="handle(false)" />
        </div>
    </div>
</div>
