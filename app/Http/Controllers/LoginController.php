<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;

class LoginController extends Controller
{
    public function formulaire(){
        if(auth()->user()){
            flash("You are already connected")->error();

            return redirect('/');
        }

        return view('login');
    }

    public function traitement(){
        request()->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $resultat = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if($resultat) {
            flash("You are connected")->success();

            return redirect('/');
        }
        
        return back()->withErrors([
            'email' => 'This does not match any account',
        ]);
    }
}
