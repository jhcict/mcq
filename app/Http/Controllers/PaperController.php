<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePaperRequest;
use App\Jobs\Paper\CreateJob;
use App\Paper;
use App\Subject;



class PaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Paper $model)
    {
        $papers = $model->all();
        return view('paper.index',compact('papers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
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
     * @return Response
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
     * @return Response
     */
    public function show($id)
    {
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
