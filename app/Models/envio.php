<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class envio
 * @package App\Models
 * @version September 15, 2022, 10:53 pm UTC
 *
 * @property \App\Models\Ciudad $idciudad
 * @property \App\Models\Sucursal $idsucursal
 * @property integer $idCiudad
 * @property integer $costo_envio
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 */
class envio extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'envio';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idCiudad',
        'costo_envio',
        'usuario_act',
        'fecha_act'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idsucursal' => 'integer',
        'idCiudad' => 'integer',
        'costo_envio' => 'integer',
        'usuario_act' => 'string',
        'fecha_act' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idCiudad' => 'required|integer',
        'costo_envio' => 'required|integer',
        'usuario_act' => 'required|string|max:25',
        'fecha_act' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idciudad()
    {
        return $this->belongsTo(\App\Models\Ciudad::class, 'idCiudad');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idsucursal()
    {
        return $this->belongsTo(\App\Models\Sucursal::class, 'idsucursal');
    }
}
