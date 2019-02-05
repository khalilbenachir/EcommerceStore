
@extends('layouts.master')



    @section('Content')
        @if(Session::has('success'))
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div id="charge-message" class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                </div>
            </div>
            @endif
        <div class="row">
            <div class="col-md-10 offset-1">
                <h2>Trending <b>Products</b></h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="row">
                                @foreach($products as $product)
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="{{$product->imagePath}}" class="img-responsive img-fluid" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>{{$product->title}}</h4>
                                                <p class="item-price">${{$product->price}}</p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="{{route('product.addToCart',['id'=>$product->id])}}}" class="btn btn-outline-warning btn-lg">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
                </div>
            </div>

        </div>





    @endsection
