<?php

namespace Database\Factories;

use App\Models\motivo_ajuste;
use Illuminate\Database\Eloquent\Factories\Factory;

class motivo_ajusteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = motivo_ajuste::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'motivo' => $this->faker->word,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
