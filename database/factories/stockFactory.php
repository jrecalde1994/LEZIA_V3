<?php

namespace Database\Factories;

use App\Models\stock;
use Illuminate\Database\Eloquent\Factories\Factory;

class stockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = stock::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idProducto' => $this->faker->randomDigitNotNull,
        'existencia_actual' => $this->faker->randomDigitNotNull,
        'lote' => $this->faker->randomDigitNotNull,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
