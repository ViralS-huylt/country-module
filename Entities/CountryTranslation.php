<?php


namespace Modules\Country\Entities;


use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class CountryTranslation extends Model
{
    use Cachable;

//    protected $table = 'country_translations';

    protected $fillable = ['name'];
    public $timestamps = false;
}
