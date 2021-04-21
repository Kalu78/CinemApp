<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reservation;
use Auth;

class AccountController extends Controller
{
    public function dashboard(){

        if(auth()->guest()){
            flash("You must be connected")->error();

            return redirect('/connexion/login');
        }

        $user = auth()->user();

        $user_id = Auth::user()->id;
        $reservations = Reservation::with('users')->where('user_id' ,'=', $user_id)->get();

        return view ('info', [
            'reservations' => $reservations
        ]);
    }

    public function logout(){
        auth()->logout();

        return redirect('/');
    }

}
