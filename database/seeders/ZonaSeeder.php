<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZonaSeeder extends Seeder
{
    public function run()
    {
        DB::table('zonas')->insert([
            ['nombre' => 'Santa Ana Norte', 'cargo' => 5.00],
            ['nombre' => 'Santa Ana Centro', 'cargo' => 0.00],
            ['nombre' => 'Sonsonate Centro', 'cargo' => 15.00],
            ['nombre' => 'Ahuachapán Norte', 'cargo' => 10.00]
        ]);
    }
}
