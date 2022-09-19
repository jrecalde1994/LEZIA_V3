<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class deposito
 * @package App\Models
 * @version September 15, 2022, 10:54 pm UTC
 *
 * @property \App\Models\Sucursal $idsucursal
 * @property \Illuminate\Database\Eloquent\Collection $categoria
 * @property integer $idSucursal
 * @property string $nombre_deposito
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 */
class deposito extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'deposito';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idSucursal',
        'nombre_deposito',
        'usuario_act',
        'fecha_act'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idDeposito' => 'integer',
        'idSucursal' => 'integer',
        'nombre_deposito' => 'string',
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
        'nombre_deposito' => 'required|string|max:50',
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function categoria()
    {
        return $this->belongsToMany(\App\Models\Categorium::class, 'producto');
    }
}
