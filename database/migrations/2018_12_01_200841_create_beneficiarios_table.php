<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeneficiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod');
            $table->string('nome');
            $table->string('data_nasc');
            $table->integer('sexo');
            $table->integer('id_operadora');
            $table->integer('id_titular');
            $table->string('telefone');
            $table->string('rg');
            $table->string('cpf');
            $table->string('cod_area');
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficiarios');
    }
}
