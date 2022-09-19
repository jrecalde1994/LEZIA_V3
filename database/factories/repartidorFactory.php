<?php

namespace Database\Factories;

use App\Models\repartidor;
use Illuminate\Database\Eloquent\Factories\Factory;

class repartidorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = repartidor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Cedula' => $this->faker->word,
        'Nombre' => $this->faker->word,
        'Apellido' => $this->faker->word,
        'telefono' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s'),
        'usuario_act' => $this->faker->word,
        'estado_repartidor' => $this->faker->word,
        'idLogin' => $this->faker->randomDigitNotNull
        ];
    }
}
