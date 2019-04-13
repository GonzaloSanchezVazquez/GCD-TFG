<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //

    public function torneo()
    {
        return $this->belongsTo('App\Torneo');
    }

    protected $fillable = ["id_ref_cat","torneo_id"];
}
