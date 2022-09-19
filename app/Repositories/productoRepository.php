<?php

namespace App\Repositories;

use App\Models\producto;
use App\Repositories\BaseRepository;

/**
 * Class productoRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:49 pm UTC
*/

class productoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idDeposito',
        'idCategoria',
        'nombre_producto',
        'descripcion_larga',
        'tamanho',
        'color',
        'stock_minimo',
        'precio_unitario',
        'estado_producto',
        'usuario_act',
        'fecha_act'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return producto::class;
    }
}
