@extends('layouts.app')
@section('content')
<div class="container ml-auto mr-auto col-6 mt-3">
    <div class="card">
        <div class="card-header">
        {{$post->title}}
        </div>
        <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">{{$post->description}}</p>
        <a href="#" class="btn btn-primary">{{$post->id}}</a>
        </div>
    </div>
</div>
@endsection
