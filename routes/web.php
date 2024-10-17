<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Log\Logger;
// use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

// Route::get('/test', function (): string {
//     // dispatch(function(){
//     //     logger('this is logged via dispated function');
//     // })->delay(2);
    
//     $job = Job::first();

//     TranslateJob::dispatch($job);

//     return 'done';
// });



//home route
Route::view('/', 'home');
Route::view('/contact', 'contact');


// Route::controller(JobController::class)->group(function () {
//     Route::get('jobs/create', 'create');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/{job}', 'show');
//     Route::post('/jobs', 'store');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'delete');
// });


// Route::resource('jobs', controller: JobController::class);

Route::get('jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'job');
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::post('/jobs', [JobController::class, 'store'])
    ->middleware('auth');
Route::patch('/jobs/{job}', [JobController::class, 'update'])
    ->middleware('auth')
    ->can('edit', 'job');;
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])
    ->middleware('auth')
    ->can('edit', 'job');

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])
    ->name('login')->middleware('guest');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
