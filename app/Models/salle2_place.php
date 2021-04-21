<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salle2_place extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id', 'reserve', 'prix'];

    public function salle(){
        return $this->hasMany('App\Models\Film');
    }
}
