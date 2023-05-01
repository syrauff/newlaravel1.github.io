@extends('layouts.main')
@section('container')
    <div class="mt-20">
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="categories/web-programming">
            <img src="img/{{$imgPro}}" class="d-block w-100" alt="programming">
            </a>
          </div>
          <div class="carousel-item">
            <a href="categories/webdesign">
            <img src="img/{{$imgWeb}}" class="d-block w-100" alt="web-design" >
            </a>
          </div>
          <div class="carousel-item">
            <a href="categories/personal">
            <img src="img/{{$imgPer}}" class="d-block w-100" alt="personal-blog">
            </a>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" ></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
          <span class="carousel-control-next-icon" ></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    </div>
@endsection