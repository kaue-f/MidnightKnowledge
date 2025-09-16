<x-layouts.guest title="{{ trans('titles.verify_email') }}">
    <div class="flex flex-col gap-4">
        <h5 class="text-xl font-semibold text-center">
            {{ trans('components/auth/verify-email.title') }}
        </h5>

        <div class="space-y-1 text-justify">
            <p>{{ trans('components/auth/verify-email.message') }}</p>
            <p class="text-center font-bold">{{ auth()->user()->email }}</p>
            <p>{{ trans('components/auth/verify-email.check') }}</p>
        </div>

        @if (session('message'))
            <x-alert class="alert-success" title="{{ session('message') }}" icon="lucide.mail-check" />
        @endif

        <div class=" flex flex-row justify-center gap-4 mt-2">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <x-button label="{{ trans('components/auth/verify-email.resend') }}" class="btn-info" type="submit" />
            </form>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-button label="{{ trans('components/auth/verify-email.logout') }}" class="btn-accent"
                    type="submit" />
            </form>
        </div>

        <span class="text-xs text-center opacity-75 -mt-1">
            {{ trans('components/auth/verify-email.not_receive') }}
        </span>
    </div>
</x-layouts.guest>
