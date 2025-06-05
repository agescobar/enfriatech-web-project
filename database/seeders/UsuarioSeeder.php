<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('usuarios')->insert([
            'nombre' => 'Pedro Sola',
            'email' => 'pedritomccormick@gmail.com',
            'clave' => bcrypt('hellmans123'),
            'rol' => 'cliente',
        ]);
    }
}
