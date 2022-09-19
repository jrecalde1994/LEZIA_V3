<?php

namespace App\Repositories;

use App\Models\compra;
use App\Repositories\BaseRepository;

/**
 * Class compraRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:48 pm UTC
*/

class compraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idProveedor',
        'fecha_compra',
        'numero_factura',
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
        return compra::class;
    }
}
