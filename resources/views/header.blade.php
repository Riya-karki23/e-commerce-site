<?php
    use App\Http\Controllers\productController;
    $total=0;
    if(Session::has('user')){
      $total=productController::cartItem();
    }
?>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
    <a class="navbar-brand" href="#">E-comm</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/orders">Orders</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Categories 
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Phones</a>
            <a class="dropdown-item" href="#">TV</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Fridge</a>
          </div>
        </li>
       
      </ul>
      <form class="form-inline my-2 my-lg-0" method="GET" action="/search">
        <input class="form-control mr-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
        

  <li>
    <a href="/cartList" class="cart-item">Cart Item({{$total}})</a>
  </li>
      @if(Session::has('user')){
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle text-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
           {{Session::get('user')['name']}}
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
         </ul>
        </div>
      }
      @else
      <li><a href="/login" class="cart-item mx-3 btn btn-info">Login</a></li>
      @endif

      
    </div>
  </nav>