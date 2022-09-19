<?php

namespace App\Repositories;

use App\Models\direccion;
use App\Repositories\BaseRepository;

/**
 * Class direccionRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:43 pm UTC
*/

class direccionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idCiudad',
        'calle',
        'calle_transversal',
        'numero_casa',
        'barrio',
        'link_mapa',
        'usuario_act',
        'fecha_act',
        'idCliente'
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
        return direccion::class;
    }
}
