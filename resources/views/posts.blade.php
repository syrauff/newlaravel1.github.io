
@extends('layouts.main')

@section('container')
<div class="container pt-3">
    <h1 class="text-center">{{$title}}</h1>
    <br>
    <div class="row justify-content-center">
      <div class="col-md-8 ">
        <form action="/posts">
          @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if (request('user'))
          <input type="hidden" name="user" value="{{ request('user') }}">
        @endif

    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Search something..." name="search" value="{{request('search')}}">
      <button class="btn btn-dark text-light" type="submit" >Search</button>
    </div>
  </form>
  </div>
</div>
    
<div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
  @foreach ($posts as $post)
  <div class="col">
    <div class="card h-100">
      @if ($post->image !== null)
      <img src="{{asset ('storage/' . $post->image)}}" class="card-img-top" alt="{{$post->category->name}}">
      @else
      <img src="https://source.unsplash.com/1200x700?{{$post->category->name}}" alt="{{$post->category->name}}">
      @endif
      <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <h6><a href="/posts?user={{$post->user->username}}" class="text-decoration-none">{{$post->user->username}}</a> in <a href="/posts?category={{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a></h6>
        <p class="card-text">{{$post->excerpt}}</p>
        <small class="text-muted">{{$post->created_at->diffForHumans()}}</small>
      </div>
    </div>
  </div>
  @endforeach
</div>

{{$posts -> links()}}
@endsection