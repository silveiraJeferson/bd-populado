<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $fillable = ['id', 'codigo', 'locacoes'];
}
