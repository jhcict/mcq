@foreach($errors->all() as $error)
    <div class="alert alert-error" >
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{$error}}
    </div>

@endforeach