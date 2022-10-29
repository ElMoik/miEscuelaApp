<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno::create([
            'n_control'        => '20324201987',
            'nombre'           => 'Luis Eduardo',
            'edad'             => 18,
            'sexo'             => 1,
            'fecha_nacimiento' => '2004-05-1',
            'domicilio'        => "Barrancos",
            'telefono'         => "0188384116"
        ]);
        Alumno::create([
            'n_control'        => '20124201987',
            'nombre'           => 'Uriel',
            'edad'             => 18,
            'sexo'             => 1,
            'fecha_nacimiento' => '2004-09-5',
            'domicilio'        => "Valle Alto",
            'telefono'         => "0188384116"
        ]);
    }
}
