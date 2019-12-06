
@extends('layouts.app')
<br><br><br>
@section('content')
<h1>{{$title}}</h1>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="../storage/img/1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../storage/img/2.gif" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../storage/img/3.png" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../storage/img/4.jpg" alt="Forth slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../storage/img/5.jpg" alt="Fifth slide">
          </div>
          <div class="carousel-item">
                <img class="d-block w-100" src="../storage/img/6.jpg" alt="Fifth slide">
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
      <br>
      <br>
      @endsection