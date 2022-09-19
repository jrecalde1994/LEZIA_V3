<?php

namespace Database\Factories;

use App\Models\ciudad;
use Illuminate\Database\Eloquent\Factories\Factory;

class ciudadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ciudad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_ciudad' => $this->faker->word,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s'),
        'estado_ciudad' => $this->faker->word
        ];
    }
}
