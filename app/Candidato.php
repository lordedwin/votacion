<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    public function votos()
    {
        return $this->hasMany('App\Voto', 'voto_id');
    }
}
