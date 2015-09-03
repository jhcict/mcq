<?php

namespace App\Jobs\Subject;

use App\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Http\Requests\UpdateSubjectRequest;
use App\Subject;

class UpdateJob extends Job implements SelfHandling
{
    protected $id,$request;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(UpdateSubjectRequest $request,$id)
    {
        $this->request = $request;
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Subject $model)
    {
        $model->find($this->id)->update(
            $this->request->only(
                ['name','code','abbreviation']
            )
        );

        $model->category()->associate($request->get('category_id'));

        $model->save();
    }
}
