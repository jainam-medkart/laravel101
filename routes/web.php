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
    /*

        For eager loading, inside app provider.
        Add config to prevent lazy loading in Boot method

        Make sure it's not "prevents"
        Mode::preventLazyLoading();
    */
    $jobs = Job::with('employer')->get();

    return view('jobs', [
        'jobs' => $jobs
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




