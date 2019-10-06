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
            $table->string('pac_nombre');
            $table->string('pac_apellido');
            $table->char('pac_dni',8);
            $table->string('pac_sexo');
            $table->string('pac_email')->unique();
            $table->timestamp('pac_nacimiento')->nullable();
            $table->string('pac_pais');
            $table->string('pac_departamento');
            $table->string('pac_provincia');
            $table->string('pac_distrito');
            $table->string('pac_direccion');
            $table->boolean('pac_asegurado')->default(0);
            $table->string('pac_estcivil');
            $table->string('pac_estudio');
            $table->string('pac_seguro');
            $table->unsignedBigInteger('posta_id');
            $table->foreign('posta_id')->references('id')->on('postas');
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
