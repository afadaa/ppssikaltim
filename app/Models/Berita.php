<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Berita
 * @package App\Models
 * @version February 7, 2023, 6:50 am UTC
 *
 * @property string $thumbnail
 * @property string $tittle
 * @property string $desc
 * @property string $slug
 */
class Berita extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'beritas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'thumbnail',
        'tittle',
        'desc',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'thumbnail' => 'string',
        'tittle' => 'string',
        'desc' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'thumbnail' => 'nullable|string|max:255',
        'tittle' => 'nullable|string|max:255',
        // 'desc' => 'nullable|string|max:255',
        'slug' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
