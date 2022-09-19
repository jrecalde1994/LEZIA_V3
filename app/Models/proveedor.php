<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class proveedor
 * @package App\Models
 * @version September 15, 2022, 10:46 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $compras
 * @property string $Ruc
 * @property string $Razon_social
 * @property string $Telefono
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 * @property string $estado_proveedor
 */
class proveedor extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'proveedor';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Ruc',
        'Razon_social',
        'Telefono',
        'usuario_act',
        'fecha_act',
        'estado_proveedor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idProveedor' => 'integer',
        'Ruc' => 'string',
        'Razon_social' => 'string',
        'Telefono' => 'string',
        'usuario_act' => 'string',
        'fecha_act' => 'datetime',
        'estado_proveedor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Ruc' => 'required|string|max:20',
        'Razon_social' => 'required|string|max:255',
        'Telefono' => 'nullable|string|max:20',
        'usuario_act' => 'required|string|max:25',
        'fecha_act' => 'required',
        'estado_proveedor' => 'nullable|string|max:20'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function compras()
    {
        return $this->hasMany(\App\Models\Compra::class, 'idProveedor');
    }
}
