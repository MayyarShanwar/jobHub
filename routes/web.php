<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

//viewing the home page
Route::view('/', 'home');

Route::get('/register',[RegisterController::class,'create']);
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);
Route::post('/logout',[SessionController::class,'destroy']);


Route::controller(JobController::class)->group(function (){
//viewing the jobs
Route::get('/jobs', 'index');

//viewing the form to create a job
Route::get('/jobs/create','create');

//viewing a single job info
Route::get('/jobs/{job}', 'show');

//Creating a new job
Route::post('/jobs', 'store')->middleware('auth');

//viewing the edit job info page
Route::get('/jobs/{job}/edit', 'edit')->middleware('auth')->can('edit_job','job');

//edit job info
Route::patch('/jobs/{job}', 'update')->middleware('auth')->can('edit_job','job');

//delete a job
Route::delete('/jobs/{job}', 'destroy')->middleware('auth')->can('edit_job','job');
});

//viewing the contact page
Route::view('/contact', 'contact');

