<?php

namespace App\Jobs\Category;

use App\Jobs\Job;
use App\Category;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Http\Requests\UpdateCategoryRequest;

class UpdateJob extends Job implements SelfHandling
{
    protected $request, $id;
    /**
     * Create a new job instance.
     *
     * @param integer $id
     * @return void
     */
    public function __construct(UpdateCategoryRequest $request, $id)
    {
        $this->request = $request;
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Category $category)
    {
        $category->findOrFail($this->id)->update([ 'name' => $this->request->get('name') ]);
    }
}
