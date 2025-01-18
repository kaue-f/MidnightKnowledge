<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\Form;

class UserDTO extends Form
{
    public string $username;
    public string $name;
    public string $email;
    public string $birthday;

    protected function rules()
    {
        return [
            'username' => [
                'required',
                'min:3',
                'max:20',
                Rule::unique('users', 'username')->ignore(Auth::id()),
            ],
            'name' => [
                'nullable',
                'min:3',
                'max:100',
            ],
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore(Auth::id()),
            ],
            'birthday' => [
                'nullable',
                'date',
            ]
        ];
    }

    protected function messages()
    {
        return [
            'username.unique' => 'Nome de usuário já está cadastrado.',
            'username.required' => 'Nome de usuário obrigatório.',
            'username.min' => 'Nome de usuário deve ter no minimo 3 caracteres.',
            'username.max' => 'Nome de usuário deve ter no máximo 20 caracteres.',
            'name.min' => 'Nome do usuário deve ter no minimo 3 caracteres.',
            'name.max' => 'Nome do usuário deve ter no máximo 100 caracteres.',
            'email.required' => 'E-mail obrigatório.',
            'email.email' => 'Padrão de email inválido.',
            'email.unique' => 'Este email já está cadastrado.',
            'birthday.date' => 'Formato de data inválido.',
        ];
    }

    public function setUser($user)
    {
        $this->username = $user->username ?? "";
        $this->name = $user->name ?? "";
        $this->email = $user->email ?? "";
        $this->birthday = $user->birthday ?? "";
    }
}
