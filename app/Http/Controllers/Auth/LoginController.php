<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    public function __construct(){
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function showLoginForm(){
        return view('auth.login');
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }

    public function login()
    {
        $credentials = $this->validate(request(), [
            $this->username() => 'required|string',
            'password' => 'required|string'
        ]);
        
        
    
        if(Auth::attempt($credentials))
        {
            return redirect()->intended('home');
        };

        return back()->withErrors([$this->username() => 'No concuerda tu CMP'])
        ->withImput(request([$this->username()]));
    
    }

    public function username(){
        return 'doc_cmp';
    }
}
