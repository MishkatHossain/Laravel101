<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    
    $jobs = [
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
        [
            'id' => 4,
            'title' => 'Product Manager',
            'salary' => '$80,000',
        ],
        [
            'id' => 5,
            'title' => 'teacher',
            'salary' => '$34,000',
        ]
    ];



    return view('jobs', ['jobs' => $jobs]);

});

Route::get('/contact', function(){
    return view('contact');
});


