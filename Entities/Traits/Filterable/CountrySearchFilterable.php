<?php

namespace Modules\Country\Entities\Traits\Filterable;

use Illuminate\Database\Eloquent\Builder;

/**
 * Trait CountrySearchFilterable
 *
 * @package Modules\Core\Entities\Traits\Filterable
 */
trait CountrySearchFilterable
{
    /**
     * @param $query
     * @param $keyword
     *
     * @return mixed
     */
    public function scopeSearch($query, $keyword)
    {
        return $query->whereHas('translations', function ($q) use ($keyword) {
            $q->where('name' , 'like', '%'. $keyword .'%');
        });
    }
}
