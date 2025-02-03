<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

//viewing the home page
Route::get('/', function () {
    return view('home');
})->name('home');
 
//viewing the jobs
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(6);
    return view('jobs.index',["jobs" => $jobs]);
})->name('jobs');

//viewing the form to create a job
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

//viewing a single job info
Route::get('/jobs/{id}', function ($id) {
    $job = job::find($id);
    return view('jobs.show',['job' => $job]);
});

//Creating a new job
Route::post('/jobs',function(){
    //validate to confirm a correct info
    request()->validate([
        'title' => ['required','min:3'],
        'salary' => 'required ',
    ]);

    //creating the job
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 2,
    ]);

    //return to the jobs page
    return redirect('/jobs');
});

//viewing the edit job info page
Route::get('/jobs/{id}/edit', function ($id) {
    $job = job::find($id);
    return view('jobs.edit',['job' => $job]);
});

Route::patch('/jobs/{id}',function ($id) {
    request()->validate([
        'title' => ['required','min:3'],
        'salary' => 'required ',
    ]);

    $job = Job::findOrFail($id);
    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect('jobs/'.$job->id);

});

Route::delete('/jobs/{id}', function($id) {
    Job::findOrFail($id)->delete();
    return redirect('/jobs');
});

//viewing the contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');