@extends('layouts.app')

@section('content')
<div class="container m-5">
<form method="POST" action="{{route('posts.store')}}">
    @csrf
    <div class="form-group">
      <label >Title</label>
      <input name="title" type="text" class="form-control" aria-describedby="emailHelp">
      <div style="color:red">{{$errors->first('title')}}</div>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
      <textarea name="description" class="form-control">

      </textarea>
      <div style="color:red">{{$errors->first('description')}}</div>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Post Creator</label>
      <select name="user_id" class="form-control">
        @foreach($users as $user)  
          <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-success">Create</button>
  </form>
</div>

@endsection