<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Film;

class Salle extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nbr_place'];

    public function film(){
        return $this->hasMany('App\Models\Film');
    }

    public function place_salle1(){
        return $this->hasMany('App\Models\salle1_place');
    }
}
