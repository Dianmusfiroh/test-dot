<?php

namespace App\Repositories;

interface ProvinceCityRepositoryInterface
{
    public function searchProvinces($id);
    public function searchCities($id);
}

