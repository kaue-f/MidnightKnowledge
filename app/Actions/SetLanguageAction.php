<?php

namespace App\Actions;

use App\Models\User;
use App\Enums\LanguageEnum;
use Illuminate\Support\Facades\Cookie;

class SetLanguageAction
{
    /**
     * Set the application language for the given user or via cookie/session for guests.
     * 
     * @param mixed $user
     * @param \App\Enums\LanguageEnum $language
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function execute(?User $user, LanguageEnum $language)
    {
        if ($user) {
            $user->language = $language;
            $user->save();

            Cookie::forget('language');
            session()->forget('language');
        } else {
            if (Cookie::get('cookie_consent', false)) {
                Cookie::queue('language', $language->value, 60 * 24 * 365);
                return response()->redirectTo(url()->previous());
            } else {
                session(['language' => $language->value]);
            };
        }

        return app()->setLocale($language->value);
    }
}
