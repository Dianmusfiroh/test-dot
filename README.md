
## Installation

- Ubah .env.example jadi .env
- Buat database di local dengan nama db_dot_test
- buat migration dengan cara "php artisan migrate"
- jalankan fatch data yang mengambil data dari raja ongkir ke database lokal dengan cara "php artisan app:fetch-rajaongkir-data-command"
- jalankan aplikasi dengan cara "php artisan serve"
- testing REST API bisa dites di postman

## contoh response api
- contoh get api cities dengan parameter id = 1 http://127.0.0.1:8000/api/search/cities?id=1
![image](https://github.com/Dianmusfiroh/test-dot/assets/58027730/27b93d22-f8ae-4b0b-a83d-244b340e5706)
- Contoh get api provinces dengan parameter id = 1 http://127.0.0.1:8000/api/search/provinces?id=1
  ![image](https://github.com/Dianmusfiroh/test-dot/assets/58027730/fa942009-fbba-4a3d-91be-06e1301a3c90)
