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

Route::get('/', function ($request) {

});

Route::get('judge_info', function () {
    $response = Http::get('http://localhost:2358/system_info');
    return $response->json();
});

Route::get('languages', function () {
    $response = Http::get('https://5c1e-118-179-107-241.ngrok.io/languages');
    return $response->json();
});

Route::get('submission', function () {

            $response = Http::post('http://localhost:2357/submissions?base64_encoded=true&fields=*', [
                "language_id"=> 52,
            "source_code"=>"I2luY2x1ZGUgPHN0ZGlvLmg+CgppbnQgbWFpbih2b2lkKSB7CiAgY2hhciBuYW1lWzEwXTsKICBzY2FuZigiJXMiLCBuYW1lKTsKICBwcmludGYoImhlbGxvLCAlc1xuIiwgbmFtZSk7CiAgcmV0dXJuIDA7Cn0=",
            "stdin"=> "SnVkZ2Uw",
            "cpu_time_limit"=>"1.0"
            ]);

        echo $response->body();
});

Route::get('submissions/{token}', function ($token) {

    $url = "http://localhost:2357/submissions/".$token."?base64_encoded=false&fields=*";
    $response = Http::get($url);

echo $response;
});
