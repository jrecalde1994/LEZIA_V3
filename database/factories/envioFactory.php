<?php

namespace Database\Factories;

use App\Models\envio;
use Illuminate\Database\Eloquent\Factories\Factory;

class envioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = envio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idCiudad' => $this->faker->randomDigitNotNull,
        'costo_envio' => $this->faker->randomDigitNotNull,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
