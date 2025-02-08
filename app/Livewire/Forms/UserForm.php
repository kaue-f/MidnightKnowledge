<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserForm extends Form
{
    public string $nickname;
    public string $username;
    public string $email;
    public string $birthday;

    protected function rules()
    {
        return [
            'nickname' => [
                'required',
                'min:3',
                'max:20',
                Rule::unique('users', 'nickname')->ignore(Auth::id()),
            ],
            'username' => [
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
            'nickname.unique' => 'Nickname já está cadastrado.',
            'nickname.required' => 'Nickname obrigatório.',
            'nickname.min' => 'Nickname deve ter no minimo 3 caracteres.',
            'nickname.max' => 'Nickname deve ter no máximo 20 caracteres.',
            'username.min' => 'Nome do usuário deve ter no minimo 3 caracteres.',
            'username.max' => 'Nome do usuário deve ter no máximo 100 caracteres.',
            'email.required' => 'E-mail obrigatório.',
            'email.email' => 'Padrão de email inválido.',
            'email.unique' => 'Este email já está cadastrado.',
            'birthday.date' => 'Formato de data inválido.',
        ];
    }

    public function setUser($user)
    {
        $this->nickname = $user->nickname ?? "";
        $this->username = $user->username ?? "";
        $this->email = $user->email ?? "";
        $this->birthday = $user->birthday ?? "";
    }
}
