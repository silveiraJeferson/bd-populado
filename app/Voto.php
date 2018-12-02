<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voto extends Model
{
    public $fillable = ['id','id_usuario','votos'];
}
