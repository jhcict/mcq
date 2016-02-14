@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h1>Create Dust</h1>
      </div>
      <form method="POST" action="{{route('questions.store')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="paper_id" id="paper_id" value="{{$paper->id}}">

        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <h3>Question</h3>
                <span id="question_preview">When $$a \ne 0$$, there are two solutions to \(ax^2 + bx + c = 0\) and they are
                  $$x = {-b \pm \sqrt{b^2-4ac} \over 2a}.$$</span>
                <textarea name="question"  id="question" class="form-control" rows=4 placeholder="Dummy Text Placeholder for Information to put the dust for the question here"></textarea>
              </div>
              <br>
              <br>
              <br>
              <br>
              <div class="form-group">
                <!-- .row -->
                <div class="row">
                  <!-- .col-md-2 -->
                  <div class="answerchecker">
                    {{Form::checkbox('answer[]','1',null,['class'=>'pull-left answercheck'])}}
                  </div>
                  <!-- /.col-md-2 -->
                  <!-- .col-md-10 -->
                  <div class="col-md-11">
                    <span class="choice_preview"></span>
                    {{Form::text('choice[]','',['class'=>'form-control pull-right choice', 'size'=>50,'placeholder'=>'Answer 1'])}}
                  </div>
                  <!-- /.col-md-10 -->
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                  <!-- .col-md-2 -->
                  <div class="answerchecker">
                    <span class="choice_preview"></span>
                    {{Form::checkbox('answer[]','2',null,['class'=>'pull-left'])}}
                  </div>
                  <!-- /.col-md-2 -->
                  <!-- .col-md-10 -->
                  <div class="col-md-11">
                    <span class="choice_preview"></span>
                    {{Form::text('choice[]','',['class'=>'form-control pull-right choice', 'size'=>50,'placeholder'=>'Answer 2'])}}
                  </div>
                  <!-- /.col-md-10 -->
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                  <!-- .col-md-2 -->
                  <div class="answerchecker">
                    {{Form::checkbox('answer[]','3',null,['class'=>'pull-left'])}}
                  </div>
                  <!-- /.col-md-2 -->
                  <!-- .col-md-10 -->
                  <div class="col-md-11">
                    <span class="choice_preview"></span>
                    {{Form::text('choice[]','',['class'=>'form-control pull-right choice', 'size'=>50,'placeholder'=>'Answer 3'])}}
                  </div>
                  <!-- /.col-md-10 -->
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                  <!-- .col-md-2 -->
                  <div class="answerchecker">
                    {{Form::checkbox('answer[]','4',null,['class'=>'pull-left'])}}
                  </div>
                  <!-- /.col-md-2 -->
                  <!-- .col-md-10 -->
                  <div class="col-md-11">
                    <span class="choice_preview"></span>
                    {{Form::text('choice[]','',['class'=>'form-control pull-right choice', 'size'=>50,'placeholder'=>'Answer 4'])}}
                  </div>
                  <!-- /.col-md-10 -->
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                  <!-- .col-md-2 -->
                  <div class="answerchecker">
                    {{Form::checkbox('answer[]','5',null,['class'=>'pull-left'])}}
                  </div>
                  <!-- /.col-md-2 -->
                  <!-- .col-md-10 -->
                  <div class="col-md-11">
                    <span class="choice_preview"></span>
                    {{Form::text('choice[]','',['class'=>'form-control pull-right choice', 'size'=>50,'placeholder'=>'Answer 5'])}}
                  </div>
                  <!-- /.col-md-10 -->
                </div>
                <!-- /.row -->
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
      MathJax.Hub.Queue(["Typeset",MathJax.Hub,"choice_preview"]);
    });
  });
</script>
@endsection
