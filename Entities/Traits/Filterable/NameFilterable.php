<?php

namespace Modules\Country\Entities\Traits\Filterable;

use Illuminate\Database\Eloquent\Builder;

trait NameFilterable
{
    /**
     *  Scope a query to only include records have name that contains $name.
     *
     * @param $query
     * @param $name
     *
     * @return mixed
     */
    public function scopeName($query, $name)
    {
        return $query->where('name', 'LIKE', "%{$name}%");
    }
}
