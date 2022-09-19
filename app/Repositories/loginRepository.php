<?php

namespace App\Repositories;

use App\Models\login;
use App\Repositories\BaseRepository;

/**
 * Class loginRepository
 * @package App\Repositories
 * @version September 15, 2022, 10:42 pm UTC
*/

class loginRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'usuario',
        'clave',
        'perfil',
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
        return login::class;
    }
}
