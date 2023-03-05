<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = new Producto();
        $producto->nombre = 'Cupcake de Chocolate';
        $producto->precio = '1000';
        $producto->descripcion = 'Bizcocho de chocolate, relleno de dulce de leche y lustre buttercream';
        $producto->save();

        Producto::factory(8)->create();
    }
}
