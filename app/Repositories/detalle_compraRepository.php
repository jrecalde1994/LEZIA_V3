<?php

namespace App\Repositories;

use App\Models\detalle_compra;
use App\Repositories\BaseRepository;

/**
 * Class detalle_compraRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:48 pm UTC
*/

class detalle_compraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idCompra',
        'idProducto',
        'cantidad',
        'precio_compra',
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
        return detalle_compra::class;
    }
}
