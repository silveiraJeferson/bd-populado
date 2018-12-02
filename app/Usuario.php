<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $fillable = ['id', 'nome', 'data_nasc', 'sexo'];
}
