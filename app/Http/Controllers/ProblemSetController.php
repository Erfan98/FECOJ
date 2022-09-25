<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProblemSet;

class ProblemSetController extends Controller
{
    function store(){
        // $problem = ProblemSet::create([
        //     'title' => 'London to Paris',
        //     'statement' => 'London to Paris',
        //     'sample_input' => 'London to Paris',
        //     'sample_output' => 'London to Paris',
        //     'standerd_input' => 'London to Paris',
        //     'standerd_output' => 'London to Paris',
        //     'cpu_limit' => 'London to Paris',
        //     'mem_limit' => 'London to Paris',
        //     'source_limit' => 'London to Paris',
        // ]);

        //dd(request()->except('_token'));
        if(ProblemSet::create(request()->except('_token'))){
            notify()->success('Your Problem has created succesfully');
            return view('home');
        }
        else{
            notify()->error('Something Went Wrong');
            return redirect()->back();
        }


    }
}
