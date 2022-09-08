<?php
use Illuminate\Support\Facades\Http;
function langauges(){
    $response = Http::get('http://localhost:2357//languages');
    return $response->json();
}
