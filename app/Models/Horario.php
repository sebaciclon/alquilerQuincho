<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $table = 'horarios';

    // RELACION UNO A MUCHOS
    public function horarioAlquiler(){
        return $this->hasMany('App\Models\Alquiler','horario_id');
    }
}
