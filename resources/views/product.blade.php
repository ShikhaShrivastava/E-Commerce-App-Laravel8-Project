@extends('master')
@section('content')

<div class="custom-product ">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
      @foreach($products as $item)
      <div class="item {{$item['id']==1?'active':'' }}">
        <a href="detail/{{ $item['id'] }}">
        <img class="slider-img" src="{{ $item['gallery']}}">
        <div class="carousel-caption slider-txt">
          <h3>{{ $item['name']}}</h3>
        </div>
        </a>
      </div>
      @endforeach
   </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <div class="trending-wrapper">
        <legend><h2><b>Trending Products</b></h2></legend><br>
        @foreach($products as $item)
        <div class="trending-item">
            <figure class="card card-product-grid card-lg">
              <a class="img-wrap" href="detail/{{ $item['id'] }}">
              <img class="trending-img" src="{{ $item['gallery']}}">
                <div class="">
                  <h4>{{ $item['name']}}</h4>
                </div>
              </a>
            <figure>
          <div class="rating text-left">  
            <i class="glyphicon glyphicon-star"></i> 
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
          </div>
          <div class="bottom-wrap"> <a href="cartlist" class="btn btn-success float-right" >Add to cart </a>
            <div class="price-wrap">
                <span class="price h5">${{ $item['price']}}/-</span> 
                <del class="price-old">${{ $item['price']-100}}/-</del><br> 
              </div>
          </div>
        </div>
        @endforeach
    </div>

</div>
@endsection