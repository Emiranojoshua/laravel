<?php

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


Route::get('/jobs/{id}', function ($id) {
    dd($id);
    return view('contact');
});

Route::get('/jobs', function () {
    return view(
        'jobs',
        [
            'jobs' => [
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
                ],
            ],
        ],
    );
});
