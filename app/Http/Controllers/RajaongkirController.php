<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use App\Repositories\ProvinceCityRepositoryFactory;
use Illuminate\Http\Request;

class RajaongkirController extends Controller
{
    // public function searchProvinces(Request $request)
    // {
    //     $provinceId = $request->input('id');
    //     $province = Province::find($provinceId);

    //     return response()->json($province);
    // }

    // public function searchCities(Request $request)
    // {
    //     $cityId = $request->input('id');
    //     $city = City::find($cityId);

    //     return response()->json($city);
    // }
    protected $repository;

    public function __construct()
    {
        $this->middleware('auth:api');
        $this->repository = ProvinceCityRepositoryFactory::create();
    }

    public function searchProvinces(Request $request)
    {
        $provinceId = $request->input('id');
        $province = $this->repository->searchProvinces($provinceId);

        return response()->json($province);
    }

    public function searchCities(Request $request)
    {
        $cityId = $request->input('id');
        $city = $this->repository->searchCities($cityId);

        return response()->json($city);
    }
}
