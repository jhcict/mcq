<?php

namespace App\Jobs\Subject;

use App\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Http\Requests\CreateSubjectRequest;
use App\Subject;

class CreateJob extends Job implements SelfHandling
{
    protected $request;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(CreateSubjectRequest $request)
    {
        $this->request = $request;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Subject $subject)
    {
        $subject->create($this->request->only(['name','code','abbreviation','category_id']));
    }
}
