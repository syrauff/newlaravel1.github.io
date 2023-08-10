@extends('layouts.main')

@section('container')
        <div class="container">

        <h1>{{ $post->title}}</h2>
        <h5>By <a href="#" class="text-decoration-none">{{$post->user->name}}</a> in <a href="/posts?category={{$post->category->slug}}">{{$post->category->name}}</a></h5>
        @if ($post->image !== null)
          <div style="max-height: 350px; overflow:hidden">
          <img src="{{asset ('storage/' . $post->image)}}" alt="{{$post->category->name}}" class="img-fluid mt-3">
          </div>
          @else
          <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid mt-3">
          @endif
        <p>{!! $post->body !!}</p>

</div>

@endsection