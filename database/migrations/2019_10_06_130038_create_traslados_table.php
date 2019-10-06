<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrasladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traslados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('tra_fecha')->nullable();
            $table->string('tra_anamnesis');
            $table->string('tra_diagnostico');
            $table->string('tra_tratamiento');
            $table->string('tra_coordinacion');
            $table->boolean('tra_condicion');
            $table->string('tra_especialidad');
            $table->string('tra_persona_acompanante');
            $table->double('tra_o_presionarterial',8,2);
            $table->double('tra_o_respiracion',8,2);
            $table->double('tra_o_pulso',8,2);
            $table->double('tra_o_temperatura',8,2);
            $table->string('tra_a_recomendacion');
            $table->string('tra_a_problemas_esperados');
            $table->boolean('tra_confirmacion');
            $table->unsignedBigInteger('posta_id');
            $table->foreign('posta_id')->references('id')->on('postas');
            $table->unsignedBigInteger('clinica_id');
            $table->foreign('clinica_id')->references('id')->on('clinicas');
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('traslados');
    }
}
