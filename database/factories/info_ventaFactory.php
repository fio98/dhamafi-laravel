<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\info_venta>
 */
class info_ventaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_cliente' => Cliente::all()->random()->id,
            'id_producto' => Producto::all()->random()->id,
            'cantidad' => $this->faker->numberBetween(1, 10),
            'especificaciones' => $this->faker->paragraph(),
        ];
    }
}
