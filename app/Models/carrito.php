<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class carrito
 * @package App\Models
 * @version September 15, 2022, 10:50 pm UTC
 *
 * @property \App\Models\Producto $idproducto
 * @property \App\Models\Ventum $idventa
 * @property integer $idVenta
 * @property integer $idProducto
 * @property integer $cantidad
 * @property integer $precio_venta
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 */
class carrito extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'carrito';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idVenta',
        'idProducto',
        'cantidad',
        'precio_venta',
        'usuario_act',
        'fecha_act'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idCarrito' => 'integer',
        'idVenta' => 'integer',
        'idProducto' => 'integer',
        'cantidad' => 'integer',
        'precio_venta' => 'integer',
        'usuario_act' => 'string',
        'fecha_act' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idVenta' => 'required|integer',
        'idProducto' => 'required|integer',
        'cantidad' => 'required|integer',
        'precio_venta' => 'required|integer',
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
    public function idventa()
    {
        return $this->belongsTo(\App\Models\Ventum::class, 'idVenta');
    }
}
