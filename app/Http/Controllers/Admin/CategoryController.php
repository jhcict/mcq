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
use App\Http\Controllers\Controller;
use App\Category;
use App\Jobs\Category\Create as CreateJob;

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
     * @return View
     */
    public function index(Category $category)
    {
        $categories = $category->all();


        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request Request Object
     *
     * @return Response
     */
    public function store(CreateCategoryRequest $request)
    {
        $this->dispatch(
            new CreateJob($request)
        );
        return redirect('admin.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  int     $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
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
