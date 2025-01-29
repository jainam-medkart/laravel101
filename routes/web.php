<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

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

Route::get('/jobs', function() {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id){

    $job = Job::find($id);
    if(!$job) {
        abort(404);
    }

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




