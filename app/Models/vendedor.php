<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class vendedor
 * @package App\Models
 * @version September 15, 2022, 10:54 pm UTC
 *
 * @property \App\Models\Caja $idcaja
 * @property \App\Models\Login $idlogin
 * @property integer $idcaja
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 * @property integer $idLogin
 */
class vendedor extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'vendedor';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idcaja',
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
        'idvendedor' => 'integer',
        'idcaja' => 'integer',
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
        'idcaja' => 'required|integer',
        'usuario_act' => 'required|string|max:25',
        'fecha_act' => 'required',
        'idLogin' => 'required|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcaja()
    {
        return $this->belongsTo(\App\Models\Caja::class, 'idcaja');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idlogin()
    {
        return $this->belongsTo(\App\Models\Login::class, 'idLogin');
    }
}
