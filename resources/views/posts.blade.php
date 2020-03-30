@extends('layout.app')

@section('content')
<container style="margin:50px">
<a href="{{route('posts.create')}}" type="button" class="btn btn-success">create post</a>


<table class="table" style="margin: 2em">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">title</th>
      <th scope="col">posted by</th>
      <th scope="col">created at</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
     
      @foreach ($posts as $post)
    <tr>
  
      <td>{{$post->id}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->posted_by}}</td>
      <td>{{$post->created_at}}</td>
      
      <td><a href="/posts/{{$post->id}}" type="button" class="btn btn-success">View</a>
      <a href="/posts/1" type="button" class="btn btn-warning">View</a>
      <a href="/posts/1" type="button" class="btn btn-warning">View</a></td>
      

</td>
    </tr>
    @endforeach
    </tbody>
</table>
</container>
@endsection

