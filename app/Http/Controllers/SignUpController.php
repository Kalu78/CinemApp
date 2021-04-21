<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;

class SignUpController extends Controller
{

    public function formulaire()
    {
        return view('signup');
    }

    public function Traitement(){

        request()->validate([
            'prenom' => ['required'],
            'nom' => ['required'],
            'email' => ['required', 'email', 'unique:Users'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
        ]);

        $user= User::create ([
            'prenom' => request('prenom'),
            'nom' => request('nom'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);

        return view('/login');
    }
}
