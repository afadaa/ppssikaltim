<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Layanan
 * @package App\Models
 * @version February 15, 2023, 4:26 am UTC
 *
 * @property string $thumbnail
 * @property string $tittle
 * @property string $desc
 * @property string $categories
 */
class Layanan extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'layanans';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'thumbnail',
        'tittle',
        'desc',
        'categories',
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
        'categories' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'thumbnail' => 'nullable|string|max:255',
        'tittle' => 'nullable|string|max:255',
        'desc' => 'nullable|string',
        'categories' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
