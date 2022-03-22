@extends('layouts.app')
@section('content')
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<h1> here you can create post </h1>
<form method="POST" action="{{route('posts.store')}}">
    @csrf
   
    <div class="mb-3">
      <label for="exampleInputTitle" class="form-label">title</label>
      <input type="text"  name="title"class="form-control" id="exampleInputTitle" >
      
    </div>
    <div class="mb-3">
      <label for="exampleInputDescription" class="form-label">description</label>
      <textarea type="text" name="description" class="form-control" id="exampleInputDescription"></textarea>
    </div>

    <div class="mb-3">
      <label  class="form-label">Post Creator</label>
      <select name="user_id" class="form-control" >
        @foreach($users as $user)
        <option value="{{$user->id}}"> {{$user->name}} </option>
        @endforeach
      </select>
    </div>

    
    <button type="submit" class="btn btn-primary">create</button>
</form>
@endsection