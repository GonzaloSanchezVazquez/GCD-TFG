<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    //

    public function torneos()
    {
        return $this->hasMany('App\Torneo');
    }

}
