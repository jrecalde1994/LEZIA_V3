<?php

namespace Database\Factories;

use App\Models\detalle_compra;
use Illuminate\Database\Eloquent\Factories\Factory;

class detalle_compraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = detalle_compra::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idCompra' => $this->faker->randomDigitNotNull,
        'idProducto' => $this->faker->randomDigitNotNull,
        'cantidad' => $this->faker->randomDigitNotNull,
        'precio_compra' => $this->faker->randomDigitNotNull,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
