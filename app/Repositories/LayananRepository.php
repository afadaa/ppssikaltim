<?php

namespace App\Repositories;

use App\Models\Layanan;
use App\Repositories\BaseRepository;

/**
 * Class LayananRepository
 * @package App\Repositories
 * @version February 15, 2023, 4:26 am UTC
*/

class LayananRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'thumbnail',
        'tittle',
        'desc',
        'categories',
        'slug'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Layanan::class;
    }
}
