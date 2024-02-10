<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class RajaOngkirProvinceCityRepository implements ProvinceCityRepositoryInterface
{
    public function searchProvinces($id)
    {
        $response = Http::get('https://api.rajaongkir.com/starter/province', ['id' => $id]);

        return $response->json();
    }

    public function searchCities($id)
    {
        $response = Http::get('https://api.rajaongkir.com/starter/city', ['id' => $id]);

        return $response->json();
    }
}