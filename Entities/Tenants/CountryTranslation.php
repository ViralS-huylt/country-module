<?php


namespace Modules\Country\Entities\Tenants;

use Hyn\Tenancy\Traits\UsesTenantConnection;

class CountryTranslation extends \Modules\Country\Entities\CountryTranslation
{
    use UsesTenantConnection;
}
