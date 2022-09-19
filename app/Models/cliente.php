<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class cliente
 * @package App\Models
 * @version September 15, 2022, 10:43 pm UTC
 *
 * @property \App\Models\Login $idlogin
 * @property \Illuminate\Database\Eloquent\Collection $ciudads
 * @property \Illuminate\Database\Eloquent\Collection $venta
 * @property string $Ruc
 * @property string $Cedula
 * @property string $Nombre
 * @property string $Apellido
 * @property string $telefono
 * @property string $email
 * @property string $estado_cliente
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 * @property integer $idLogin
 */
class cliente extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cliente';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Ruc',
        'Cedula',
        'Nombre',
        'Apellido',
        'telefono',
        'email',
        'estado_cliente',
        'usuario_act',
        'fecha_act',
        'idLogin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idCliente' => 'integer',
        'Ruc' => 'string',
        'Cedula' => 'string',
        'Nombre' => 'string',
        'Apellido' => 'string',
        'telefono' => 'string',
        'email' => 'string',
        'estado_cliente' => 'string',
        'usuario_act' => 'string',
        'fecha_act' => 'datetime',
        'idLogin' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Ruc' => 'nullable|string|max:20',
        'Cedula' => 'nullable|string|max:20',
        'Nombre' => 'required|string|max:100',
        'Apellido' => 'required|string|max:100',
        'telefono' => 'nullable|string|max:20',
        'email' => 'nullable|string|max:200',
        'estado_cliente' => 'nullable|string|max:20',
        'usuario_act' => 'required|string|max:25',
        'fecha_act' => 'required',
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function ciudads()
    {
        return $this->belongsToMany(\App\Models\Ciudad::class, 'direccion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function venta()
    {
        return $this->hasMany(\App\Models\Ventum::class, 'idCliente');
    }
    
    public function getFullNameAttribute(){  return $this->Nombre . ' ' . $this->Apellido;}

}
