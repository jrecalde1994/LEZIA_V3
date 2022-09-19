<?php

namespace Database\Factories;

use App\Models\proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class proveedorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = proveedor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Ruc' => $this->faker->word,
        'Razon_social' => $this->faker->word,
        'Telefono' => $this->faker->word,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s'),
        'estado_proveedor' => $this->faker->word
        ];
    }
}
