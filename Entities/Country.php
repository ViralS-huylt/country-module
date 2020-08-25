<?php


namespace Modules\Country\Entities;

use Astrotomic\Translatable\Translatable;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;
use Modules\Country\Entities\Traits\Scope\CountryScope;

class Country extends Model
{
    use Translatable, Cachable, CountryScope;

    protected $table = 'countries';

    protected $fillable = ['code', 'flag'];

    public $translatedAttributes = ['name'];
    public $timestamps = false;

}
