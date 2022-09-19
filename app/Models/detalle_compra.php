<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class detalle_compra
 * @package App\Models
 * @version September 15, 2022, 10:48 pm UTC
 *
 * @property \App\Models\Producto $idproducto
 * @property \App\Models\Compra $idcompra
 * @property integer $idCompra
 * @property integer $idProducto
 * @property integer $cantidad
 * @property integer $precio_compra
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 */
class detalle_compra extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'detalle_compra';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idCompra',
        'idProducto',
        'cantidad',
        'precio_compra',
        'usuario_act',
        'fecha_act'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idDetalleCompra' => 'integer',
        'idCompra' => 'integer',
        'idProducto' => 'integer',
        'cantidad' => 'integer',
        'precio_compra' => 'integer',
        'usuario_act' => 'string',
        'fecha_act' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idCompra' => 'required|integer',
        'idProducto' => 'required|integer',
        'cantidad' => 'required|integer',
        'precio_compra' => 'required|integer',
        'usuario_act' => 'required|string|max:25',
        'fecha_act' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idproducto()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'idProducto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcompra()
    {
        return $this->belongsTo(\App\Models\Compra::class, 'idCompra');
    }
}
