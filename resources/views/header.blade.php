<?php 
   use App\Http\Controllers\ProductController;
   $total=0;
   if(Session::has('user')){
   $total =ProductController::cartItem();
   }
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">E-coomerce</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Orders</a>
      </li>
      
      
    </ul>
    <form  action="/search" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 search-box" name="search" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="navbar-nav mr-auto">
      
      <li><a href="#" class="mx-4">Cart({{ $total }})</a></li>
      @if (Session::has('user'))
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Session::get('user')['name'] }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/logout">logout</a>
        </div>
      </li>

      @else
      <li><a href="/login" class="mx-4">Login</a></li>
      @endif
          </ul>
  </div>
</nav>