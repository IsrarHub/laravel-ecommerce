@extends('master')
@section('content')
<div class=" custom-product">
  <div class="col-sm-4">
    <a href="#">filter</a>
  </div>
  <div class="col-sm-4">
  
<div class="wrap-trending">
  <h2>Result Products</h2>
  @foreach ($search as $products )
  <a href="detail/{{ $products->id }}">
  <div class="searched-item">
    <img src="{{ $products->gallery }}" class="trending_image" alt="...">
    <div class="">
      <h5>{{ $products->name }}</h5>
    </div>
  </div>
  </a>
</div>

  @endforeach
  </div>
</div>
</div>
@endsection  