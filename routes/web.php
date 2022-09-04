<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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
    return view('welcome');
});

Route::get('judge_info', function () {
    $response = Http::get('http://localhost:2358/system_info');
    return $response->json();
});

Route::get('languages', function () {
    $response = Http::get('http://bd63-118-179-107-241.ngrok.io/languages',['verify' => false]);
    return $response->json();
});
