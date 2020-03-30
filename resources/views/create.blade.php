 @extends('layout.app')

@section('content')

<div class="container">
<form method="post" action="{{route('posts.store')}}" >
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
    <select type="text" name="posted_by" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @foreach($users as $user) 
    <option value="{{$user->id}} ">{{$user->name}} </option>
    @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">create</button>
</form>
</div>


@endsection