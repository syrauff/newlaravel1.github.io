
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
    @foreach ($posts as $post)
 
    <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title"><a href="/posts/{{$post->slug}}" class="text-decoration-none">{{ $post->title}}</a></h5>
          <h6>By <a href="/posts?user={{$post->user->username}}" class="text-decoration-none">{{$post->user->username}}</a> in <a href="/posts?category={{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a></h6>
          @if ($post->image !== null)
          <div style="max-height: 350px; overflow:hidden">
          <img src="{{asset ('storage/' . $post->image)}}" alt="{{$post->category->name}}" class="img-fluid mt-3">
          </div>
          @else
          <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid mt-3">
          @endif
          <p class="card-text">{{ $post->excerpt}}</p>
          <a href="/posts/{{$post->slug}}">Read more..</a>
          <p class="card-text">
            <small class="text-muted">{{$posts[0]->created_at->diffForHumans()}}</small></p>
        </div>
      </div>
    @endforeach
</div>

{{$posts -> links()}}
@endsection