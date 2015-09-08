<?php

namespace App\Jobs\Paper;

use App\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;

class UpdateJob extends Job implements SelfHandling
{
    protected $id;

    protected $request;
    /**
     * Construct
     *
     * @param UpdatePaperRequest $request Request Object
     * @param integer $id Object Id
     */
    public function __construct(UpdatePaperRequest $request,$id)
    {
        $this->request = $request;
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Paper $model)
    }
}
