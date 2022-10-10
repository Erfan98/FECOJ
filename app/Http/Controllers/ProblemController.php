<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProblemSet;
use App\Models\Languages;

class ProblemController extends Controller
{
    function show($id)
    {
        $problem = ProblemSet::withCount([
            'submissions as ac' => function ($query) {
                $query->where('verdict', 'Accepted');
            },
            'submissions as wa' => function ($query) {
                $query->where('verdict', 'Wrong Answer');
            },
            'submissions as ce' => function ($query) {
                $query->where('verdict', 'Compilation Error');
            },
            'submissions as re' => function ($query) {
                $query->where('verdict', 'Runtime Error (NZEC)');
            },
            'submissions as tle' => function ($query) {
                $query->where('verdict', 'Time Limit Exceeded');
            },
            'submissions as mle' => function ($query) {
                $query->where('verdict', 'Runtime Error (SIGSEGV)');
            }
        ])->findOrFail($id);
        
        // $problem = ProblemSet::findOrFail($id);
        // $stats = $problem->submissions()->where('verdict','Accepted')->count();
        //dd($problem);

        if ($problem) {
            return view('single-problem', ['langs' => Languages::all(), 'problem' => $problem]);
        }
        abort(404);
    }
}
