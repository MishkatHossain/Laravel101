<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Jobs {
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Sales Manager',
                'salary' => '$30,000'
            ],
            [
                'id' => 3,
                'title' => 'Programmer',
                'salary' => '$20,000',
            ],
        ];
    }
}

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Jobs::all()]);  
});

Route::get('/jobs/{id}', function ($id) {

    $job = Arr::first(Jobs::all(), fn($job) => $job['id'] == $id);
    return view('job', ['job' => $job]);
});


Route::get('/contact', function () {
    return view('contact');
});
