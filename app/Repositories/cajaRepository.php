<?php

namespace App\Repositories;

use App\Models\caja;
use App\Repositories\BaseRepository;

/**
 * Class cajaRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:42 pm UTC
*/

class cajaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idSucursal',
        'punto_expedicion',
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
        return caja::class;
    }
}
