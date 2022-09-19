<?php

namespace App\Repositories;

use App\Models\entrega;
use App\Repositories\BaseRepository;

/**
 * Class entregaRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:52 pm UTC
*/

class entregaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idRepartidor',
        'fecha_asingacion',
        'fecha_entrega',
        'idDireccionEntrega',
        'idVenta',
        'estado_entrega',
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
        return entrega::class;
    }
}
