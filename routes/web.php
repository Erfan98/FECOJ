<?php

namespace App\Models;

use App\Http\Controllers\ProblemController;
use App\Http\Controllers\ProblemSetController;
use App\Http\Controllers\ProfileView;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmitController;
use App\Models\Languages;
use App\Models\ProblemSet;
use App\Models\Submissions;
use Illuminate\Support\Facades\Auth;


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
    //dd($items);
    return view('home');
})->name('home');

Route::get('/u/{handle}', [ProfileView::class, 'show'])->name('user');

Route::get('/p/{id}', [ProblemController::class, 'show']);

Route::get('/submissions', function () {
    $submissions = Submissions::all();
    return view('submissions', ['submissions' => $submissions]);
});

Route::get('/settings', function () {
    return view('settings', ['langs' => Languages::all()]);
})->middleware('auth')->name('settings');

Route::post('/profile_update', function () {
    $data = array_filter(request()->except('_token'));
    $user = User::where('handle', Auth::user()->handle)->update($data);
    if ($user) {
        notify()->success('Profile Updated Successfully');
        return redirect('/settings');
    }
    notify()->error('Something went wrong');
    return redirect()->back();
})->middleware('auth');

Route::post('/submit', [SubmitController::class, 'submit'])->middleware('auth');

Route::get('/create_problem', function () {
            return view('create-problem');
        })->middleware('auth');

Route::post('/create_problem', [ProblemSetController::class, 'store'])
        ->middleware('auth')
        ->name('create-problem');

Route::get('/get_source/{id}', function ($id) {
    return Submissions::with(['user:name,id', 'prob:id,title'])->find($id);
});

Route::get('/problemset', function () {
    return view('problem-set', ['problems' => ProblemSet::all()]);
});

Route::get('leaderboard', function () {
    return view('leaderboard', ['users' => User::all()]);
})->name('leaderboard');
