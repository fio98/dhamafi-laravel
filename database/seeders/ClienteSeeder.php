<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $cliente = new Cliente();
        $cliente->nombre = 'Fio';
        $cliente->apellido = 'Espinach';
        $cliente->cedula = '123456789';
        $cliente->celular = '1122-3344';
        $cliente->provincia = 'Cartago';
        $cliente->direccion = 'Tres Rios';
        $cliente->save();

        $cliente2 = new Cliente();
        $cliente2->nombre = 'Maria';
        $cliente2->apellido = 'Espinach';
        $cliente2->cedula = '123456799';
        $cliente2->celular = '1122-3355';
        $cliente2->provincia = 'Cartago';
        $cliente2->direccion = 'Tres Rios';
        $cliente2->save();

        Cliente::factory(10)->create();
    }
}
