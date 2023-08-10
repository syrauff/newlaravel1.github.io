
@extends('layouts.main')

@section('container')
    <h1>Post Categories</h1>
    <br>
    @foreach ($categories as $category)
    <ul>
        <li>
        <h2>
            <a class="text-decoration-none" href="posts?category={{$category->slug}}">{{ $category->name}}</a>
        </h2>
        </li>
    </ul>
    @endforeach
@endsection