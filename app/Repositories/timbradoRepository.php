<?php

namespace App\Repositories;

use App\Models\timbrado;
use App\Repositories\BaseRepository;

/**
 * Class timbradoRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:47 pm UTC
*/

class timbradoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idCaja',
        'numero_timbrado',
        'fecha_inicio',
        'fecha_vencimiento',
        'primera_factura',
        'factura_actual',
        'ultima_factura',
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
        return timbrado::class;
    }
}
