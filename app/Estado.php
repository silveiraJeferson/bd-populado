<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    public $fillable = ['id', 'nome', 'id_pais'];
}
