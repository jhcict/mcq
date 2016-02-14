@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h1>Create Dust</h1>
      </div>
      <form method="POST" action="{{route('questions.update',$question->id)}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" id="" value="PUT">

        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <h3>Question</h3>
                <textarea name="question" class="form-control" rows=4> {{$question->question}}</textarea>
              </div>
              <br>
              <br>
              <br>
              <br>
              <div class="form-group">
                <!-- .row -->
                @foreach($question->answers as $key => $answer)

                <div class="row">
                  <!-- .col-md-2 -->
                  <div class="answerchecker">
                    {{Form::checkbox('answer[]',$key+1,$answer->correct,['class'=>'pull-left answer'])}}
                  </div>
                  <!-- /.col-md-2 -->
                  <!-- .col-md-10 -->
                  <div class="col-md-11">
                    <span class="choice_preview">{{$answer->textual}}</span>
                    {{Form::text('choice[]',$answer->textual,['class'=>'form-control pull-right choice', 'size'=>50,'placeholder'=>'Answer '+$key+1])}}
                  </div>
                  <!-- /.col-md-10 -->
                </div>
                <!-- /.row -->
                <br>
                <br>

                @endforeach
              </div>
            </div>
            <div class="col-md-12">
              <br>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
@section('footer')
<script type="text/javascript" charset="utf-8">

  $(document).ready(function(){
    $("#question").keyup(function(){
      $("#question_preview").text($("#question").val());
      MathJax.Hub.Queue(["Typeset",MathJax.Hub,"question_preview"]);
    });
    $("input.choice").keyup(function(){
      $(this).prev().text($(this).val());
      MathJax.Hub.Queue(["Typeset",MathJax.Hub,"question_preview"]);
    });
  });
</script>
@endsection

