<?php

namespace App\Repositories;

use App\Models\repartidor;
use App\Repositories\BaseRepository;

/**
 * Class repartidorRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:44 pm UTC
*/

class repartidorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Cedula',
        'Nombre',
        'Apellido',
        'telefono',
        'fecha_act',
        'usuario_act',
        'estado_repartidor',
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
        return repartidor::class;
    }
}
