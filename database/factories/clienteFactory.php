<?php

namespace Database\Factories;

use App\Models\cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class clienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Ruc' => $this->faker->word,
        'Cedula' => $this->faker->word,
        'Nombre' => $this->faker->word,
        'Apellido' => $this->faker->word,
        'telefono' => $this->faker->word,
        'email' => $this->faker->word,
        'estado_cliente' => $this->faker->word,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s'),
        'idLogin' => $this->faker->randomDigitNotNull
        ];
    }
}
