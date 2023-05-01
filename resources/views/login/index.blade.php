@extends('layouts.main')

@section('container')
<div class="container">
<div class="row justify-content-center">
  <div class="col-md-5">


    <main class="form-signin w-100 m-auto">

      
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{session('loginError')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

      <form action="/login" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center mt-5">Login Center</h1>
    
        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" autofocus required value="{{old('email')}}">
          <label for="email">Email address</label>
              @error('email')
              <div class="invalid-tooltip">
                {{$message}}
              </div>
              @enderror
            </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-2">Belum daftar? <a class="text-decoration-none" href="/register">Daftar Sekarang!</a></small>
    </main>
  </div>
</div>
</div>

@endsection
