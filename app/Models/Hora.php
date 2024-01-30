<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    use HasFactory;
    protected $table = 'horas';

    // RELACION UNO A MUCHOS
    public function horaDesdeAlquiler(){
        return $this->hasMany('App\Models\Alquiler','hora_desde_id');
    }

    public function horaHastaAlquiler(){
        return $this->hasMany('App\Models\Alquiler','hora_hasta_id');
    }
}
