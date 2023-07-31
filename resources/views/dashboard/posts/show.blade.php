@extends('dashboard.layouts.main')

@section('container')
<div class="container">

    <h1>{{ $post->title}}</h1>
    <a href="/dashboard/posts" class="btn btn-success mb-3"><span data-feather="corner-down-left"></span> Back</a>
    <a href="" class="btn btn-warning mb-3"><span data-feather="edit-2"1></span> Edit</a>

    <form action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger mb-3" onclick="return confirm('Are you sure?')"><span data-feather="trash"></span> Delete</button>
    </form>

    <img src="{{$post->user->image}}">
    <p>{!! $post->body !!}</p>

</div>
@endsection