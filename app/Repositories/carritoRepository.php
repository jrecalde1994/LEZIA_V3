<?php

namespace App\Repositories;

use App\Models\carrito;
use App\Repositories\BaseRepository;

/**
 * Class carritoRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:50 pm UTC
*/

class carritoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idVenta',
        'idProducto',
        'cantidad',
        'precio_venta',
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
        return carrito::class;
    }
}
