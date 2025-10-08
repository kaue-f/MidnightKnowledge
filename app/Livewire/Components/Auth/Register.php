<?php

namespace App\Livewire\Components\Auth;

use Livewire\Component;
use App\Services\User\UserService;
use App\Livewire\Forms\RegisterForm;

class Register extends Component
{
    public RegisterForm $registerForm;

    public function register()
    {
        $this->validate();

        try {
            $user = app()->make(UserService::class)->create($this->registerForm);

            if (!$user) {
                flash()->warning(trans('components/auth/register.messages.warning'));
                return back();
            }

            flash()->success(trans('components/auth/register.messages.success'));
            return redirect()->route('verification.notice');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            flash()->error(trans('components/auth/register.messages.error'));
            return back();
        }
    }
}
