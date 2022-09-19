<?php

namespace Database\Factories;

use App\Models\Sucursale;
use Illuminate\Database\Eloquent\Factories\Factory;

class SucursaleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sucursale::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_sucursal' => $this->faker->word,
        'factura_sucursal' => $this->faker->randomDigitNotNull,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
