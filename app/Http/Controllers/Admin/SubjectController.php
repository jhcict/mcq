<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\CreateSubjectRequest;
use App\Http\Controllers\Controller;
use App\Subject;
use App\Category;


/**
 * Class: SubjectController
 *
 * @category Category
 * @package  Package
 * @author   Gnanakeethan Balasubramaniam <gnana@keethan.me>
 * @license  MIT http://opensource.org/licenses/MIT/
 * @link     http://link/
 *
 * @see Controller
 */
class SubjectController extends Controller
{

    /**
     * Display a listing of Subjects available as of now
     *
     * @param \App\Subject $subject Model Class
     *
     * @return \Illuminate\View\View
     */
    public function index(\App\Subject $subject)
    {
        $subjects = $subject->all();

        return view('admin.subject.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Category $category Category Model
     *
     * @return \Illuminate\View\View
     */
    public function create(Category $category)
    {
        $categories = $category->all();

        return view('admin.subject.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request Request Object
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateSubjectRequest $request)
    {
        $this->dispatch(
            new \App\Jobs\Subject\CreateJob($request)
        );

        return redirect(route('admin.subject.index'));
    }

    /**
     * Show resource
     *
     * @param integer $id Object ID
     *
     * @return void
     */
    public function show($id)
    {
    }

    /**
     * Present the Edit view of the resource
     *
     * @param mixed   $id    Object ID
     * @param Subject $model Model Object
     *
     * @return \Illuminate\View\View
     */
    public function edit($id, Subject $model)
    {
        $subject = $model->findOrFail($id);
        return view('admin.subject.edit', compact('subject'));
    }


    /**
     * Update Resource
     *
     * @param UpdateSubjectRequest $subject Request Object
     * @param mixed                $id      Integer
     *
     * @return void
     */
    public function update(UpdateSubjectRequest $subject, $id)
    {

        $this->dispatch(
            new UpdateJob($subject, $id)
        );
    }


}
