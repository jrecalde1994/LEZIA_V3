<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class foto
 * @package App\Models
 * @version September 15, 2022, 10:49 pm UTC
 *
 * @property \App\Models\Producto $idproducto
 * @property integer $idProducto
 * @property string $url_foto
 * @property string $usuario_act
 * @property string|\Carbon\Carbon $fecha_act
 */
class foto extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'foto';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idProducto',
        'url_foto',
        'usuario_act',
        'fecha_act'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idfoto' => 'integer',
        'idProducto' => 'integer',
        'url_foto' => 'string',
        'usuario_act' => 'string',
        'fecha_act' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idProducto' => 'required|integer',
        'url_foto' => 'required|string|max:300',
        'usuario_act' => 'required|string|max:25',
        'fecha_act' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idproducto()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'idProducto');
    }
}
