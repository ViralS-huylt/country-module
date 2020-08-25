<?php


namespace Modules\Country\Repositories\Cache;


use Illuminate\Cache\CacheManager;
use Modules\Core\Repositories\Cache\BaseCacheRepository;
use Modules\Country\Entities\Country;
use Modules\Country\Repositories\Contracts\CountryRepositoryInterface;
use Modules\Country\Repositories\CountryRepository;

class CountryCacheRepository extends BaseCacheRepository implements CountryRepositoryInterface
{
    /**
     * CountryCacheRepository constructor.
     *
     * @param Country           $country
     * @param CacheManager      $cache
     * @param CountryRepository $countryRepository
     */
    public function __construct(Country $country, CacheManager $cache, CountryRepository $countryRepository)
    {
        $this->model = $country;
        $this->cache = $cache;
        parent::__construct($countryRepository);
    }

    public function updateActive($id){
        $this->cache->clear();
        $country = $this->findById($id);

        $country->active = $country->active ? config('country.none_active') : config('country.active');
        $country->save();
        return $country;
    }
}
