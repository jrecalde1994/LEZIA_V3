<?php

namespace App\Repositories;

use App\Models\motivo_ajuste;
use App\Repositories\BaseRepository;

/**
 * Class motivo_ajusteRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:55 pm UTC
*/

class motivo_ajusteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'motivo',
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
        return motivo_ajuste::class;
    }
}
