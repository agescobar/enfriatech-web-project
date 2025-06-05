<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    public function run()
    {
        DB::table('productos')->insert([
            [
                'nombre' => 'MiniSplit 12000 BTU 220v Convencional',
                'marca' => 'Adina',
                'descripcion' => 'Modelo silencioso, eficiente, con control remoto.',
                'precio' => 350.00,
                'id_cat' => 1
            ],
            [
                'nombre' => 'MiniSplit 18000 BTU 220v Inverter',
                'marca' => 'ComfortStar',
                'descripcion' => 'Modelo silencioso, eficiente, con control remoto.',
                'precio' => 525.00,
                'id_cat' => 1
            ],
            [
                'nombre' => 'Cassette 24000 BTU 220v Convencional',
                'marca' => 'GAir',
                'descripcion' => 'Modelo silencioso, eficiente',
                'precio' => 775.00,
                'id_cat' => 2
            ],
        ]);
    }
}
