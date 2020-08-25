<?php


namespace Modules\Country\Entities\Tenants;

use Hyn\Tenancy\Traits\UsesTenantConnection;

class Country extends \Modules\Country\Entities\Country
{
    use UsesTenantConnection;

}
