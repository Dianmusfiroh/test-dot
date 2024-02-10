<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;

class RajaongkirController extends Controller
{
    public function searchProvinces(Request $request)
    {
        $provinceId = $request->input('id');
        $province = Province::find($provinceId);

        return response()->json($province);
    }

    public function searchCities(Request $request)
    {
        $cityId = $request->input('id');
        $city = City::find($cityId);

        return response()->json($city);
    }
}
