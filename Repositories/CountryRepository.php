<?php

namespace Modules\Country\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Modules\Core\Repositories\BaseRepository;
use Modules\Country\Entities\Country;
use Modules\Country\Repositories\Contracts\CountryRepositoryInterface;

class CountryRepository extends BaseRepository implements CountryRepositoryInterface
{
    /**
     * CountryRepository constructor.
     *
     * @param Country $country
     */
    public function __construct(Country $country)
    {
        $this->model = $country;
    }
}
