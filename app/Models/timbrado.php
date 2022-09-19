<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class timbrado
 * @package App\Models
 * @version September 15, 2022, 10:47 pm UTC
 *
 * @property \App\Models\Caja $idcaja
 * @property integer $idCaja
 * @property integer $numero_timbrado
 * @property string|\Carbon\Carbon $fecha_inicio
 * @property string|\Carbon\Carbon $fecha_vencimiento
 * @property integer $primera_factura
 * @property integer $factura_actual
 * @property integer $ultima_factura
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 */
class timbrado extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'timbrado';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idCaja',
        'numero_timbrado',
        'fecha_inicio',
        'fecha_vencimiento',
        'primera_factura',
        'factura_actual',
        'ultima_factura',
        'usuario_act',
        'fecha_act'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idTimbrado' => 'integer',
        'idCaja' => 'integer',
        'numero_timbrado' => 'integer',
        'fecha_inicio' => 'datetime',
        'fecha_vencimiento' => 'datetime',
        'primera_factura' => 'integer',
        'factura_actual' => 'integer',
        'ultima_factura' => 'integer',
        'usuario_act' => 'string',
        'fecha_act' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idCaja' => 'required|integer',
        'numero_timbrado' => 'required|integer',
        'fecha_inicio' => 'required',
        'fecha_vencimiento' => 'required',
        'primera_factura' => 'required|integer',
        'factura_actual' => 'nullable|integer',
        'ultima_factura' => 'required|integer',
        'usuario_act' => 'required|string|max:25',
        'fecha_act' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcaja()
    {
        return $this->belongsTo(\App\Models\Caja::class, 'idCaja');
    }
}
