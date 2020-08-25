<?php

namespace Modules\Country\Entities\Traits\Filterable;

use Illuminate\Database\Eloquent\Builder;

/**
 * Trait CodeFilterable
 *
 * @package Modules\Core\Entities\Traits\Filterable
 */
trait CodeFilterable
{
    /**
     * @param $query
     * @param $code
     *
     * @return mixed
     */
    public function scopeCode($query, $code)
    {
        return $query->where('name', 'LIKE', "%{$code}%");
    }
}
