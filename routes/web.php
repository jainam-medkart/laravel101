<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

$jobs = [
    [
        'id' => '1',
        'title' => 'Marketing Director',
        'salary' => '50k'
    ],
    [
        'id' => '2',
        'title' => 'Engineering Director',
        'salary' => '50k'
    ],
    [
        'id' => '3',
        'title' => 'Finance Officer',
        'salary' => '50k'
    ]
];

Route::get('/', function () {
    return view('home', [
        'greeting' => 'hello'
    ]);
});

Route::get('/home', function () {
    return view('home', [
        'greetings' => 'hello'
    ]);
});

Route::get('/jobs', function() use ($jobs) {
    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) use ($jobs){

    $job = Arr::first($jobs, fn($job) => $job['id'] === $id);

    return view('job',[
        'job' => $job
   ]);
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact' , function() {
    return view('contact');
});




