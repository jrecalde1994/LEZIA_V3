<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class categoria
 * @package App\Models
 * @version September 15, 2022, 10:49 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $depositos
 * @property string $nombre_categoria
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 */
class categoria extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'categoria';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_categoria',
        'usuario_act',
        'fecha_act'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idCategoria' => 'integer',
        'nombre_categoria' => 'string',
        'usuario_act' => 'string',
        'fecha_act' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_categoria' => 'required|string|max:15',
        'usuario_act' => 'required|string|max:25',
        'fecha_act' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function depositos()
    {
        return $this->belongsToMany(\App\Models\Deposito::class, 'producto');
    }
}
