<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Sucursale
 * @package App\Models
 * @version September 15, 2022, 10:35 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $cajas
 * @property \Illuminate\Database\Eloquent\Collection $depositos
 * @property \Illuminate\Database\Eloquent\Collection $ciudads
 * @property string $nombre_sucursal
 * @property integer $factura_sucursal
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 */
class Sucursale extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'sucursal';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_sucursal',
        'factura_sucursal',
        'usuario_act',
        'fecha_act'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idSucursal' => 'integer',
        'nombre_sucursal' => 'string',
        'factura_sucursal' => 'integer',
        'usuario_act' => 'string',
        'fecha_act' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_sucursal' => 'required|string|max:50',
        'factura_sucursal' => 'required|integer',
        'usuario_act' => 'required|string|max:25',
        'fecha_act' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cajas()
    {
        return $this->hasMany(\App\Models\Caja::class, 'idSucursal');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function depositos()
    {
        return $this->hasMany(\App\Models\Deposito::class, 'idSucursal');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function ciudads()
    {
        return $this->belongsToMany(\App\Models\Ciudad::class, 'envio');
    }
}
