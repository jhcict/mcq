<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;
use App\Paper;
use App\Answer;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('questions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $paper = Paper::findOrFail($request->get('paper_id'));

        return view('question.create', compact('paper'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $paper = Paper::findOrFail($request->get("paper_id"));
        $question = new Question();
        $question->question = $request->get('question');
        $question->language = "en";
        $question->paper()->associate($paper);
        $question->save();
        foreach($request->get('choice') as $key => $choice){
            $answer = new Answer();
            $answer->type="string";
            $answer->textual= $choice;
            $answer->correct= in_array($key+1,$request->get('answer')) <=> 0;
            $answer->question()->associate($question);
            $answer->save();
        }
        return redirect()->to(route("paper.edit",$paper->id));

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

        $question = Question::find($id);

        return view('question.edit', compact('question'));
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
        $question = Question::findOrFail($id);
        $question->question = $request->get('question');
        $question->save();
        $question->answers()->delete();
        foreach($request->get('choice') as $key => $choice){
            $answer = new Answer();
            $answer->type="string";
            $answer->textual= $choice;
            $answer->correct= in_array($key+1,$request->get('answer')) <=> 0;
            $answer->question()->associate($question);
            $answer->save();
        }
        return redirect()->to(route("paper.edit",$question->paper->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        Question::findOrFail($id)->delete();

        return redirect()->back();
    }
}
