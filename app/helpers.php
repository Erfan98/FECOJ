<?php

use Illuminate\Support\Facades\Http;
use App\Models\Submissions;

function IsolateSubmit($standard_input,$expected_output,$language_id, $source_code,$cpu_time_limit=5.0,$memory_limit=128000)
{

    $token = Http::withHeaders([
        'Accept' => '*/*',
        'User-Agent' => 'Thunder Client (https://www.thunderclient.com)',
        'Content-Type' => 'application/json',
        'X-RapidAPI-Key' => env('X_RapidAPI_Key'),
        'X-RapidAPI-Host' => 'judge0-ce.p.rapidapi.com'
    ])
        ->post(env('X_RapidAPI_Host') . '/submissions?base64_encoded=true&fields=*', [
            "language_id" => $language_id,
            "source_code" => base64_encode($source_code),
            "stdin"=>base64_encode($standard_input),
            "expected_output"=>base64_encode($expected_output),
            "cpu_time_limit" => $cpu_time_limit,
            "memory_limit" => $memory_limit,
            "number_of_runs" => 2
        ]);
    return $token->json();
}

function getStatus($token)
{
    $response = Http::withHeaders([
        'Accept' => '*/*',
        'User-Agent' => 'Thunder Client (https://www.thunderclient.com)',
        'X-RapidAPI-Key' => env('X_RapidAPI_Key'),
        'X-RapidAPI-Host' => 'judge0-ce.p.rapidapi.com'
    ])
        ->get(env('X_RapidAPI_Host') . '/submissions/' . $token['token'] . '?fields=*&base64_encoded=true');

    return $response->json();
}

// function langauges()
// {
//     $response = Http::withHeaders([
//         'Accept' => '*/*',
//         'User-Agent' => 'Thunder Client (https://www.thunderclient.com)',
//         'X-RapidAPI-Key' => env('X_RapidAPI_Key'),
//         'X-RapidAPI-Host' => 'judge0-ce.p.rapidapi.com'
//     ])->get(env('X_RapidAPI_Host') . '/languages');
//     return $response->json();
// }

function userProblemStatus($user,$problem_id){
    $count = $user->submissions->where('verdict','Accepted')->where('problem',$problem_id)->count();
    if($count){
        return "Solved";
    }
    return "--";
}

function probelmAccuracy($problem_id){
     $total_accepted = Submissions::where('verdict','Accepted')->where('problem',$problem_id)->count();
     $total_submission = Submissions::where('problem',$problem_id)->count();
     $accuracy = round($total_accepted/$total_submission*100);
     return $accuracy;
}
