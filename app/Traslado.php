<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traslado extends Model
{
    public function posta(){
        return $this->belongsTo(Posta::class,'posta_id');
    }

    public function clinica(){
        return $this->belongsTo(Clinica::class,'clinica_id');
    }

    public function paciente(){
        return $this->belongsTo(Paciente::class,'paciente_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
