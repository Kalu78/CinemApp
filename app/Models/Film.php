<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Salle;

class Film extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'titre', 'description', 'image', 'durée', 'salle_id', 'trailer'];

    public function salle()
    {
        return $this->belongsTo('App\Models\salle1_place'); 
    }
}
