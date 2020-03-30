@extends('layout.app')

@section('content')


<form method="post" action="{{route('posts.store')}}"style="margin:3em">
@csrf 
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">description</label>
    <textarea name="discription" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">post Creator</label>
    <input type="text" name="creator" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">create</button>
</form>

@endsection