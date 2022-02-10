<?php 
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
  $total=ProductController::cartItem();
}

?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img style="width:120px;height:54px"src="https://cdn.pixabay.com/photo/2014/04/02/10/53/shopping-cart-304843_1280.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/myorders">Orders</a>

          </li>
         
         
        </ul>
        <form class="d-flex me-5" action="/search">
          <input class="form-control me-2" name="query"type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
          <ul class="navbar-nav navbar-right">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/cartlist">Cart({{$total}})</a>
              @if(Session::has('user'))
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="/cartlist" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{Session::get('user')['name']}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/logout">Logout</a></li>
                  
                </ul>
              </li>
              @else
              <li><a class="btn btn-primary me-3" href="/login">Login</a></li>
              <li><a class="btn btn-warning " href="/register">Register</a></li>
              @endif
            </li>
        </ul>
        </form>
      </div>
    </div>
    
  </nav>