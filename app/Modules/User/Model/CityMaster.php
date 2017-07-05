<?php

namespace App\Modules\User\Model;

use Illuminate\Database\Eloquent\Model;

class CityMaster extends Model
{

    protected $table = 'city_master';
    
    public function getCities($countryId){
        
        $cities = CityMaster::where('country_id', $countryId)->get();
        return $cities;
    }

}
