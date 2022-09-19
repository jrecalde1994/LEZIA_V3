<?php

namespace App\Repositories;

use App\Models\venta;
use App\Repositories\BaseRepository;

/**
 * Class ventaRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:52 pm UTC
*/

class ventaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idCliente',
        'fecha_venta',
        'sucursal',
        'punto_expedicion',
        'numero_factura',
        'condicion_venta',
        'numero_transaccion',
        'estado_de_factura',
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
        return venta::class;
    }
}
