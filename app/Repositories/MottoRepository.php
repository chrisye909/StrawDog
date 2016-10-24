<?php

namespace App\Repositories;

use App\Models\Motto;
use InfyOm\Generator\Common\BaseRepository;

class MottoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'content',
        'source'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Motto::class;
    }
}
