<?php

namespace App\Repositories;

use App\Models\Sucursale;
use App\Repositories\BaseRepository;

/**
 * Class SucursaleRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:35 pm UTC
*/

class SucursaleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_sucursal',
        'factura_sucursal',
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
        return Sucursale::class;
    }
}
