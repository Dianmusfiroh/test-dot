## Installation

- Ubah .env.example jadi .env
- composer update 
- Buat database di local dengan nama db_dot_test
- buat migration dengan cara "php artisan migrate"
- php artisan passport:client --personal untuk membuat id dari passport
- php artisan db:seed --class=UsersTableSeeder untuk membuat data dummy user dengan email = "user@gmail.com" dan password= "password"
- jalankan fatch data yang mengambil data dari raja ongkir ke database lokal dengan cara "php artisan app:fetch-rajaongkir-data-command" *jika mucul eror RAJAONGKIR_API null masukkan perintah php artisan config:clear
  
- jalankan aplikasi dengan cara "php artisan serve"
- testing REST API bisa dites di postman

## ujicoba login menggunakan postman
masukkan link http://localhost:8000/api/login pada postman dan masukkan password dan email pada body. 
![image](https://github.com/Dianmusfiroh/test-dot/assets/58027730/ad14834a-8924-43e6-a024-33a82b9c4384)
copy token yang muncul pada response login dan masukan di Authorization pilih baerer token. masukkan parameter untuk mengambil id dari cities. http://127.0.0.1:8000/api/search/cities?id=1
![image](https://github.com/Dianmusfiroh/test-dot/assets/58027730/0768352f-460d-424e-89af-5a3eeac032d0)

untuk mengambil provinces juga sama seperti cities http://127.0.0.1:8000/api/search/provinces?id=1
![image](https://github.com/Dianmusfiroh/test-dot/assets/58027730/f5ab97b7-e6eb-46ea-99c6-6dbe51742ac8)

