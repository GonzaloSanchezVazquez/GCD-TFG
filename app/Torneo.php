<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    //
    public function club()
    {
        return $this->belongsTo('App\Club');
    }

    public function categorias()
    {
        return $this->hasMany('App\Categoria');
    }

    public function jugadores()
    {
        return $this->belongsToMany('App\User');
    }

    protected $fillable = [

        "club_id",
        "nombre",
        "fecha_ini",
        "fecha_fin",
        "superficie",
        "descripcion",
        "localidad"
    ];
}
