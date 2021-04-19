<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}
?>
<nav class="navbar navbar-inverse header-size">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar navbar-brand brand-text" href="/"><span class="glyphicon glyphicon-briefcase"></span>
E-Shopping</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=" navbar-collapse" >
      <ul class="nav navbar-nav">
        <li class=""><a href="/">Home</a></li>
        <li class=><a href="/myorders">Order <span class="badge badge-success orderss">({{$total}})</span></a></li>

        
      </ul>
      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group has-feedback has-search"><span class="glyphicon glyphicon-search form-control-feedback"></span>
          <input type="text" name="query" class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/cartlist"><span class="glyphicon glyphicon-shopping-cart cart-size"></span><span class="badge badge-success badgess">({{$total}})</span></a></li>
        @if(Session::has('user'))
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>{{Session::get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/logout">Logout</a></li>
        </ul>
      </li>
        @else
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>

      @endif
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>