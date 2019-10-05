<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;

class PagesController extends Controller
{
    public function inicio(){
        return view('home');
    }
    public function buscarusuario(){
        return view('ubuscar');
    }
    public function crearusuario(){
        $usuario = Paciente::with('postas')->get();
        return view('ucrear',compact('usuario'));
    }
    public function perfildoc(){
        return view('dperfil');
    }
    public function transferencia(){
        return view('transferencia');
    }
    
}
