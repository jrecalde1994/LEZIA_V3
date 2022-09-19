<?php

namespace Database\Factories;

use App\Models\categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class categoriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = categoria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_categoria' => $this->faker->word,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
