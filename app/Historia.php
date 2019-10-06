<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    public function paciente(){
        return $this->belongsTo(Paciente::class,'paciente_id');
    }
}
