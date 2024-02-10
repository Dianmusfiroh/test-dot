<?php
namespace App\Repositories;

use App\Models\Province;
use App\Models\City;

class DatabaseProvinceCityRepository implements ProvinceCityRepositoryInterface
{
    public function searchProvinces($id)
    {
        return Province::find($id);
    }

    public function searchCities($id)
    {
        return City::find($id);
    }
}