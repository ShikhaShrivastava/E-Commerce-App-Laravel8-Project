@extends('master')
@section('content')
<div class="container py-5">
    <div class="row text-center text-white mb-5">
        <div class="col-lg-4 mx-auto">
            <h3 class="display-4">Searched  Products</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <!-- List group-->
            @foreach($products as $item)
            <a href="detail/{{ $item['id'] }}">
            <ul class="list-group shadow">
                <!-- list group item-->
                <li class="list-group-item">
                    <!-- Custom content-->
                    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                        <div class="media-body order-2 order-lg-1">
                            <h4 class="mt-0 font-weight-bold mb-2">{{ $item['name']}}</h4>
                            <p class="font-italic text-muted mb-0 small">{{ $item['description']}}</p>
                            <div class="d-flex align-items-center justify-content-between mt-1">
                                <h5 class="font-weight-bold my-2 price-wrap">₹{{ $item['price']}}/- <del class="price-old">${{ $item['price']-100}}/-</del></h5>
                                <ul class="list-inline small">
                                    <li class="list-inline-item m-0"><i class="glyphicon glyphicon-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="glyphicon glyphicon-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="glyphicon glyphicon-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="glyphicon glyphicon-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="glyphicon glyphicon-star text-gray"></i></li>
                                </ul>
                            </div>
                        </div><img src="{{ $item['gallery']}}" alt="" width="200" class="ml-lg-5 order-1 order-lg-2">
                    </div> <!-- End -->
                </li> <!-- End -->
                <!-- list group item-->
            </ul> <!-- End -->
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection