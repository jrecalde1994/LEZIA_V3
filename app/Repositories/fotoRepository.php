<?php

namespace App\Repositories;

use App\Models\foto;
use App\Repositories\BaseRepository;

/**
 * Class fotoRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:49 pm UTC
*/

class fotoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idProducto',
        'url_foto',
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
        return foto::class;
    }
}
