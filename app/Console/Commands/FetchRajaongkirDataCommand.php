<?php

namespace App\Console\Commands;

use App\Models\City;
use App\Models\Province;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchRajaongkirDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-rajaongkir-data-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $apiKey = env('RAJAONGKIR_API_KEY');
        if (empty($apiKey)) {
            $this->error('Rajaongkir API key not found in .env file.');
            return;
        }

        $response = Http::get('https://api.rajaongkir.com/starter/province', [
            'key' => $apiKey,
        ]);

        if ($response->successful()) {
            $data = $response->json();

            if (isset($data['rajaongkir']['results'])) {
                $provinces = $data['rajaongkir']['results'];

                foreach ($provinces as $province) {
                    Province::updateOrCreate(['province_id' => $province['province_id']], $province);
                }

                $this->info('Rajaongkir province data fetched and stored successfully.');
            } else {
                $this->error('Invalid response format. "results" key not found.');
            }
        } else {
            $this->error('Failed to fetch Rajaongkir data. ' . $response->status());
        }

        $cityResponse = Http::get('https://api.rajaongkir.com/starter/city', [
            'key' => $apiKey,
        ]);

        if ($cityResponse->successful()) {
            $cityData = $cityResponse->json();

            if (isset($cityData['rajaongkir']['results'])) {
                $cities = $cityData['rajaongkir']['results'];

                foreach ($cities as $city) {
                    City::updateOrCreate(['city_id' => $city['city_id']], $city);
                }

                $this->info('Rajaongkir city data fetched and stored successfully.');
            } else {
                $this->error('Invalid response format for cities. "results" key not found.');
            }
        } else {
            $this->error('Failed to fetch Rajaongkir city data. ' . $cityResponse->status());
        }
    }
}
