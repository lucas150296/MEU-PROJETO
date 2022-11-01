<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastroPessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('nomeCompleto', 50);
            $table->integer('estadoCivil');

            $table->string('cidadeNascimento', 100);
            $table->string('estadoNascimento', 2);
            $table->string('cep', 20);
            $table->string('nomeMae', 100);
            $table->string('cpf', 20);
            $table->string('rg', 20);
            $table->string('endereco', 100);
            $table->integer('numero');
            $table->string('bairro', 100);
            $table->string('cidade', 100);
            $table->string('telefone', 20);
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
        Schema::dropIfExists('cadastro_pessoas');
    }
}
