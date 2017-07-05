<?php

namespace App\Modules\User\Model;
use Illuminate\Database\Eloquent\Model;

class CountryMaster extends Model
{
    protected $table = 'country_master';
    public function getCountry() {
        return CountryMaster::all();
    }
    
}