<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    public function run()
    {
        DB::table('alumnos')->insert([
            'nombre' => 'Alexandro Suciu',
            'telefono' => '666831936',
            'edad' => 22,
            'password' => bcrypt('123'),
            'email' => 'Alexandrosuciupeici@gmail.com',
            'sexo' => 'M',
        ]);
    }
}
