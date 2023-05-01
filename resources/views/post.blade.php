@extends('layouts.main')

@section('container')
        <div class="container">

        <h1>{{ $post->title}}</h2>
        <h5>By <a href="#" class="text-decoration-none">{{$post->user->name}}</a> in <a href="/posts?category={{$post->category->slug}}">{{$post->category->name}}</a></h5>
        <img src="{{$post->user->image}}">
        <p>{!! $post->body !!}</p>

</div>

@endsection