<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventLazyLoading();

        // The gate checks for authorization First the user need to be logged in and by defining it in the function
        // it checks if its logged in
        // the condition after the return checks if this user is the owner of the job
        Gate::define('edit_job',function(User $user,Job $job) {
            return $job->employer->user->is($user);
        });
    }
}
