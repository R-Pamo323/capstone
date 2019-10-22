<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    public function posta(){
        return $this->belongsTo(Posta::class,'posta_id');
    }

    public function scopeNombre($query, $nombre)  //Recibe el parametro y hace la consulta
    {
        if($nombre)
            return $query->where('pac_nombre', 'LIKE', "%$nombre%"); //varaible  de la BD
    }
    public function scopeApellido($query, $apellido)
    {
        if($apellido)
            return $query->where('pac_apellido', 'LIKE', "%$apellido%");
    }
    public function scopeDni($query, $dni)
    {
        if($dni)
            return $query->where('pac_dni', 'LIKE', "%$dni%");
    }

   /* public function historia(){
        return $this->hasMany(Historia::class,'paciente_id');
    }*/


    
    //protected $dates = ['nacimiento_pac'];
}
