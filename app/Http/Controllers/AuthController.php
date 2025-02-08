<?php

namespace App\Http\Controllers;

use App\Enums\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct(private readonly Request $request) {}
    public function create(array $user)
    {
        try {
            $user = User::create([
                'nickname' => $user['nickname'],
                'email' => $user['email'],
                'password' => $user['password'],
                'role' => Roles::Member,
            ]);

            if (isNullOrEmpty($user)) {
                notyf()->warning("Falha ao criar sua conta. Verifique os dados e tente novamente.");
                return back();
            }

            Auth::login($user);
            $this->request->session()->regenerate();
            notyf()->success("Seja bem-vindo ao Midnight Knowledge! Prepare-se para explorar um vasto acervo de animes, filmes, séries, livros, games e muito mais.");
            return redirect('/');
        } catch (\Throwable $th) {
            notyf()->error("Falha ao criar sua conta. Verifique os dados e tente novamente.");
            return back();
        }
    }

    public function authenticate(array $login)
    {
        if (isNullOrEmpty($login)) return;

        if (
            Auth::attempt(['email' => $login['user'], 'password' => $login['password']], $login['remember']) ||
            Auth::attempt(['nickname' => $login['user'], 'password' => $login['password']], $login['remember'])
        ) {
            $this->request->session()->regenerate();
            notyf()->success("Bem-vindo de volta ao Midnight Knowledge!");
            return redirect('/');
        }

        return false;
    }

    public function logout()
    {
        Auth::logout();
        $this->request->session()->invalidate();
        $this->request->session()->regenerateToken();
        notyf()->info("Você foi desconectado com sucesso. Até logo!");
        return redirect('/');
    }
}
