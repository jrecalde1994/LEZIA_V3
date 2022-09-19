<?php

namespace App\Repositories;

use App\Models\vendedor;
use App\Repositories\BaseRepository;

/**
 * Class vendedorRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:54 pm UTC
*/

class vendedorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcaja',
        'usuario_act',
        'fecha_act',
        'idLogin'
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
        return vendedor::class;
    }
}
