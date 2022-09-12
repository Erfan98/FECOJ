<?php
use Illuminate\Support\Facades\Http;

function IsolateSubmit($lang,$source_code){

    $token = Http::withHeaders([
        'Accept'=> '*/*',
        'User-Agent'=> 'Thunder Client (https://www.thunderclient.com)',
        'Content-Type'=> 'application/json',
        'X-RapidAPI-Key'=> env('X_RapidAPI_Key'),
        'X-RapidAPI-Host'=> 'judge0-ce.p.rapidapi.com'
    ])
    ->post(env('X_RapidAPI_Host').'/submissions?base64_encoded=true&fields=*', [
        "language_id"=> $lang,
        "source_code"=>base64_encode($source_code),
        // "stdin"=>"SnVkZ2Uw"
     ]);
     return $token->json();
}

function getStatus($token){
    global $judge_api, $judge_host;
    $response = Http::withHeaders([
            'Accept'=> '*/*',
            'User-Agent'=> 'Thunder Client (https://www.thunderclient.com)',
            'X-RapidAPI-Key'=> env('X_RapidAPI_Key'),
            'X-RapidAPI-Host'=> 'judge0-ce.p.rapidapi.com'
        ])
        ->get(env('X_RapidAPI_Host').'/submissions/'.$token['token'].'?fields=*&base64_encoded=true');

    return $response->json();
}

function langauges(){
    $response = Http::withHeaders([
            'Accept'=> '*/*',
            'User-Agent'=> 'Thunder Client (https://www.thunderclient.com)',
            'X-RapidAPI-Key'=>env('X_RapidAPI_Key'),
            'X-RapidAPI-Host'=>'judge0-ce.p.rapidapi.com'
        ])->get(env('X_RapidAPI_Host').'/languages');
    return $response->json();
}

function idToLang($id){


}
