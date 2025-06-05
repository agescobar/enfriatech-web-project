<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicioSeeder extends Seeder
{
    public function run()
    {
        DB::table('servicios')->insert([
            [
                'nombre' => 'Instalación mecánica de A/C residencial',
                'descripcion' => 'Instalación mecánica de aire acondicionado. Incluye lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'precio' => 125.00,
                'duracion' => 6
            ],
            [
                'nombre' => 'Mantenimiento preventivo de A/C residencial',
                'descripcion' => 'Limpieza de filtros, revisión de gas y componentes.',
                'precio' => 35.00,
                'duracion' => 3
            ],
            [
                'nombre' => 'Servicio de diágnostico de A/C residencial',
                'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'precio' => 25.00,
                'duracion' => 2
            ]
        ]);
    }
}
