<?php

namespace Database\Factories;

use App\Models\vendedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class vendedorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = vendedor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idcaja' => $this->faker->randomDigitNotNull,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s'),
        'idLogin' => $this->faker->randomDigitNotNull
        ];
    }
}
