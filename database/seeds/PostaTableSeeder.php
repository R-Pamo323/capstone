<?php

use Illuminate\Database\Seeder;
use App\Posta;
use App\Paciente;
use Carbon\Carbon;

class PostaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Posta::truncate();
        $posta = new Posta();
        $posta->nombre_pos = "Jacobo Hunter";
        $posta->direccion_pos = "Hunter";
        $posta->save();

        $posta = new Posta();
        $posta->nombre_pos = "Doctor Paucarpata";
        $posta->direccion_pos = "Paucarpata";
        $posta->save();


        //Paciente::truncate();
        $paciente = new Paciente();
        $paciente->nombres_pac = "Rodrigo Edmur";
        $paciente->apellidos_pac = "Pamo Delgado";
        $paciente->dni_pac = "72469994";
        $paciente->email_pac = "rodrigopamo323@gmail.com";
        $paciente->nacimiento_pac = "1997/10/18";
        $paciente->direccion_pac = "Calle Tahuaycani.128";
        $paciente->pais_pac = "Peru";
        $paciente->departamento_pac = "Arequipa";
        $paciente->provincia_pac = "Arequipa";
        $paciente->distrito_pac = "Sachaca";
        $paciente->asegurado_pac = true;
        $paciente->id_pos = 1;
        $paciente->save();


        $paciente = new Paciente();
        $paciente->nombres_pac = "Richi Smith";
        $paciente->apellidos_pac = "Swneger Snayder";
        $paciente->dni_pac = "72478144";
        $paciente->email_pac = "richismith3@gmail.com";
        $paciente->nacimiento_pac = "1990/11/10";
        $paciente->direccion_pac = "Hunter";
        $paciente->pais_pac = "Peru";
        $paciente->departamento_pac = "Arequipa";
        $paciente->provincia_pac = "Arequipa";
        $paciente->distrito_pac = "Hunter";
        $paciente->asegurado_pac = false;
        $paciente->id_pos = 2;
        $paciente->save();


        $paciente = new Paciente();
        $paciente->nombres_pac = "Ever Elian";
        $paciente->apellidos_pac = "Ore Rondon";
        $paciente->dni_pac = "45769994";
        $paciente->email_pac = "everdeyossi@gmail.com";
        $paciente->nacimiento_pac = Carbon::now();
        $paciente->direccion_pac = "Calle del amor";
        $paciente->pais_pac = "Peru";
        $paciente->departamento_pac = "Arequipa";
        $paciente->provincia_pac = "Arequipa";
        $paciente->distrito_pac = "Jose Luis";
        $paciente->asegurado_pac = true;
        $paciente->id_pos = 1;
        $paciente->save();

    }
}
