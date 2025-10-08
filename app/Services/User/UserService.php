<?php

namespace App\Services\User;

use App\Models\User;
use App\Enums\RoleEnum;
use App\Events\UserRegistered;
use App\Livewire\Forms\RegisterForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class UserService
{
    public function create(RegisterForm $register)
    {
        $user = User::create([
            'nickname' => $register->nickname,
            'email' => $register->email,
            'password' => $register->password,
            'language' => app()->getLocale()
        ]);

        if ($user) {
            $user->assignRole(RoleEnum::MEMBER->value);
            $user->profile()->create([
                'avatar' => 'images/midnight/midnight-picture-user.png',
            ]);

            event(new Registered($user));
            event(new UserRegistered($user));
            Auth::login($user);
        }

        return $user;
    }
}
