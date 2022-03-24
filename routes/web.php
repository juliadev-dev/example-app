<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view("home", [
        "title" => "Home"
    ]);
});

Route::get('/profil', function () {
    return view("profil", [
        "title" => "Profil",
        "no_reg" => 20220303213645,
        "no_rm" => 204563,
        "nama" => "YUYUN"
    ]);
});

Route::get('/fasilitas', function () {
    return view("fasilitas");
});

Route::get('/layanan', function () {
    return view("layanan", [
        "title" => "Layanan"
    ]);
});