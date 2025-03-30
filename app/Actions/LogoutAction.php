<?php

namespace App\Actions;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutAction
{
    public function __invoke()
    {
        Auth::logout();
        Session::invalidate();
        Session::regenerateToken();

        return redirect('/');
    }
}
