<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class compra
 * @package App\Models
 * @version September 15, 2022, 10:48 pm UTC
 *
 * @property \App\Models\Proveedor $idproveedor
 * @property \Illuminate\Database\Eloquent\Collection $productos
 * @property integer $idProveedor
 * @property string|\Carbon\Carbon $fecha_compra
 * @property string $numero_factura
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 */
class compra extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'compra';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idProveedor',
        'fecha_compra',
        'numero_factura',
        'usuario_act',
        'fecha_act'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idCompra' => 'integer',
        'idProveedor' => 'integer',
        'fecha_compra' => 'datetime',
        'numero_factura' => 'string',
        'usuario_act' => 'string',
        'fecha_act' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idProveedor' => 'required|integer',
        'fecha_compra' => 'required',
        'numero_factura' => 'required|string|max:45',
        'usuario_act' => 'required|string|max:25',
        'fecha_act' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idproveedor()
    {
        return $this->belongsTo(\App\Models\Proveedor::class, 'idProveedor');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function productos()
    {
        return $this->belongsToMany(\App\Models\Producto::class, 'detalle_compra');
    }
}
