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

    /*
        If we want to have simpler pagination like just previous and next
        $jobs = Job::with('employer')->simplePaginate(1);

        Or if there's any scenarios like Infinite scrolling or
        something where you have to deal with a large dataset
        or page number is not important you can use cursor
        $jobs = Job::with('employer')->cursorPaginate(1);

    */
    $jobs = Job::with('employer')->paginate(2);

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




