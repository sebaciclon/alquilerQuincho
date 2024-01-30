<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;
    protected $table = 'socios';

    // RELACION UNO A MUCHOS
    public function socioAlquiler(){
        return $this->hasMany('App\Models\Alquiler');
        //return $this->hasMany('App\Models\Alquiler','socio_id');
    }
}
