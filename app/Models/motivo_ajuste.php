<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class motivo_ajuste
 * @package App\Models
 * @version September 15, 2022, 10:55 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $productos
 * @property string $motivo
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 */
class motivo_ajuste extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'motivo_ajuste';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'motivo',
        'usuario_act',
        'fecha_act'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idMotivoAajuste' => 'integer',
        'motivo' => 'string',
        'usuario_act' => 'string',
        'fecha_act' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'motivo' => 'required|string|max:45',
        'usuario_act' => 'required|string|max:25',
        'fecha_act' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function productos()
    {
        return $this->belongsToMany(\App\Models\Producto::class, 'ajuste');
    }
}
