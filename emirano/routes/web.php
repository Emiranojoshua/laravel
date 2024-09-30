<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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


Route::resource('jobs', JobController::class);