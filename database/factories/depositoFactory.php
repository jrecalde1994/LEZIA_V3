<?php

namespace Database\Factories;

use App\Models\deposito;
use Illuminate\Database\Eloquent\Factories\Factory;

class depositoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = deposito::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idSucursal' => $this->faker->randomDigitNotNull,
        'nombre_deposito' => $this->faker->word,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
