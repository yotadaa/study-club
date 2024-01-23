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
    return view('welcome', ['title' => 'mahasiswa sistem informasi']);
});

Route::get('/latihan', function () {
    return view('latihan');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/latihan/{value}', function ($value) {
    return view('latihan', ["value" => $value]);
});

Route::get('/study/{value?}', function ($value) {
    if ($value) {
        return 'The value is $value';
    } else {
        return 'No return value';
    }
});
