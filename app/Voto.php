<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voto extends Model
{
     /**
     * obtiene el candidato del voto.
     */
    public function candidato()
    {
        return $this->belongsTo('App\Candidato', 'candidato_id');
    }

    /**
     * obtiene el usuario del voto.
     */
    public function user()
    {
        return $this->hasOne('App\User', 'user_id');
    }
}
