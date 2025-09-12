<?php

namespace App\Livewire\Components\Layouts;

use Livewire\Component;
use App\Enums\LanguageEnum;
use Livewire\Attributes\On;
use App\Actions\LogoutAction;
use App\Enums\ContentTypeEnum;
use App\Actions\SetLanguageAction;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{
    public bool $showDrawer = false;
    public string $avatar;
    public string $name;
    public array $languages;
    public array $navigationItems;

    public function mount()
    {
        $this->navigationItems = ContentTypeEnum::navigationItems();
        $this->languages = LanguageEnum::array();

        if (Auth::check()) {
            $user = Auth::user();
            $this->avatar = $user->image;
            $this->name =  $user->nickname;
        } else {
            $this->avatar = noneImage();
            $this->name = __('components/layouts/navbar.dropdown.guest');
        }
    }

    public function logout(LogoutAction $logout)
    {
        $logout();
        flash()->info("Você foi desconectado com sucesso. Até logo!");
    }

    public function changeLanguage(LanguageEnum $language)
    {
        if (config('app.locale') !== $language->value) {
            app()->make(SetLanguageAction::class)->execute(Auth::user(), $language);
            $msg = match ($language) {
                LanguageEnum::PT_BR => 'Idioma foi alterado para <strong>Português</strong>',
                LanguageEnum::EN => 'Language was changed to <strong>English<strong>',
            };

            return flash()->info(" {$msg}");
        }
    }

    #[On('updateAvatar')]
    public function changeAvatar()
    {
        $this->avatar = Auth::user()->image;
    }
}
