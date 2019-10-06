<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    public function posta(){
        return $this->belongsTo(Posta::class,'posta_id');
    }
    
    //protected $dates = ['nacimiento_pac'];
}
