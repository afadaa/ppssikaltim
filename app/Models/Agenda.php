<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Agenda
 * @package App\Models
 * @version February 7, 2023, 6:51 am UTC
 *
 * @property string $thumbnail
 * @property string $tittle
 * @property string $desc
 * @property string $location
 * @property integer $quota
 * @property string $gift
 * @property string|\Carbon\Carbon $date_start
 * @property string|\Carbon\Carbon $date_end
 * @property string $link
 * @property string $slug
 */
class Agenda extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'agendas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'thumbnail',
        'tittle',
        'desc',
        'location',
        'quota',
        'gift',
        'date_start',
        'date_end',
        'link',
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
        'location' => 'string',
        'quota' => 'integer',
        'gift' => 'string',
        'date_start' => 'datetime',
        'date_end' => 'datetime',
        'link' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'thumbnail' => 'nullable|string|max:255',
        // 'tittle' => 'nullable|string|max:255',
        // 'desc' => 'nullable|string|max:255',
        // 'location' => 'nullable|string',
        // 'quota' => 'nullable|integer',
        // 'gift' => 'nullable|string|max:45',
        // 'date_start' => 'nullable',
        // 'date_end' => 'nullable',
        // 'link' => 'nullable|string',
        // 'slug' => 'nullable|string|max:45',
        // 'created_at' => 'nullable',
        // 'updated_at' => 'nullable',
        // 'deleted_at' => 'nullable'
    ];


}
