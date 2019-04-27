<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    public function torneos(){

        return $this->belongsToMany("App\Torneo");
    }

    protected $fillable = [

        "nombre",
        "apellido_1",
        "apellido_2",
        "email",
        "password",
        "telefono",
        "num_licencia",
        "pais_nacimiento",
        "fecha_nac",
        "localidad"
    ];
}
