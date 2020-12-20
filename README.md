# Lumen php framework
Lumen membantu kita untuk membuat rest-api secara sederhana dan powerfull.
## Daftar isi
- [Installasi Lumen](#installasi-Lumen)
- [Configurasi](#Configurasi)
- [Runing Lumen](#running-lumen)


## Installasi Lumen
Install Lumen dengan perintah :
```composer create-project --prefer-dist laravel/lumen blog```

## Configurasi
Langkah awal anda menginstall Lumen command [disini.](https://github.com/flipboxstudio/lumen-generator) atau bisa ikuti langkah dibawah ini sama saja :
1. install Lumen command : ```composer require flipbox/lumen-generator ```
2. Tambahkan script dibawah ini di ```bootstrap/app.php``` :

    ```
    $app->register(Flipbox\LumenGenerator\LumenGeneratorServiceProvider::class);
    ```
3. kemudiam cek menggunakan terminal dengan mengettikan 

    ```
    php artisan
    ```
4. Dan kalian bisa generate key, membuat controller, model, dll.


## Running Lumen

Cara menjalankan ada 2 :
1. ```sh
    php -S localhost:8000 -t public 
    ```
2. ```sh
    php artisan ser
    ```