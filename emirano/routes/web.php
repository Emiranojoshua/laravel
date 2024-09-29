<?php

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get(
    '/',
    function () {
        return view(
            'home',
        );
    },
);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('jobs/create', function(){
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function(){
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        "employer_id" => 1,
    ]);

    return redirect('/jobs');
});


Route::get('/jobs', function () {
    $job = Job::with('employer')->latest()->simplePaginate(4);
    return view('jobs.index', ['jobs' => $job]);
});
