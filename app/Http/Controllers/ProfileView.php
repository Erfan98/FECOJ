<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Submissions;
use Illuminate\Support\Facades\DB;
use App\Models\Languages;

use Illuminate\Http\Request;
use Psy\Command\WhereamiCommand;

class ProfileView extends Controller
{
    function show($handle)
    {
        $user_details = User::where('handle', $handle)->firstOrFail();
        $user_id = $user_details->id;
        $solved = DB::table('submissions')
            ->select('problem')
            ->distinct()
            ->where('who', $user_id)
            ->where('verdict', 'Accepted')
            ->get()
            ->count();

           $language_used = DB::table('submissions')
                                ->select('lang')
                                ->distinct('lang')
                                ->where('who',$user_id)
                                //->groupBy('lang')
                                ->get();
            $lang_used =array();
            // foreach($language_used as $language){
            //     array_push(
            //         $lang_used,
            //         array(Languages::find($language->lang)->lang=>Submissions::where('lang',$language->lang)->count()));
            // }

            foreach($language_used as $language){
                array_push(
                    $lang_used,
                    Languages::find($language->lang)->lang);
            }
            //dd($lang_used);
            $lang_used_count = array();
            foreach($language_used as $language){
                array_push(
                    $lang_used_count,
                    Submissions::where('who',$user_id)->where('lang',$language->lang)->count()
                );
            }
           // dd($lang_used,$lang_used_count);


            //$bla  = Submissions::where('lang',$language_used[1]->lang)->count();
            // $result = Submissions::select('lang')
            //             ->groupBy('lang')
            //             ->get();
            //             dd($result);

                        // $user_lang = [];

                        // $result->map($result, function($item){
                        // $user_lang[$item->id] = $item->times;
                        // });





        //$problem_created = User::withCount('problems')->where('handle',$handle)->firstOrFail();
        //dd($problem_created);
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
                'problems'
            ])->findOrFail($user_id);
            //Converting string user id to interger lets s
            //see if it confilicts with pgsql or not
            //dd($user);

        return view('user-profile', ['handle' => $user, 'solved' => $solved,'languages'=>$lang_used,'languages_count'=>$lang_used_count]);
    }
}
