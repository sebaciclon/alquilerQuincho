<?php

namespace Database\Seeders;

use App\Models\Dia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dia = new Dia();
        $dia->nombre = "Lunes";
        $dia->save();

        $dia1 = new Dia();
        $dia1->nombre = "Martes";
        $dia1->save();

        $dia2 = new Dia();
        $dia2->nombre = "Miercoles";
        $dia2->save();

        $dia3 = new Dia();
        $dia3->nombre = "Jueves";
        $dia3->save();

        $dia4 = new Dia();
        $dia4->nombre = "Viernes";
        $dia4->save();

        $dia5 = new Dia();
        $dia5->nombre = "Sabado";
        $dia5->save();

        $dia6 = new Dia();
        $dia6->nombre = "Domingo";
        $dia6->save();
    }
}
