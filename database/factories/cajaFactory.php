<?php

namespace Database\Factories;

use App\Models\caja;
use Illuminate\Database\Eloquent\Factories\Factory;

class cajaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = caja::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idSucursal' => $this->faker->randomDigitNotNull,
        'punto_expedicion' => $this->faker->randomDigitNotNull,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
