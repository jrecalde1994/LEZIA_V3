<?php

namespace App\Repositories;

use App\Models\proveedor;
use App\Repositories\BaseRepository;

/**
 * Class proveedorRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:46 pm UTC
*/

class proveedorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Ruc',
        'Razon_social',
        'Telefono',
        'usuario_act',
        'fecha_act',
        'estado_proveedor'
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
        return proveedor::class;
    }
}
