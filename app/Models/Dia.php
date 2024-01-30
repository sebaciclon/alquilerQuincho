<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    use HasFactory;
    protected $table = 'dias';

    // RELACION UNO A MUCHOS
    public function diaAlquiler(){
        return $this->hasMany('App\Models\Alquiler','dia_id');
    }
}
