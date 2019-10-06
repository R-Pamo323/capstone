<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres_pac');
            $table->string('apellidos_pac');
            $table->char('dni_pac');
            $table->string('email_pac');
            $table->timestamp('nacimiento_pac')->nullable();
            $table->text('direccion_pac');
            $table->text('pais_pac');
            $table->text('departamento_pac');
            $table->text('provincia_pac');
            $table->text('distrito_pac');
            $table->boolean('asegurado_pac')->default(0);
            $table->unsignedBigInteger('postas_id');
            $table->foreign('postas_id')->references('id')->on('postas');
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
        Schema::dropIfExists('pacientes');
    }
}
