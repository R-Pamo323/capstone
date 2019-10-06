<?php

use Illuminate\Database\Seeder;
use App\Posta;
use App\Paciente;
use App\Clinica;
use App\Historia;
use App\Traslado;
use App\User;

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
        $posta->pos_nombre = "Jacobo Hunter";
        $posta->pos_direccion = "Hunter";
        $posta->save();

        $posta = new Posta();
        $posta->pos_nombre = "Hospital de Paucarpata";
        $posta->pos_direccion = "Paucarpata";
        $posta->save();
//////////////////////////////////
        $clinica = new Clinica();
        $clinica->cli_nombre = "San Juan de los Angeles";
        $clinica->cli_direccion = "Av. Ejercito";
        $clinica->save();

        $clinica = new Clinica();
        $clinica->cli_nombre = "Clinica los Angeles";
        $clinica->cli_direccion = "Por el centro";
        $clinica->save();
///////////////////////////////////////
        $user = new User();
        $user->doc_apellido="Rodriguez Fuentes";
        $user->doc_nombre="Alfonso";
        $user->doc_email="alfondosord_32@gmail.com";
        $user->doc_dni="72469994";
        $user->doc_cmp="78495955";
        $user->doc_especialidad="Traumotologia";
        $user->posta_id=1;
        $user->clinica_id=1;
        $user->password= "soylaleche";
        $user->save();
        

        //Paciente::truncate();
        $paciente = new Paciente();
        $paciente->pac_nombre = "Rodrigo Edmur";
        $paciente->pac_apellido = "Pamo Delgado";
        $paciente->pac_dni = "72469994";
        $paciente->pac_sexo = "Masculino";
        $paciente->pac_email = "rodrigopamo323@gmail.com";
        $paciente->pac_nacimiento = "1997/10/18";
        $paciente->pac_pais = "Peru";
        $paciente->pac_departamento = "Arequipa";
        $paciente->pac_provincia = "Arequipa";
        $paciente->pac_distrito = "Sachaca";
        $paciente->pac_direccion = "Calle Tahuaycani.128";
        $paciente->pac_asegurado = true;
        $paciente->pac_estcivil = "Soltero";
        $paciente->pac_estudio = "Universitario";
        $paciente->pac_seguro = "Por Vida";
        $paciente->posta_id = 1;
        $paciente->save();

        $paciente = new Paciente();
        $paciente->pac_nombre = "Richi Arnold";
        $paciente->pac_apellido = "Lazaro Ballena";
        $paciente->pac_dni = "84569994";
        $paciente->pac_sexo = "Masculino";
        $paciente->pac_email = "richartudios@gmail.com";
        $paciente->pac_nacimiento = "1998/09/17";
        $paciente->pac_pais = "Peru";
        $paciente->pac_departamento = "Arequipa";
        $paciente->pac_provincia = "Arequipa";
        $paciente->pac_distrito = "Hunter";
        $paciente->pac_direccion = "Calle Brasil.505";
        $paciente->pac_asegurado = true;
        $paciente->pac_estcivil = "Soltero";
        $paciente->pac_estudio = "Universitario";
        $paciente->pac_seguro = "Por Vida";
        $paciente->posta_id = 2;
        $paciente->save();

        ////////////////////////////////

        $historia = new Historia();
        $historia->his_fecha= "1998/09/17";
        $historia->his_diagnostico= "Palido parece que tiene fiebre";
        $historia->his_tratamiento= "Se le puso paños y panadol";
        $historia->his_sintomas="Dolor de cabeza, temperatura alta";
        $historia->paciente_id = 1;
        $historia->save();

        $historia = new Historia();
        $historia->his_fecha= "2000/10/11";
        $historia->his_diagnostico= "Dolor de estomago paracitos";
        $historia->his_tratamiento= "Pastillas";
        $historia->his_sintomas="Dolor de estomago, diarrea";
        $historia->paciente_id = 1;
        $historia->save();


        /////////////////////////////////
        $traslado = new Traslado();
        $traslado->tra_fecha = "2000/10/11";
        $traslado->tra_anamnesis = "Dificultad al respirar";
        $traslado->tra_diagnostico = "Infeccion en el pulmon";
        $traslado->tra_tratamiento = "Nebulizador con oxigeno";
        $traslado->tra_coordinacion = "Emergencia";
        $traslado->tra_condicion = false;
        $traslado->tra_especialidad = "cardiologia";
        $traslado->tra_persona_acompanante = "Enfermera Monroy";
        $traslado->tra_o_presionarterial = 90;
        $traslado->tra_o_respiracion = 18;
        $traslado->tra_o_pulso = 120;
        $traslado->tra_o_temperatura = 38;
        $traslado->tra_a_recomendacion = "Se recomienda mantener el oxigeno";
        $traslado->tra_a_problemas_esperados = "Dar pulsaciones";
        $traslado->tra_confirmacion = true;
        $traslado->posta_id = 1;
        $traslado->clinica_id = 1;
        $traslado->paciente_id = 1;
        $traslado->user_id = 1;
        $traslado->save();
    }
}
