<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $request;
    
    public function __construct(Request $request) {
        $this->request = $request;
    }
    public function create(array $user) {
        $user = User::create([
            'username' => $user['username'],
            'email' => $user['email'],
            'password' => $user['password'],
        ]);
        return $user;
    }
    
    
    public function authenticate(array $user, $remember) {
         
        if(isNullOrEmpty($user))
            return;
          
        if(Auth::attempt(['email' => $user['email'], 'password' => $user['password']], $remember))
        {
          $this->request->session()->regenerate();
            dd(1);
          return redirect()->intended('dashboard');
        }
        
}
}

