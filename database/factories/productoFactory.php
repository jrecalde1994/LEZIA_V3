<?php

namespace Database\Factories;

use App\Models\producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class productoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idDeposito' => $this->faker->randomDigitNotNull,
        'idCategoria' => $this->faker->randomDigitNotNull,
        'nombre_producto' => $this->faker->word,
        'descripcion_larga' => $this->faker->word,
        'tamanho' => $this->faker->word,
        'color' => $this->faker->word,
        'stock_minimo' => $this->faker->randomDigitNotNull,
        'precio_unitario' => $this->faker->randomDigitNotNull,
        'estado_producto' => $this->faker->word,
        'usuario_act' => $this->faker->word,
        'fecha_act' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
