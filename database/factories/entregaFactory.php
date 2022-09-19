<?php

namespace Database\Factories;

use App\Models\entrega;
use Illuminate\Database\Eloquent\Factories\Factory;

class entregaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = entrega::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idRepartidor' => $this->faker->randomDigitNotNull,
        'fecha_asingacion' => $this->faker->date('Y-m-d H:i:s'),
        'fecha_entrega' => $this->faker->date('Y-m-d H:i:s'),
        'idDireccionEntrega' => $this->faker->randomDigitNotNull,
        'idVenta' => $this->faker->randomDigitNotNull,
        'estado_entrega' => $this->faker->word,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
