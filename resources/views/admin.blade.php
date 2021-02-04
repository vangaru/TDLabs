@extends('layouts.admin-app')

@section('title')
Админ
@endsection

@section('content')


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">

      <div class="carousel-item active" style="background-image: url('/images/mr-robot.jpg')">
        <div class="carousel-caption">
          <h1 class="display-4">Check Reviews</h1>
          <a href="#">
          	<button class="btn btn-danger">Check</button>
          </a>
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('/images/mr-robot-black.jpg')">
        <div class="carousel-caption">
          <h2 class="display-4">Check Users</h2>
          <a href="#">
          	<button class="btn btn-danger">Check</button>
          </a>
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('/images/mr-robot-marijuana.jpg')">
        <div class="carousel-caption">
          <h2 class="display-4">Check Orders</h2>
          <a href="#">
          	<button class="btn btn-danger">Check</button>
          </a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>

@endsection