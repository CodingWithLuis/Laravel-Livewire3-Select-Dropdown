<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\Country;
use Livewire\Component;

class Dropdown extends Component
{

    public $countries;
    public $cities = [];
    public $countryId;
    public $cityId;

    public function mount()
    {
        $this->countries = Country::all();
        $this->cities = collect();
    }

    public function render()
    {
        return view('livewire.dropdown');
    }

    public function updatedCountryId($value): void
    {
        $this->cities = City::where('country_id', $value)->get();
        $this->city = $this->cities->first()->id ?? null;
    }
}
