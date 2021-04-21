<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Salle;
use App\Models\Salle1_Place;
use App\Models\Salle2_Place;
use App\Models\Reservation;
use App\Models\User as User;


class FilmController extends Controller
{
    public function index(){
        $films = Film::all();
        
        return view("/accueil",[
            'films' => $films,
        ]);
    }   

    public function show(int $id, Request $request){

        $film = Film::where('id', $id)->first();

        $place1 = Salle1_Place::all();
        $place2 = Salle2_Place::all();
        $salle = $film->salle;

        return view('/film', ['place1'=>$place1, 'place2'=>$place2, 'id'=>$film->id, 'titre'=>$film->titre, 'description'=>$film->description, 'image'=>$film->image, 'durée'=>$film->durée, 'salle_id'=>$film->salle_id, 'trailer' =>$film->trailer]);
    }

    public function reservation(Request $request){

        $titre = $request->input('titre');

        $checkedIds = $request->input('place_id');

        $user = auth()->user();


        if ($checkedIds != null && auth()->user() ){
            $place = implode(",", $checkedIds);

            $reservation = new Reservation ;
            $reservation->place_id = $place;
            $reservation->user_id = $user->id;
            $reservation->film_title = $titre;
            $reservation->save();

            $prenom = $user->prenom;
            return view ('reservation', ['user'=>$prenom, 'places'=>$place, 'titre'=>$reservation->film_title] );
         } 

        if ($checkedIds != null && auth()->guest()){ 
            return back()->withErrors([
                'place_id[]' => 'Vous devez être connecté.'
            ]);
         }

        if ($checkedIds == null && auth()->user()){ 
            return back()->withErrors([
                'place_id[]' => 'Aucune place(s) selectionée(s)'
            ]);
         }

        if ($checkedIds == null && auth()->guest()){ 
            return back()->withErrors([
                'place_id[]' => 'Vous devez être connecté à votre compte et selectionner des places'
            ]);
        }
    }
}
