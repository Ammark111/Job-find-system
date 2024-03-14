@extends('layout.app')

@section('title')

    Home

@endsection

@section('content')
@include('layout.navbar')
<!-- <body>
    <div class="body"  style="height: 100vh;">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="background-color: #061f36b7;height: 100%;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h1 class="welcome-text">Welcome to Your Website1</h1>
                </div>
                <div class="carousel-item">
                    <h1 class="welcome-text">Welcome to Your Website2</h1>
                </div>
                <div class="carousel-item">
                    <h1 class="welcome-text">Welcome to Your Website3</h1>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</body>  -->
<style>
    .main {
      background-image:  url({{ asset('asset/image/bc.jpg')}});
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
    }
    .welcome-text {
      text-align: center;
      margin-top: 250px;
      color: #fff;
    }

    h1 {
        font-size: 50px;
    }

  </style>
@endsection