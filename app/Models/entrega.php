<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class entrega
 * @package App\Models
 * @version September 15, 2022, 10:52 pm UTC
 *
 * @property \App\Models\Direccion $iddireccionentrega
 * @property \App\Models\Repartidor $idrepartidor
 * @property \App\Models\Ventum $idventa
 * @property integer $idRepartidor
 * @property string|\Carbon\Carbon $fecha_asingacion
 * @property string|\Carbon\Carbon $fecha_entrega
 * @property integer $idDireccionEntrega
 * @property integer $idVenta
 * @property string $estado_entrega
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 */
class entrega extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'entrega';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idRepartidor',
        'fecha_asingacion',
        'fecha_entrega',
        'idDireccionEntrega',
        'idVenta',
        'estado_entrega',
        'usuario_act',
        'fecha_act'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idEntrega' => 'integer',
        'idRepartidor' => 'integer',
        'fecha_asingacion' => 'datetime',
        'fecha_entrega' => 'datetime',
        'idDireccionEntrega' => 'integer',
        'idVenta' => 'integer',
        'estado_entrega' => 'string',
        'usuario_act' => 'string',
        'fecha_act' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idRepartidor' => 'required|integer',
        'fecha_asingacion' => 'nullable',
        'fecha_entrega' => 'nullable',
        'idDireccionEntrega' => 'required|integer',
        'idVenta' => 'required|integer',
        'estado_entrega' => 'required|string|max:10',
        'usuario_act' => 'required|string|max:25',
        'fecha_act' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function iddireccionentrega()
    {
        return $this->belongsTo(\App\Models\Direccion::class, 'idDireccionEntrega');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idrepartidor()
    {
        return $this->belongsTo(\App\Models\Repartidor::class, 'idRepartidor');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idventa()
    {
        return $this->belongsTo(\App\Models\Ventum::class, 'idVenta');
    }
}
