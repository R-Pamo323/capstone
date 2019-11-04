<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pos_nombre');
            $table->text('pos_direccion');
            $table->timestamps();
        });

        Schema::create('clinicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cli_nombre');
            $table->text('cli_direccion');
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('doc_apellido');
            $table->string('doc_nombre');
            $table->string('doc_email')->unique();
            $table->char('doc_dni',8);
            $table->string('doc_cmp')->unique();
            $table->string('doc_especialidad');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->unsignedBigInteger('posta_id');
            $table->foreign('posta_id')->references('id')->on('postas');
            $table->unsignedBigInteger('clinica_id');
            $table->foreign('clinica_id')->references('id')->on('clinicas');
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
        Schema::dropIfExists('postas');
        Schema::dropIfExists('clinicas');
        Schema::dropIfExists('users');
    }
}
