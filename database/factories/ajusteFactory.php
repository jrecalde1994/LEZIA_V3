<?php

namespace Database\Factories;

use App\Models\ajuste;
use Illuminate\Database\Eloquent\Factories\Factory;

class ajusteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ajuste::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idMotivoAjuste' => $this->faker->randomDigitNotNull,
        'idProducto' => $this->faker->randomDigitNotNull,
        'existencia_anterior' => $this->faker->randomDigitNotNull,
        'existencia_actual' => $this->faker->randomDigitNotNull,
        'diferencia' => $this->faker->randomDigitNotNull,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
