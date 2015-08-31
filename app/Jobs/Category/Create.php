<?php

/**
 * Class: Create Job
 *
 * PHP Version 7.0
 *
 * @category Jobs
 * @package  LearnMCQ
 * @author   Gnanakeethan Balasubramaniam <gnana@keethan.me>
 * @license  MIT http://opensource.org/licenses/MIT/
 * @link     http://mcq.learntechnologies.org/
 */

namespace App\Jobs\Category;

use App\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Category;
use App\Http\Requests\CreateCategoryRequest;

/**
 * Class: CreateCommand
 *
 * @category Jobs
 * @package  LearnMCQ
 * @author   Gnanakeethan Balasubramaniam <gnana@keethan.me>
 * @license  MIT http://opensource.org/licenses/MIT/
 * @link     http://mcq.learntechnologies.org/
 *
 * @see SelfHandling
 * @see Job
 */
class Create extends Job implements SelfHandling
{
    protected $request;

    /**
     * Constructor
     *
     * @param CreateCategoryRequest $request Request Object
     */
    public function __construct(CreateCategoryRequest $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the Request
     *
     * @param Category $category Model Object
     *
     * @return void
     */
    public function handle(Category $category)
    {
        $category->name = $this->request->get('name');
        $category->save();
    }
}
