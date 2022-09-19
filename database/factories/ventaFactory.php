<?php

namespace Database\Factories;

use App\Models\venta;
use Illuminate\Database\Eloquent\Factories\Factory;

class ventaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = venta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idCliente' => $this->faker->randomDigitNotNull,
        'fecha_venta' => $this->faker->date('Y-m-d H:i:s'),
        'sucursal' => $this->faker->randomDigitNotNull,
        'punto_expedicion' => $this->faker->randomDigitNotNull,
        'numero_factura' => $this->faker->word,
        'condicion_venta' => $this->faker->word,
        'numero_transaccion' => $this->faker->word,
        'estado_de_factura' => $this->faker->word,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
