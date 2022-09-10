<?php
use Illuminate\Support\Facades\Http;

function IsolateSubmit($lang,$source_code){

    $token = Http::withHeaders([
        'Accept'=> '*/*',
        'User-Agent'=> 'Thunder Client (https://www.thunderclient.com)',
        'Content-Type'=> 'application/json',
    ])
    ->post('http://localhost:2358/submissions?base64_encoded=true&fields=*', [
        "language_id"=> $lang,
        "source_code"=>base64_encode($source_code),
        "stdin"=>"SnVkZ2Uw"
     ]);
     return $token->json();
}

function getStatus($token){
    $response = Http::withHeaders([
            'Accept'=> '*/*',
            'User-Agent'=> 'Thunder Client (https://www.thunderclient.com)',
        ])
        ->get('http://localhost:2358/submissions/'.$token['token'].'?fields=*&base64_encoded=true');

    return $response->json();
}

function langauges(){
    $response = Http::get('http://localhost:2358//languages');
    return $response->json();
}
