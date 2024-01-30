<?php

namespace Database\Seeders;

use App\Models\Horario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horario = new Horario();
        $horario->nombre = "Mediodia";
        $horario->save();

        $horario1 = new Horario();
        $horario1->nombre = "Noche";
        $horario1->save();

        $horario2 = new Horario();
        $horario2->nombre = "Dia entero";
        $horario2->save();
    }
}
