<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ajuste
 * @package App\Models
 * @version September 15, 2022, 10:54 pm UTC
 *
 * @property \App\Models\MotivoAjuste $idmotivoajuste
 * @property \App\Models\Producto $idproducto
 * @property integer $idMotivoAjuste
 * @property integer $idProducto
 * @property integer $existencia_anterior
 * @property integer $existencia_actual
 * @property integer $diferencia
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 */
class ajuste extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'ajuste';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idMotivoAjuste',
        'idProducto',
        'existencia_anterior',
        'existencia_actual',
        'diferencia',
        'usuario_act',
        'fecha_act'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idajuste' => 'integer',
        'idMotivoAjuste' => 'integer',
        'idProducto' => 'integer',
        'existencia_anterior' => 'integer',
        'existencia_actual' => 'integer',
        'diferencia' => 'integer',
        'usuario_act' => 'string',
        'fecha_act' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idMotivoAjuste' => 'required|integer',
        'idProducto' => 'required|integer',
        'existencia_anterior' => 'required|integer',
        'existencia_actual' => 'required|integer',
        'diferencia' => 'required|integer',
        'usuario_act' => 'required|string|max:25',
        'fecha_act' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idmotivoajuste()
    {
        return $this->belongsTo(\App\Models\MotivoAjuste::class, 'idMotivoAjuste');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idproducto()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'idProducto');
    }
}
