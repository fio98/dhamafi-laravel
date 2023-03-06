<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    protected $model = Producto::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->randomElement(["Pastel Vainilla", "Pie Limon", "Chessecake de mora", "Key lime maracuya", "Chocotorta", "Pastel de chocolate", "Selva negra"]),
            'precio' => $this->faker->numberBetween(15000, 20000),
            'descripcion' => $this->faker->paragraph(),
        ];
    }
}
