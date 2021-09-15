<?php

namespace Database\Seeders;

use App\Models\personal;
use Illuminate\Database\Seeder;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personal = new personal();
        $personal->cip = '234567';
        $personal->nombre = 'Juan';
        $personal->apellido = 'Perez';
        $personal->celular = '78541236';
        $personal->sexo = 'M';
        $personal->save();

        $personal = new personal();
        $personal->cip = '1394567';
        $personal->nombre = 'Carla';
        $personal->apellido = 'Casa';
        $personal->celular = '74552369';
        $personal->sexo = 'F';
        $personal->save();
    }
};
