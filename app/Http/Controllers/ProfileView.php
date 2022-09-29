<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Submissions;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProfileView extends Controller
{
    function show($handle)
    {
        $user_details = User::where('handle', $handle)->firstOrFail();
        $user_id = $user_details->id;

        //dd($user_details);

        $solved = DB::table('submissions')
            ->select('problem')
            ->distinct()
            ->where('who', $user_id)
            ->where('verdict', 'Accepted')
            ->get()
            ->count();

        //    $language_used = DB::table('submissions')
        //                         //->select('lang')
        //                         ->leftJoin('languages','lang','id')
        //                         ->where('who',$user_id)
        //                         ->distinct()
        //                         ->get();



        //     dd($language_used);


        $user = User::withCount([
                'submissions as submissions_ac' => function ($query) {
                    $query->where('verdict', 'Accepted');
                },
                'submissions as submissions_wa' => function ($query) {
                    $query->where('verdict', 'Wrong Answer');
                },
                'submissions as submissions_ce' => function ($query) {
                    $query->where('verdict', 'Compilation Error');
                },
                'submissions',
            ])->findOrFail((int)$user_id);
            //dd($user);

        return view('user-profile', ['handle' => $user, 'solved' => $solved]);
    }
}
