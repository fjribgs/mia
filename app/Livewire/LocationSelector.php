<?php

namespace App\Livewire;

use Livewire\Component;
use Laravolt\Indonesia\Models\District;

class LocationSelector extends Component
{
    public $cities = [];
    public $districts = [];

    public $cityCode;
    public $districtCode;

    public function mount($cities)
    {
        // dd($cities);
        $this->cities = $cities;
    }

    public function updatedCityCode($value)
    {
        logger(District::where('city_code', $value)->count());
        logger("CITY UPDATED: ".$value);
        $this->districts = District::where('city_code', $value)->get();
        $this->districtCode = null;
    }

    public function render()
    {
        return view('livewire.location-selector');
    }
}
