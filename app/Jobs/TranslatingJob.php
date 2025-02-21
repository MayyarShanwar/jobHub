<?php

namespace App\Jobs;

use App\Models\Job;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class TranslatingJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Job $job0)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        logger('Translate '.$this->job0->title.' to spanish');
    }
}
