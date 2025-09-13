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
            (Cookie::get('cookie_consent', false))
                ? Cookie::queue('language', $language->value, 60 * 24 * 365)
                : session(['language' => $language->value]);
        }

        $msg = match ($language) {
            LanguageEnum::PT_BR => 'Idioma foi alterado para <strong>Português</strong>',
            LanguageEnum::EN => 'Language was changed to <strong>English<strong>',
        };

        return flash()->info("{$msg}");
    }
}
