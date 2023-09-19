<?php

namespace App\Repositories;

use App\Models\Agenda;
use App\Repositories\BaseRepository;

/**
 * Class AgendaRepository
 * @package App\Repositories
 * @version February 7, 2023, 6:51 am UTC
*/

class AgendaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Agenda::class;
    }
}
