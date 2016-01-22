<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePaperRequest;
use App\Http\Requests\UpdatePaperRequest;
use App\Jobs\Paper\CreateJob;
use App\Jobs\Paper\UpdateJob;
use App\Paper;
use App\Subject;



class PaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function index(Paper $model)
    {
        $papers = $model->all();
        return view('paper.index', compact('papers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     * @return \Illuminate\View\View
     */
    public function create(Subject $subject)
    {
        $subjects = $subject->all();
        return view('paper.create', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return \Illuminate\Contracts\View\Factory
     */
    public function store(CreatePaperRequest $request)
    {
        $this->dispatch(
            new CreateJob($request)
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Contracts\View\Factory
     */
    public function show($id)
    {
        $category = Paper::findOrFail($id);
        return view('paper.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Contracts\View\Factory
     */
    public function edit($id)
    {
        $category = Paper::findOrFail($id);
        return view('paper.edit',compact('category'));
    }

    public function update(UpdatePaperRequest $request,$id)
    {
        $this->dispatch(
            new UpdateJob($request,$id)
        );
    }

    public function destroy($id)
    {
    }
}
