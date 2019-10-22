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

    public function datoshistoria(Request $request){
        //return $request->all();
        $historiaNuevo = new Historia;
        $historiaNuevo->his_fecha = $request->his_fecha;
        $historiaNuevo->his_diagnostico= $request->his_diagnostico;
        $historiaNuevo->his_tratamiento = $request->his_tratamiento;
        $historiaNuevo->his_sintomas = $request->his_sintomas;
        $historiaNuevo->paciente_id = $request->paciente_id;

        $historiaNuevo->save();


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
        $doctor = User::all()
                ->where('id',1);
        return view('details.detailsdoctor', compact('doctor'));
    }



    public function creartransferencia($id){
        $doctor = User::all()
                ->where('id',1);
        $paciente = Paciente::all()
                ->where('id',$id);
        return view('create.createtransferencia', compact('doctor','paciente'));
    }

    public function crearhistoria($id){
        $historia = Historia::first();
        return view('create.createhistoria', compact('historia'));
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

    public function detailspaciente($id){
        $paciente = Paciente::all()
                ->where('id',$id);
        
        return view('details.detailspaciente', compact('paciente'));
    }

    public function detailstransferencia($id){
        $transferencia = Traslado::all()
                ->where('id',$id);
        
        return view('details.detailstransferencia', compact('transferencia'));
    }



    ////// Editar

    public function editarhistorias($id){
        $historia = Historia::findOrFail($id);
        return view('actions.editarhistoria', compact('historia'));

    }

    public function updatehistorias(Request $request, $id){
        $updateHistoria = Historia::findOrFail($id);
        $updateHistoria->his_fecha = $request->his_fecha;
        $updateHistoria->his_diagnostico = $request->his_diagnostico;
        $updateHistoria->his_tratamiento = $request->his_tratamiento;
        $updateHistoria->his_sintomas = $request->his_sintomas;

        $updateHistoria->save();
        return back()->with('mensaje', 'Historia Actualizada');

    }

    public function deletehistorias($id){
        $historiaEliminar = Historia::findOrFail($id);
        $historiaEliminar->delete();
        return back()->with('mensaje', 'Historia Eliminada');
    }

    public function editartransferencia($id){
        $transferencia = Traslado::findOrFail($id);
        return view('actions.editartransferencia', compact('transferencia'));

    }

    public function updatetransferencia(Request $request, $id){
        $updateTraslado = Traslado::findOrFail($id);
        $updateTraslado->tra_fecha = $request->tra_fecha;
        $updateTraslado->tra_anamnesis = $request->tra_anamnesis;
        $updateTraslado->tra_diagnostico = $request->tra_diagnostico;
        $updateTraslado->tra_coordinacion = $request->tra_coordinacion;
        $updateTraslado->tra_condicion = $request->tra_condicion;
        $updateTraslado->tra_especialidad = $request->tra_especialidad;
        $updateTraslado->tra_persona_acompanante = $request->tra_persona_acompanante;
        $updateTraslado->tra_o_presionarterial = $request->tra_o_presionarterial;
        $updateTraslado->tra_o_respiracion = $request->tra_o_respiracion;
        $updateTraslado->tra_o_pulso = $request->tra_o_pulso;
        $updateTraslado->tra_o_temperatura = $request->tra_o_temperatura;
        $updateTraslado->tra_a_recomendacion = $request->tra_a_recomendacion;
        $updateTraslado->tra_a_problemas_esperados = $request->tra_a_problemas_esperados;
        $updateTraslado->tra_confirmacion = $request->tra_confirmacion;
        $updateTraslado->posta_id = $request->posta_id;
        $updateTraslado->clinica_id = $request->clinica_id;
        $updateTraslado->paciente_id = $request->paciente_id;
        $updateTraslado->user_id = $request->user_id;

        $updateTraslado->save();
        return back()->with('mensaje', 'Transferencia Actualizada');

    }


    
}
