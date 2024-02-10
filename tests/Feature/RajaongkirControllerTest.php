<?php

namespace Tests\Feature;

use App\Models\City;
use App\Models\Province;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\Passport;
use Tests\TestCase;
use Laravel\Passport\Client;
use Laravel\Passport\ClientRepository;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class RajaongkirControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function testSearchProvinces()
    {
        $response = $this->get('/api/search/provinces?id=1');
        $response->assertStatus(Response::HTTP_OK);
        $response->assertJsonStructure(['province_id', 'province']);
    }

    public function testSearchCities()
    {
        $response = $this->get('/api/search/cities?id=1');
        $response->assertStatus(Response::HTTP_OK);
        $response->assertJsonStructure(['city_id', 'province_id', 'city_name']);
    }
}
