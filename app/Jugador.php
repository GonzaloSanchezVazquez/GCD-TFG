<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    //
    public function torneos(){

        return $this->belongsToMany("App\Torneo");
    }
}
