@extends('master')
@section('content')
<div class=" custom-product">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      @foreach ($product as $products )
      <div class="carousel-item {{ $products->id==1? "active":"" }}">
        <a href="detail/{{ $products->id }}">
          <img src="{{ $products->gallery }}" class="d-block w-100 slider-image" alt="...">
        <div class="carousel-caption slider-text d-none d-md-block">
          <h5>{{ $products->name }}</h5>
          <p>{{ $products->description }}</p>
        </div>
        </a>
    </div>
        
      @endforeach
    </div>
  </div>
  
</div>
<div class="wrap-trending">
  <h2>Trending Products</h2>
  @foreach ($product as $products )
  <a href="detail/{{ $products->id }}">
  <div class="trending-item">
    <img src="{{ $products->gallery }}" class="trending_image" alt="...">
    <div class="">
      <h5>{{ $products->name }}</h5>
    </div>
  </div>
  </a>


  @endforeach
 
</div>
@endsection  