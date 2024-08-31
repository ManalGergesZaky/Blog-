@extends('layouts.app')
@section('content')
<div class="ml-auto mr-auto container col-6 mt-5">
  <form method="POST" action="">
      @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">title</label>
        <input value="{{ $post->title }}" type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">description</label>
        <input value="{{ $post->description }}" type="text" name="description" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="post_creator" class="form-label">Poste Creator</label>
        {{-- <select class="form-control" name="user_id">
          @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
          @endforeach
          
        </select> --}}
      </div>
      
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection