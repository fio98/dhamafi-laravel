<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\solicitud_cotizacion>
 */
class solicitud_cotizacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fecha = $this->faker->dateTimeThisMonth();
        $entrega = $this->faker->dateTimeBetween($fecha, '+1 week');
        return [
            'id_cliente' => Cliente::all()->random()->id,
            'fecha' => $fecha,
            'fecha_entrega' => $entrega,
            'direccion_entrega' => $this->faker->randomElement(["Tres Rios", "San Diego", "Curridabat", "Barrio Escalante", "Jose Maria", "Concepcion",]),
            'producto' => $this->faker->randomElement(["Cupcake chocolate", "Donas", "Flauta", "Tres Leches", "Rollos de canela", "Cupcake chocolate", "Carlota de melocoton", "Carlota de limon"]),
            'modificacion' => $this->faker->paragraph(),
        ];
    }
}
