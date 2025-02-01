<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
})->name('home');
 
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(6);
    return view('jobs.index',["jobs" => $jobs]);
})->name('jobs');

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = job::find($id);
    return view('jobs.show',['job' => $job]);
});

Route::post('/jobs',function(){
    request()->validate([
        'title' => ['required','min:3'],
        'salary' => 'required ',
    ]);
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 2,
    ]);

    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');