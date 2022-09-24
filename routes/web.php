<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmitController;
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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/problemset', function () {
    return view('problemset');
});

Route::get('/submissions', function () {
    $submissions = Submissions::all();
    return view('submissions', ['submissions' => $submissions]);
});

Route::post('/submit', [SubmitController::class, 'submit']);

Route::get('/create_problem', function () {
    return view('create-problem');
});

Route::get('/get_source/{id}',function($id){
    return Submissions::with('user:name,id')->find($id);
});
