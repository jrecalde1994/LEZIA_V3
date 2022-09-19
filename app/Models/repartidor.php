<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class repartidor
 * @package App\Models
 * @version September 15, 2022, 10:44 pm UTC
 *
 * @property \App\Models\Login $idlogin
 * @property \Illuminate\Database\Eloquent\Collection $entregas
 * @property string $Cedula
 * @property string $Nombre
 * @property string $Apellido
 * @property string $telefono
 * @property string|\Carbon\Carbon $fecha_act
 * @property string $usuario_act
 * @property string $estado_repartidor
 * @property integer $idLogin
 */
class repartidor extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'repartidor';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Cedula',
        'Nombre',
        'Apellido',
        'telefono',
        'fecha_act',
        'usuario_act',
        'estado_repartidor',
        'idLogin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idRepartidor' => 'integer',
        'Cedula' => 'string',
        'Nombre' => 'string',
        'Apellido' => 'string',
        'telefono' => 'string',
        'fecha_act' => 'datetime',
        'usuario_act' => 'string',
        'estado_repartidor' => 'string',
        'idLogin' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Cedula' => 'required|string|max:20',
        'Nombre' => 'required|string|max:100',
        'Apellido' => 'required|string|max:100',
        'telefono' => 'nullable|string|max:20',
        'fecha_act' => 'required',
        'usuario_act' => 'required|string|max:25',
        'estado_repartidor' => 'nullable|string|max:20',
        'idLogin' => 'required|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idlogin()
    {
        return $this->belongsTo(\App\Models\Login::class, 'idLogin');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function entregas()
    {
        return $this->hasMany(\App\Models\Entrega::class, 'idRepartidor');
    }
}
