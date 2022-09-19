<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class producto
 * @package App\Models
 * @version September 15, 2022, 10:49 pm UTC
 *
 * @property \App\Models\Categorium $idcategoria
 * @property \App\Models\Deposito $iddeposito
 * @property \Illuminate\Database\Eloquent\Collection $motivoAjustes
 * @property \Illuminate\Database\Eloquent\Collection $venta
 * @property \Illuminate\Database\Eloquent\Collection $compras
 * @property \Illuminate\Database\Eloquent\Collection $fotos
 * @property \Illuminate\Database\Eloquent\Collection $stocks
 * @property integer $idDeposito
 * @property integer $idCategoria
 * @property string $nombre_producto
 * @property string $descripcion_larga
 * @property string $tamanho
 * @property string $color
 * @property integer $stock_minimo
 * @property integer $precio_unitario
 * @property string $estado_producto
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 */
class producto extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'producto';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idDeposito',
        'idCategoria',
        'nombre_producto',
        'descripcion_larga',
        'tamanho',
        'color',
        'stock_minimo',
        'precio_unitario',
        'estado_producto',
        'usuario_act',
        'fecha_act'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idProducto' => 'integer',
        'idDeposito' => 'integer',
        'idCategoria' => 'integer',
        'nombre_producto' => 'string',
        'descripcion_larga' => 'string',
        'tamanho' => 'string',
        'color' => 'string',
        'stock_minimo' => 'integer',
        'precio_unitario' => 'integer',
        'estado_producto' => 'string',
        'usuario_act' => 'string',
        'fecha_act' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idDeposito' => 'required|integer',
        'idCategoria' => 'required|integer',
        'nombre_producto' => 'required|string|max:45',
        'descripcion_larga' => 'required|string|max:255',
        'tamanho' => 'nullable|string|max:10',
        'color' => 'nullable|string|max:15',
        'stock_minimo' => 'required|integer',
        'precio_unitario' => 'required|integer',
        'estado_producto' => 'nullable|string|max:10',
        'usuario_act' => 'required|string|max:25',
        'fecha_act' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcategoria()
    {
        return $this->belongsTo(\App\Models\Categorium::class, 'idCategoria');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function iddeposito()
    {
        return $this->belongsTo(\App\Models\Deposito::class, 'idDeposito');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function motivoAjustes()
    {
        return $this->belongsToMany(\App\Models\MotivoAjuste::class, 'ajuste');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function venta()
    {
        return $this->belongsToMany(\App\Models\Ventum::class, 'carrito');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function compras()
    {
        return $this->belongsToMany(\App\Models\Compra::class, 'detalle_compra');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function fotos()
    {
        return $this->hasMany(\App\Models\Foto::class, 'idProducto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function stocks()
    {
        return $this->hasMany(\App\Models\Stock::class, 'idProducto');
    }
}
