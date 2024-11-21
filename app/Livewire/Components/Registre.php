<?php

namespace App\Livewire\Components;

use App\DTO\UserDTO;
use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Http\Controllers\AuthController;

class Registre extends Component
{
    #[Validate([
        'userDTO.username' => 'required|min:3|max:15',
        'userDTO.email' => 'required|email|unique:users,email',
        'userDTO.password' => 'required|min:8|max:25',
        'password' => 'same:userDTO.password',
    ], message: [
        'userDTO.username.required' => 'Nome de usuário obrigatório.',
        'userDTO.email.required' => 'Email obrigatório.',
        'userDTO.password.required' => 'Senha não inserida.',
        'userDTO.username.min' => 'Nome de usuário deve ter no minimo 3 caracteres.',
        'userDTO.username.max' => 'Nome de usuário deve ter no máximo 15 caracteres.',
        'userDTO.password.min' => 'Sua senha deve ter no minimo 8 caracteres.',
        'userDTO.password.max' => 'Sua senha deve ter no máximo 25 caracteres.',
        'password.same' => 'Senha não coincide.',
        'email' => 'Padrão de email inválido.',
        'unique' => 'Este email já está cadastrado.',

    ])]
    public array $userDTO;
    public string $password;
    public function render()
    {
        return view('livewire.components.registre');
    }

    public function mount()
    {
        $this->userDTO = (array) new UserDTO;
    }

    public function register(AuthController $authController)
    {
        $this->validate();
        $user = $authController->create($this->userDTO);
        dd($user);
    }
}
