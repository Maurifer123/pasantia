<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cliente= new Cliente();
        $cliente->ci='12345';
        $cliente->nombre='juan';
        $cliente->apellido='mendez';
        $cliente->sexo='M';
        $cliente->celular='67890987';
        $cliente->save();

        $cliente= new Cliente();
        $cliente->ci='34567';
        $cliente->nombre='maria';
        $cliente->apellido='jimenez';
        $cliente->sexo='F';
        $cliente->celular='6879873';
        $cliente->save();
    }
}
