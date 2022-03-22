{{-- hello {{$name}} and your age is {{$age}}
@if($name=="mai")
<h1>hello {{$name}}</h1>
@else
<h1>you are not mai</h1>
@endif --}}
{{-- @foreach ($collection as $item)
{{$item['id']}}   
@endforeach --}}
@extends('layouts.app')
  @section('content')
  
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">title</th>
           <th scope="col">posted by</th> 
            <th scope="col">created at</th>
            <th scope="col">actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        {{-- @dd($post->myUserRelation->name) --}}
          <tr>
            <th>{{$post->id}}</th>
            <td>{{$post->title}}</td>
             {{-- <td>{{$post->myUserRelation ? $post->myUserRelation->name : 'user not found'}}</td> --}}
             <td>{{$post->user ? $post->user->name : 'user not found'}}</td>
            <td>{{$post->created_at}}</td>
            <td>
                {{-- <a href="{{$post['id']}}"  class="btn btn-primary">show</a> --}}
                <a href="{{route('posts.show', ['post' =>$post['id']])}}"  class="btn btn-primary">show</a>
                <a class="btn btn-info">edit</a>
                <a href="{{route('posts.destroy', ['post' =>$post['id']])}}" class="btn btn-danger">delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>


      @endsection
      <a href="{{route('posts.create')}}"  class="btn btn-primary">create new post</a>
