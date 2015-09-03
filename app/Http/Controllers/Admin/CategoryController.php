<?php
/**
 * CategoryController
 *
 * PHP Version 7.0
 *
 * @category Controller
 * @package  LearnMCQ
 * @author   Gnanakeethan Balasubramaniam <gnana@keethan.me>
 * @license  MIT http://opensource.org/licenses/MIT/
 * @link     http://mcq.learntechnologies.org/
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Controllers\Controller;
use App\Category;
use App\Jobs\Category\Create as CreateJob;
use App\Jobs\Category\UpdateJob as UpdateJob;

/**
 * Class: CategoryController
 *
 * @category Controller
 * @package  LearnMCQ
 * @author   Gnanakeethan Balasubramaniam <gnana@keethan.me>
 * @license  MIT http://opensource.org/licenses/MIT/
 * @link     http://mcq.learntechnologies.org/
 *
 * @see Controller
 */
class CategoryController extends Controller
{
    /**
     * Display listing of the current categories
     *
     * @param Category $category Model Object
     *
     * @return \Illuminate\View\View
     */
    public function index(Category $category)
    {
        $categories = $category->all();

        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateCategoryRequest $request Request Object
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateCategoryRequest $request)
    {
        $this->dispatch(
            new CreateJob($request)
        );

        return redirect(route('admin.category.index'));
    }

    /**
     * Show the Category Resource
     *
     * @param integer  $id    Id of the Category
     * @param Category $model Model Object
     *
     * @return void
     */
    public function show($id, Category $model)
    {
    }

    /**
     * Show the form for editing the category
     *
     * @param integer  $id    Id of the Category
     * @param Category $model Model Object
     *
     * @return \Illuminate\View\View
     */
    public function edit($id, Category $model)
    {
        $category = $model->findOrFail($id);

        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCategoryRequest $request Request Object
     * @param int                   $id      Category ID
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $this->dispatch(
            new UpdateJob($request, $id)
        );

        return redirect(route('admin.category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
