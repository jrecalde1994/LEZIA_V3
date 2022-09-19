<?php

namespace App\Repositories;

use App\Models\deposito;
use App\Repositories\BaseRepository;

/**
 * Class depositoRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:54 pm UTC
*/

class depositoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idSucursal',
        'nombre_deposito',
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
        return deposito::class;
    }
}
