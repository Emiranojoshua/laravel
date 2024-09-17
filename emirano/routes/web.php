<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



class Job
{

    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'director',
                'salary' => '10,000'
            ],
            [
                'title' => 'programmer',
                'id' => 2,
                'salary' => '20,000'
            ],
            [
                'title' => 'teacher',
                'id' => 3,
                'salary' => '30,000'
            ]
        ];
    }
}




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



Route::get('/jobs/{id}', function ($id){

    $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);


        // dd('jobs' => $jobs)
    ;
    return view('job', ['job' => $job]);
});




Route::get('/jobs', function ()  {
    return view('jobs', ['jobs' => Job::all()]);
});
