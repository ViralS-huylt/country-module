<?php

namespace Modules\Country\Entities\Traits\Scope;

use Modules\Country\Entities\Traits\Filterable\CodeFilterable;
use Modules\Country\Entities\Traits\Filterable\CountrySearchFilterable;
use Modules\Country\Entities\Traits\Filterable\NameFilterable;

trait CountryScope
{
    use CountrySearchFilterable, NameFilterable, CodeFilterable;

}
