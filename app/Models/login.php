<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class login
 * @package App\Models
 * @version September 15, 2022, 10:42 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $clientes
 * @property \Illuminate\Database\Eloquent\Collection $repartidors
 * @property \Illuminate\Database\Eloquent\Collection $cajas
 * @property string $usuario
 * @property string $clave
 * @property string $perfil
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 */
class login extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'login';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'usuario',
        'clave',
        'perfil',
        'usuario_act',
        'fecha_act'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idLogin' => 'integer',
        'usuario' => 'string',
        'clave' => 'string',
        'perfil' => 'string',
        'usuario_act' => 'string',
        'fecha_act' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'usuario' => 'required|string|max:25',
        'clave' => 'required|string|max:300',
        'perfil' => 'required|string|max:10',
        'usuario_act' => 'required|string|max:25',
        'fecha_act' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function clientes()
    {
        return $this->hasMany(\App\Models\Cliente::class, 'idLogin');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function repartidors()
    {
        return $this->hasMany(\App\Models\Repartidor::class, 'idLogin');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function cajas()
    {
        return $this->belongsToMany(\App\Models\Caja::class, 'vendedor');
    }
}
