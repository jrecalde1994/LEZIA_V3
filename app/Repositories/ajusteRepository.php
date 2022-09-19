<?php

namespace App\Repositories;

use App\Models\ajuste;
use App\Repositories\BaseRepository;

/**
 * Class ajusteRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:54 pm UTC
*/

class ajusteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idMotivoAjuste',
        'idProducto',
        'existencia_anterior',
        'existencia_actual',
        'diferencia',
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
        return ajuste::class;
    }
}
