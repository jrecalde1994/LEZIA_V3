<?php

namespace Database\Factories;

use App\Models\login;
use Illuminate\Database\Eloquent\Factories\Factory;

class loginFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = login::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'usuario' => $this->faker->word,
        'clave' => $this->faker->word,
        'perfil' => $this->faker->word,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
