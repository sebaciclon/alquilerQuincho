<?php

namespace Database\Seeders;

use App\Models\Socio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class SocioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hora1 = new Socio();
        $hora1->nombre = "Si";
        $hora1->save();

        $hora2 = new Socio();
        $hora2->nombre = "No";
        $hora2->save();

        $hora3 = new Socio();
        $hora3->nombre = "Ns/Nc";
        $hora3->save();
    }
}
