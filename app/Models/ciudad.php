<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ciudad
 * @package App\Models
 * @version September 15, 2022, 10:36 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $clientes
 * @property \Illuminate\Database\Eloquent\Collection $sucursals
 * @property string $nombre_ciudad
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 * @property string $estado_ciudad
 */
class ciudad extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'ciudad';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_ciudad',
        'usuario_act',
        'fecha_act',
        'estado_ciudad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idCiudad' => 'integer',
        'nombre_ciudad' => 'string',
        'usuario_act' => 'string',
        'fecha_act' => 'datetime',
        'estado_ciudad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_ciudad' => 'required|string|max:45',
        'usuario_act' => 'required|string|max:25',
        'fecha_act' => 'required',
        'estado_ciudad' => 'nullable|string|max:20'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function clientes()
    {
        return $this->belongsToMany(\App\Models\Cliente::class, 'direccion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function sucursals()
    {
        return $this->belongsToMany(\App\Models\Sucursal::class, 'envio');
    }
}
