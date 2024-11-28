<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function create(array $user)
    {
        try {
            $user = User::create([
                'username' => $user['username'],
                'email' => $user['email'],
                'password' => $user['password'],
            ]);
            return $user;
        } catch (\Throwable $th) {
            return;
        }
    }


    public function authenticate(array $login)
    {
        if (isNullOrEmpty($login))
            return;

        if (Auth::attempt(['email' => $login['user'], 'password' => $login['password']], $login['remember'])) {
            $this->request->session()->regenerate();
            return redirect()->intended('/');
        } elseif (Auth::attempt(['username' => $login['user'], 'password' => $login['password']], $login['remember'])) {
            $this->request->session()->regenerate();
            return redirect()->intended('/');
        }
    }
}
