<?php

namespace Database\Factories;

use App\Models\foto;
use Illuminate\Database\Eloquent\Factories\Factory;

class fotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = foto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idProducto' => $this->faker->randomDigitNotNull,
        'url_foto' => $this->faker->word,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
