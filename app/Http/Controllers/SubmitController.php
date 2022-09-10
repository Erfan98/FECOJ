<?php

namespace App\Http\Controllers;

use App\Models\Submissions;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class SubmitController extends Controller
{
    public function submit(){
        /*
            id
            when
            who
            problem
            lang
            verdict
            time
            memory

        */
        // dd(request());
        $submission = new Submissions();
        $submission->who = request()->user_id;
        $submission->problem = request()->problem_id;
        $submission->lang = request()->language;
        $submission->source_code = request()->file('source_code')->get();

        $token = IsolateSubmit($submission->lang,$submission->source_code);
        sleep(1);
        $status = getStatus($token);
        //dd($token);

        dd($status);
    }
}
