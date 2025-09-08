<?php

namespace App\Livewire\Components\Ui;

use Livewire\Component;
use Illuminate\Support\Facades\Cookie;

class CookieConsent extends Component
{
    public function handle(bool $consent)
    {
        Cookie::queue('cookie_consent', $consent, 60 * 24 * 365 * 5);
        flash()
            ->info(
                ($consent)
                    ? __('components/ui/cookie-consent.notification.accepted')
                    : __('components/ui/cookie-consent.notification.recourse')
            );

        return response()->redirectTo(url()->previous());
    }
}
