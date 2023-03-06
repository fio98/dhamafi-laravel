<?php

namespace Database\Seeders;

use App\Models\solicitud_cotizacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class solicitud_cotizacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $solicitud_cotizacion = new solicitud_cotizacion();
        $solicitud_cotizacion->id_cliente = 'Maria';
        $solicitud_cotizacion->fecha = '2023-03-05';
        $solicitud_cotizacion->fecha_entrega= '2023-03-20';
        $solicitud_cotizacion->direccion_entrega = 'Curridabat';
        $solicitud_cotizacion->producto = 'Selva negra';
        $solicitud_cotizacion->modificacion = 'Empaque en caja con lazo y mensaje especial';
        $solicitud_cotizacion->save();

        solicitud_cotizacion::factory(8)->create();
    }
}
