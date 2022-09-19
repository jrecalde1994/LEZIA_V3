<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class venta
 * @package App\Models
 * @version September 15, 2022, 10:52 pm UTC
 *
 * @property \App\Models\Cliente $idcliente
 * @property \Illuminate\Database\Eloquent\Collection $productos
 * @property \Illuminate\Database\Eloquent\Collection $entregas
 * @property integer $idCliente
 * @property string|\Carbon\Carbon $fecha_venta
 * @property integer $sucursal
 * @property integer $punto_expedicion
 * @property string $numero_factura
 * @property string $condicion_venta
 * @property string $numero_transaccion
 * @property string $estado_de_factura
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 */
class venta extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'venta';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idCliente',
        'fecha_venta',
        'sucursal',
        'punto_expedicion',
        'numero_factura',
        'condicion_venta',
        'numero_transaccion',
        'estado_de_factura',
        'usuario_act',
        'fecha_act'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idVenta' => 'integer',
        'idCliente' => 'integer',
        'fecha_venta' => 'datetime',
        'sucursal' => 'integer',
        'punto_expedicion' => 'integer',
        'numero_factura' => 'string',
        'condicion_venta' => 'string',
        'numero_transaccion' => 'string',
        'estado_de_factura' => 'string',
        'usuario_act' => 'string',
        'fecha_act' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idCliente' => 'required|integer',
        'fecha_venta' => 'required',
        'sucursal' => 'required|integer',
        'punto_expedicion' => 'nullable|integer',
        'numero_factura' => 'nullable|string|max:15',
        'condicion_venta' => 'nullable|string|max:10',
        'numero_transaccion' => 'nullable|string|max:150',
        'estado_de_factura' => 'nullable|string|max:10',
        'usuario_act' => 'required|string|max:25',
        'fecha_act' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'idCliente');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function productos()
    {
        return $this->belongsToMany(\App\Models\Producto::class, 'carrito');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function entregas()
    {
        return $this->hasMany(\App\Models\Entrega::class, 'idVenta');
    }
}
