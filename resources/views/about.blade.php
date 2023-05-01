@extends('layouts.main')
@section('container')
    <h1>About</h1>
    <p>{{$nama}}</p>
    <p>{{$email}}</p>
    <img src="img/{{$image}}" alt="{{$nama}}" width="250px">
@endsection
