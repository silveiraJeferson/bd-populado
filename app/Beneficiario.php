<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    public $fillable = ['id', 'cod','nome', 'data_nasc', 'sexo', 'id_operadora', 'id_titular', 'telefone','rg','cpf','cod_area'];
}
