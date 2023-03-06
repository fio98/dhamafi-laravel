<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\info_venta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class info_ventaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $info_venta = new info_venta();
        $info_venta->id_cliente = 'Maria';
        $info_venta->id_producto = 'Selva negra';
        $info_venta->cantidad = '1';
        $info_venta->especificaciones = 'Empaque en caja con lazo y mensaje especial';
        $info_venta->save();

        info_venta::factory(10)->create();
    }
}
