<?php

namespace App\Repositories;

use App\Models\categoria;
use App\Repositories\BaseRepository;

/**
 * Class categoriaRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:49 pm UTC
*/

class categoriaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_categoria',
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
        return categoria::class;
    }
}
