@extends('master')
@section('content')

<div id="carouselExampleDark" class="carousel carousel-dark slide col-lg-12 custom-product ">
    <div class="carousel-indicators">
        @foreach ($products as $item)
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="{{ $loop->first ? 'true' : '' }}" aria-label="Slide {{ $loop->iteration }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach ($products as $item)
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}" data-bs-interval="10000">
            <a href="details/{{$item['id']}}">
            <img src="{{ $item['gallery'] }}" class="d-block slider-img" >
            <div class="carousel-caption d-none d-md-block">
                <h5>{{ $item['name'] }}</h5>
                <p>{{ $item['description'] }}</p>
            </div>
        </a>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<h1 class="mt-4">Trending Products</h1>
<div class=" d-flex justify-content-around cards flex-wrap">
    @foreach ($products as $item )
    <div class="card" style="width: 18rem;">
        <a href="details/{{$item['id']}}">
        <img class="card-img-top" src="{{$item['gallery']}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$item['name']}}</h5>
          <p class="card-text">{{$item['description']}}</p>
        </div>
        </a>
      </div>
      @endforeach
</div>

@endsection