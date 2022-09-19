<?php

namespace Database\Factories;

use App\Models\compra;
use Illuminate\Database\Eloquent\Factories\Factory;

class compraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = compra::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idProveedor' => $this->faker->randomDigitNotNull,
        'fecha_compra' => $this->faker->date('Y-m-d H:i:s'),
        'numero_factura' => $this->faker->word,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
