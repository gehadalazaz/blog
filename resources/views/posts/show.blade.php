@extends('layouts.app')
  @section('content')
  <a href="{{route('posts.index')}}"  class="btn btn-warning">all posts</a>
  <a href="{{route('posts.create')}}"  class="btn btn-warning">create new  post</a>
    <div class="card" style="width: 18rem;">
        <div class="card-header">
          post details
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{$post->title}}</li>
          {{-- <li class="list-group-item">{{$post->posted_by}}</li> --}}
          <li class="list-group-item">{{$post->created_at}}</li>
        </ul>
      </div>
   @endsection
{{--
  <a href="{{route('posts.create')}}"  class="btn btn-primary">create new post</a> --}}