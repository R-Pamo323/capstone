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
    public function buscarusuario(){
        return view('ubuscar');
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
