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
        $user = User::create([
            'username' => $user['username'],
            'email' => $user['email'],
            'password' => $user['password'],
        ]);

        if (!isNullOrEmpty($user)) {
            notyf()->success("Seja bem-vindo ao Midnight Knowledge! Prepare-se para explorar um vasto acervo de animes, filmes, séries, livros, games e muito mais.");
            return redirect()->intended('/');
        }
        notyf()->error("Não foi possível criar sua conta. Verifique os dados e tente novamente.");
        return back();
    }


    public function authenticate(array $login)
    {
        if (isNullOrEmpty($login))
            return;

        if (Auth::attempt(['email' => $login['user'], 'password' => $login['password']], $login['remember'])) {
            $this->request->session()->regenerate();
            notyf()->success("Bem-vindo de volta ao Midnight Knowledge!");
            return redirect()->intended('/');
        } elseif (Auth::attempt(['username' => $login['user'], 'password' => $login['password']], $login['remember'])) {
            $this->request->session()->regenerate();
            notyf()->success("Bem-vindo de volta ao Midnight Knowledge!");
            return redirect()->intended('/');
        }

        notyf()->error("Falha na autenticação usuário ou senha inválidos. Verifique e tente novamente.");
        return back();
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
