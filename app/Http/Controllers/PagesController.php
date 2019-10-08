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

    public function crearusuario(){
        $paciente = Paciente::all();
        $historia = Historia::all();
        $user = User::all();
        $traslado = Traslado::all();
        return view('ucrear',compact('paciente','historia','user','traslado'));
    }
    public function perfildoc(){
        return view('dperfil');
    }
    public function transferencia(){
        return view('transferencia');
    }
    public function historias(){
        $historia = Historia::all();
        return view('uhistorias',compact('historia'));
    }
    
}
