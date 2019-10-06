<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    public function postas(){
        return $this->belongsTo(Posta::class,'postas_id');
    }
    
    //protected $dates = ['nacimiento_pac'];
}
