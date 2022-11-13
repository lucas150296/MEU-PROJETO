<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();
            $table->string('mone', 100);
            $table->string('status', 1);
            $table->string('crmUf', 2);
            $table->string('crmNumero', 100);
            $table->unsignedBigInteger('especialidade_id');
            $table->foreign('especialidade_id')->references('id')->on('areas_mesdicas');
            $table->date('dataNascimento')->nullable();
            $table->date('dataFormatura')->nullable();

            $table->string('cpf', 100)->nullable();
            $table->string('cpj', 100);
            $table->string('rgNumero', 100);
            $table->string('rgInstituicao', 100);
            $table->string('cep', 100);
            $table->string('endereco', 100);
            $table->string('bairro', 100);
            $table->string('cidade', 100);
            $table->string('numeroEndereco', 100);
            $table->string('complemento', 100)->nullable();
            $table->string('pontoReferencia', 100)->nullable();
            $table->string('telefone', 100);
            $table->string('email', 100);
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

        Schema::dropIfExists('medicos');
    }
}
