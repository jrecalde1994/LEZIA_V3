<?php

namespace App\Repositories;

use App\Models\ciudad;
use App\Repositories\BaseRepository;

/**
 * Class ciudadRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:36 pm UTC
*/

class ciudadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_ciudad',
        'usuario_act',
        'fecha_act',
        'estado_ciudad'
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
        return ciudad::class;
    }
}
