<?php

namespace App\Http\Controllers;

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
        $submission->source_code = base64_encode(request()->file('source_code')->get());

        $token = IsolateSubmit($submission->lang,base64_decode($submission->source_code));
        sleep(3);
        //dd($token);
        $status = getStatus($token);

        $submission->verdict = $status['status']['description'];
        $submission->time =$status['time']?? "0.0";
        $submission->memory =$status['memory']?? "0";

        $submission->save();

        // dd($status);
        return view('submissions',['submissions'=>Submissions::all()]);
    }
}
