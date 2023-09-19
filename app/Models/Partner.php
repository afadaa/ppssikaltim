<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Partner
 * @package App\Models
 * @version February 15, 2023, 6:11 am UTC
 *
 * @property string $thumbnail
 * @property string $tittle
 * @property string $link
 */
class Partner extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'partners';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'thumbnail',
        'tittle',
        'link'
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
        'link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'thumbnail' => 'nullable|string|max:255',
        'tittle' => 'nullable|string|max:255',
        'link' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
