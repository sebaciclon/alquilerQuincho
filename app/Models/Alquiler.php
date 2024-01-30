<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    use HasFactory;
    protected $table = 'alquilers';

    // Relacion uno a muchos inversa
    public function dia(){
        return $this->belongsTo('App\Models\Dia');
        //return $this->belongsTo('App\Models\Dia','dia_id');
    }

    /*public function horaDesde(){
        return $this->belongsTo('App\Models\Hora');
        //return $this->belongsTo('App\Models\Hora','hora_desde_id');
    }

    public function horaHasta(){
        return $this->belongsTo('App\Models\Hora');
        //return $this->belongsTo('App\Models\Hora','hora_hasta_id');
    }*/

    public function horario(){
        return $this->belongsTo('App\Models\Horario');
        //return $this->belongsTo('App\Models\Horario','horario_id');
    }

    public function socio(){
        return $this->belongsTo('App\Models\Socio');
        //return $this->belongsTo('App\Models\Socio','socio_id');
    }
}
