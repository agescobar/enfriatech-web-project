<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->insert([
            'nombre' => 'Administrador',
            'email' => 'enfriatechsv@gmail.com',
            'clave' => bcrypt('enfriatech-admin'), // Encripta la contraseña
            'rol' => 'admin'
        ]);
    }
}