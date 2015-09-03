<?php

namespace App\Jobs\Paper;

use App\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Paper;
use App\Http\Requests\CreatePaperRequest;

class CreateJob extends Job implements SelfHandling
{
    protected $request;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(CreatePaperRequest $request)
    {
        $this->request = $request;
    }

    /**
     * Execute the job.
     *
     * @param CreatePaperRequest $request Request Object
     *
     * @return void
     */
    public function handle(Paper $model)
    {
        $model->create($this->request->only(['name','description','year','subject_id']));
    }
}
