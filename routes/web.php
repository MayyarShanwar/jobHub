<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
})->name('home');
 
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->Paginate(6);
    return view('jobs.index',["jobs" => $jobs]);
})->name('jobs');

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = job::find($id);
    return view('jobs.show',['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');