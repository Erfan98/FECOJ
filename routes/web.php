<?php
namespace App\Models;
use App\Http\Controllers\ProblemSetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmitController;
use App\Models\Languages;
use App\Models\ProblemSet;
use App\Models\Submissions;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //notify()->error('Something Went Wrong');
    return view('home');
});

Route::get('/u/{handle}', function ($handle) {

    // Coupon::where('code', $code)
    // ->withCount([
    //     'orders as paid_orders_count' => function ($query) {
    //         $query->where('status', 'paid');
    //     },
    // ])
    // ->first();
    $user = User::where('handle',$handle)
                ->withCount([
                    'submissions as submissions_ac'=>function($query){
                    $query->where('verdict','Accepted');
                },
                'submissions as submissions_wa'=>function($query){
                    $query->where('verdict','Wrong Answer');
                },
                'submissions as submissions_ce'=>function($query){
                    $query->where('verdict','Compilation Error');
                },
                'submissions',


                ])->firstOrFail();
    //dd($user);
    return view('user-profile',['handle'=>$user]);
});

Route::get('/p/{id}', function ($id) {
    $problem = ProblemSet::findOrFail($id);

    if($problem){
        return view('single-problem',['langs'=>Languages::all(),'problem'=>$problem]);
    }
    abort(404);

});

Route::get('/submissions', function () {
    $submissions = Submissions::all();
    return view('submissions', ['submissions' => $submissions]);
});

Route::post('/submit', [SubmitController::class, 'submit'])->middleware('auth');

Route::get('/create_problem', function () {
    return view('create-problem');
})->middleware('auth');

Route::post('/create_problem',[ProblemSetController::class,'store'])->middleware('auth');

Route::get('/get_source/{id}',function($id){
    return Submissions::with('user:name,id')->find($id);
});

Route::get('/problemset',function(){
    return view('problem-set',['problems'=>ProblemSet::all()]);
});
