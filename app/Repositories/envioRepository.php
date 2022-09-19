<?php

namespace App\Repositories;

use App\Models\envio;
use App\Repositories\BaseRepository;

/**
 * Class envioRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:53 pm UTC
*/

class envioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idCiudad',
        'costo_envio',
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
        return envio::class;
    }
}
