<?php
namespace App\Repositories;

class ProvinceCityRepositoryFactory
{
    public static function create()
    {
        $repositoryType = config('services.province_city_repository');

        switch ($repositoryType) {
            case 'database':
                return new DatabaseProvinceCityRepository();
            case 'rajaongkir':
                return new RajaOngkirProvinceCityRepository();
            default:
                throw new \InvalidArgumentException("Invalid repository type: $repositoryType");
        }
    }
}
