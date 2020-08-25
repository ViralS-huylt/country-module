<?php


namespace Modules\Country\Services;

use CountryFlag;

class FlagCountryService
{
//    /**
//     * @var CountryFlag
//     */
//    private $countryFlag;
//
//    public function __construct(CountryFlag $countryFlag)
//    {
//        $this->countryFlag = $countryFlag;
//    }

    public static function getFlagByCode($code)
    {
        try {
            return CountryFlag::get($code);
        } catch (\Exception $exception) {
            return config('country.flag_default');
        }
    }
}
