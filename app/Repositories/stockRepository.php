<?php

namespace App\Repositories;

use App\Models\stock;
use App\Repositories\BaseRepository;

/**
 * Class stockRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:49 pm UTC
*/

class stockRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idProducto',
        'existencia_actual',
        'lote',
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
        return stock::class;
    }
}
