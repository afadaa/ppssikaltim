<?php

namespace App\Repositories;

use App\Models\Berita;
use App\Repositories\BaseRepository;

/**
 * Class BeritaRepository
 * @package App\Repositories
 * @version February 7, 2023, 6:50 am UTC
*/

class BeritaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'thumbnail',
        'tittle',
        'desc',
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
        return Berita::class;
    }
}
