<?php

namespace App\Http\Controllers;

use App\Models\ProblemSet;
use App\Models\Submissions;

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
        $source_code = request()->file('source_code')->get();
        $submission->source_code =base64_encode($source_code);

        // Getting Standard Input
        $problem = ProblemSet::find($submission->problem);
        $stdin = $problem->standerd_input;
        $expected_out = $problem->standerd_output;
        $cpu_limit = $problem->cpu_limit/1000;
        $mem_limit = $problem->mem_limit*1000;

        $token = IsolateSubmit($stdin,$expected_out,$submission->lang,$source_code,$cpu_limit,$mem_limit);
        //sleep(3);
        //dd($token);
        $submission->token = $token['token'];
        $status = getStatus($token);
        //dd($status);
        $submission->verdict = $status['status']['description'];
        $submission->time =$status['time']?? "0.0";
        $submission->memory =$status['memory']?? "0";

        $submission->save();

        // dd($status);
        return redirect('/submissions');
    }
}
