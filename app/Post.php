<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = ['id','id_user','imagem','titulo','conteudo','likes','comments'];
}
