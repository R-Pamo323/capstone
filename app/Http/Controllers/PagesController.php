<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posta;
use App\Paciente;
use App\Clinica;
use App\Historia;
use App\Traslado;
use App\User;

class PagesController extends Controller
{
    public function inicio(){
        return view('home');
    }
    public function buscarusuario(Request $request){
        $dni = $request->get('dni'); //se obtiene el nombre del .blade
        $apellido = $request->get('apellido');
        $nombre = $request->get('nombre');
        
        $paciente = Paciente::orderBy('id', 'ASC')
                    ->nombre($nombre)  //sin $ son las variables que iran en nuestro PACIENTE.PHP
                    ->apellido($apellido)
                    ->dni($dni)
                    ->paginate(4);

        return view('ubuscar', compact('paciente'));
    }

    public function crearpaciente(){
        return view('create.createpaciente');
    }

    public function datospaciente(Request $request){
        //return $request->all();
        $pacienteNuevo = new Paciente;
        $pacienteNuevo->pac_nombre = $request->pac_nombre;
        $pacienteNuevo->pac_apellido= $request->pac_apellido;
        $pacienteNuevo->pac_dni = $request->pac_dni;
        $pacienteNuevo->pac_sexo = $request->pac_sexo;
        $pacienteNuevo->pac_email = $request->pac_email;
        $pacienteNuevo->pac_nacimiento = $request->pac_nacimiento;
        $pacienteNuevo->pac_pais= $request->pac_pais;
        $pacienteNuevo->pac_departamento = $request->pac_departamento;
        $pacienteNuevo->pac_provincia = $request->pac_provincia;
        $pacienteNuevo->pac_distrito = $request->pac_distrito;
        $pacienteNuevo->pac_direccion= $request->pac_direccion;
        $pacienteNuevo->pac_asegurado = $request->pac_asegurado;
        $pacienteNuevo->pac_estcivil = $request->pac_estcivil;
        $pacienteNuevo->pac_estudio = $request->pac_estudio;
        $pacienteNuevo->pac_seguro = $request->pac_seguro;
        $pacienteNuevo->posta_id = $request->posta_id;
        $pacienteNuevo->save();


        ////////////////// Se deberia Borrar /////////////////
        $dni = $request->get('dni'); //se obtiene el nombre del .blade
        $apellido = $request->get('apellido');
        $nombre = $request->get('nombre');
        
        $paciente = Paciente::orderBy('id', 'ASC')
                    ->nombre($nombre)  //sin $ son las variables que iran en nuestro PACIENTE.PHP
                    ->apellido($apellido)
                    ->dni($dni)
                    ->paginate(4);
        return view('ubuscar', compact('paciente'));

    }

    public function datostransferencia(Request $request){
        //return $request->all();
        $transferenciaNuevo = new Traslado;
        $transferenciaNuevo->tra_fecha = $request->tra_fecha;
        $transferenciaNuevo->tra_anamnesis= $request->tra_anamnesis;
        $transferenciaNuevo->tra_diagnostico = $request->tra_diagnostico;
        $transferenciaNuevo->tra_tratamiento = $request->tra_tratamiento;
        $transferenciaNuevo->tra_coordinacion = $request->tra_coordinacion;
        $transferenciaNuevo->tra_condicion = $request->tra_condicion;
        $transferenciaNuevo->tra_especialidad= $request->tra_especialidad;
        $transferenciaNuevo->tra_persona_acompanante= $request->tra_persona_acompanante;
        $transferenciaNuevo->tra_o_presionarterial = $request->tra_o_presionarterial;
        $transferenciaNuevo->tra_o_respiracion = $request->tra_o_respiracion;
        $transferenciaNuevo->tra_o_pulso = $request->tra_o_pulso;
        $transferenciaNuevo->tra_o_temperatura= $request->tra_o_temperatura;
        $transferenciaNuevo->tra_a_recomendacion = $request->tra_a_recomendacion;
        $transferenciaNuevo->tra_a_problemas_esperados = $request->tra_a_problemas_esperados;
        $transferenciaNuevo->tra_confirmacion = $request->tra_confirmacion;
        $transferenciaNuevo->clinica_id = $request->clinica_id;
        $transferenciaNuevo->posta_id = $request->posta_id;
        $transferenciaNuevo->paciente_id = $request->paciente_id;
        $transferenciaNuevo->user_id = $request->user_id;

        $transferenciaNuevo->save();

        ////////////////// Se deberia Borrar /////////////////
        $dni = $request->get('dni'); //se obtiene el nombre del .blade
        $apellido = $request->get('apellido');
        $nombre = $request->get('nombre');
         
        $paciente = Paciente::orderBy('id', 'ASC')
                     ->nombre($nombre)  //sin $ son las variables que iran en nuestro PACIENTE.PHP
                     ->apellido($apellido)
                     ->dni($dni)
                     ->paginate(4);
        return view('ubuscar', compact('paciente'));

    }


    
    public function perfildoc(){
        return view('dperfil');
    }



    public function creartransferencia($id){
        $doctor = User::all()
                ->where('id',1);
        $paciente = Paciente::all()
                ->where('id',$id);
        return view('create.createtransferencia', compact('doctor','paciente'));
    }

    public function transferencia(){
        $transferencia =  Traslado::all();
        return view('transferencia', compact('transferencia'));
    }
   

    public function historias($id){
        $historia = Historia::all()
                ->where('paciente_id',$id);
        return view('uhistorias',compact('historia'));
        
    }
    
}
