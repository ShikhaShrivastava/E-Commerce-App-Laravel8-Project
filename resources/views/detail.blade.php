@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
        <a href="/">Go Back </a>
        <h3><strong> {{$product['name']}}</strong></h3>
        <h4>Price :<span class="pricing-text"> {{$product['price']}}/-</span></h4>
        <h5>Detail : {{$product['description']}}</h3>
        <h5>Category : {{$product['category']}}</h4>
        <br><br>
        <form action="/add_to_cart" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{$product['id']}}">
            <button class="btn btn-primary">Add to Cart</button>
        </form>
        <br><br>
        <button class="btn btn-success">Buy Now</button>
        </div>
    </div>
</div>
@endsection