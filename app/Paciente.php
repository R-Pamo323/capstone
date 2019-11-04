<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    

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
<<<<<<< HEAD
    }
    
    public function posta(){
        return $this->belongsTo(Posta::class,'posta_id');
    }
=======
    }*/
>>>>>>> 562e2b14b85a5cb03b8e522c778e7dddcba03e30


    
    //protected $dates = ['nacimiento_pac'];
}
