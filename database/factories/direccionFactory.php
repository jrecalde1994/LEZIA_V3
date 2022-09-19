<?php

namespace Database\Factories;

use App\Models\direccion;
use Illuminate\Database\Eloquent\Factories\Factory;

class direccionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = direccion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idCiudad' => $this->faker->randomDigitNotNull,
        'calle' => $this->faker->word,
        'calle_transversal' => $this->faker->word,
        'numero_casa' => $this->faker->word,
        'barrio' => $this->faker->word,
        'link_mapa' => $this->faker->word,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s'),
        'idCliente' => $this->faker->randomDigitNotNull
        ];
    }
}
