<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class caja
 * @package App\Models
 * @version September 15, 2022, 10:42 pm UTC
 *
 * @property \App\Models\Sucursal $idsucursal
 * @property \Illuminate\Database\Eloquent\Collection $timbrados
 * @property \Illuminate\Database\Eloquent\Collection $logins
 * @property integer $idSucursal
 * @property integer $punto_expedicion
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 */
class caja extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'caja';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idSucursal',
        'punto_expedicion',
        'usuario_act',
        'fecha_act'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idCaja' => 'integer',
        'idSucursal' => 'integer',
        'punto_expedicion' => 'integer',
        'usuario_act' => 'string',
        'fecha_act' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idSucursal' => 'required|integer',
        'punto_expedicion' => 'required|integer',
        'usuario_act' => 'required|string|max:25',
        'fecha_act' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idsucursal()
    {
        return $this->belongsTo(\App\Models\Sucursal::class, 'idSucursal');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function timbrados()
    {
        return $this->hasMany(\App\Models\Timbrado::class, 'idCaja');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function logins()
    {
        return $this->belongsToMany(\App\Models\Login::class, 'vendedor');
    }
}
