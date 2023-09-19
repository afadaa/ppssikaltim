<?php

namespace App\Repositories;

use App\Models\Partner;
use App\Repositories\BaseRepository;

/**
 * Class PartnerRepository
 * @package App\Repositories
 * @version February 15, 2023, 6:11 am UTC
*/

class PartnerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'thumbnail',
        'tittle',
        'link'
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
        return Partner::class;
    }
}
