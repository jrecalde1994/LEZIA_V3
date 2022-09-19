<?php

namespace Database\Factories;

use App\Models\timbrado;
use Illuminate\Database\Eloquent\Factories\Factory;

class timbradoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = timbrado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idCaja' => $this->faker->randomDigitNotNull,
        'numero_timbrado' => $this->faker->randomDigitNotNull,
        'fecha_inicio' => $this->faker->date('Y-m-d H:i:s'),
        'fecha_vencimiento' => $this->faker->date('Y-m-d H:i:s'),
        'primera_factura' => $this->faker->randomDigitNotNull,
        'factura_actual' => $this->faker->randomDigitNotNull,
        'ultima_factura' => $this->faker->randomDigitNotNull,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
