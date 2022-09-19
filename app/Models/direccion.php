<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class direccion
 * @package App\Models
 * @version September 15, 2022, 10:43 pm UTC
 *
 * @property \App\Models\Ciudad $idciudad
 * @property \App\Models\Cliente $idcliente
 * @property \Illuminate\Database\Eloquent\Collection $entregas
 * @property integer $idCiudad
 * @property string $calle
 * @property string $calle_transversal
 * @property string $numero_casa
 * @property string $barrio
 * @property string $link_mapa
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 * @property integer $idCliente
 */
class direccion extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'direccion';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idCiudad',
        'calle',
        'calle_transversal',
        'numero_casa',
        'barrio',
        'link_mapa',
        'usuario_act',
        'fecha_act',
        'idCliente'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idDireccion' => 'integer',
        'idCiudad' => 'integer',
        'calle' => 'string',
        'calle_transversal' => 'string',
        'numero_casa' => 'string',
        'barrio' => 'string',
        'link_mapa' => 'string',
        'usuario_act' => 'string',
        'fecha_act' => 'datetime',
        'idCliente' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idCiudad' => 'required|integer',
        'calle' => 'required|string|max:30',
        'calle_transversal' => 'nullable|string|max:60',
        'numero_casa' => 'nullable|string|max:10',
        'barrio' => 'required|string|max:15',
        'link_mapa' => 'nullable|string|max:255',
        'usuario_act' => 'required|string|max:25',
        'fecha_act' => 'required',
        'idCliente' => 'required|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idciudad()
    {
        return $this->belongsTo(\App\Models\Ciudad::class, 'idCiudad');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'idCliente');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function entregas()
    {
        return $this->hasMany(\App\Models\Entrega::class, 'idDireccionEntrega');
    }
}
