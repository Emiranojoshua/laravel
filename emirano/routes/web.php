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


// contact route
Route::get('/contact', function () {
    return view('contact');
});

// jobs create route
Route::get('jobs/create', function () {
    return view('jobs.create');
});


//jobs edit route
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    return view('jobs.edit', ['job' => $job]);
});


// store job route
Route::post('/jobs', function () {

    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        "employer_id" => 1,
    ]);

    return redirect('/jobs');
});

//all jobs route
Route::get('/jobs', function () {
    $job = Job::with('employer')->latest()->paginate(4);
    return view('jobs.index', ['jobs' => $job]);
});


// job route
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

// edit job route
Route::patch('/jobs/{id}', function ($id) {

    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    $job = Job::findorfail($id);

    // $job->title = request('title');
    // $job->salary = request('salary');
    // $job->save();

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect('/jobs/' . $job->id);
});

// delete job route
Route::delete('/jobs/{id}', function ($id) {


    // dd('delete request');

    $job = Job::findorfail($id);

    // $job->title = request('title');
    // $job->salary = request('salary');
    // $job->save();

    $job->delete();

    return redirect('/jobs');
});
