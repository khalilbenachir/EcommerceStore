@extends('layouts.master')



@section('Content')

    @if(Session::has('cart'))
        <div class="row">
            <div class="col-md-6 offset-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <span class="badge-warning">{{$product['qty']}}</span>
                            <strong>{{$product['item']['title']}}</strong>
                            <span class="badge-dark">{{$product['price']}}</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-warning btn-lg dropdown-toggle">Action<span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="/">Reduce one</a></li>
                                    <li><a href="/">Reduce all</a></li>
                                </ul>
                            </div>
                        </li>


                        @endforeach
                </ul>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-3">
                <strong>Total : {{$totalPrice}}</strong>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6 offset-3">
                <a type="button" href="{{route('checkout')}}" class="btn-outline-warning btn-lg">Checkout</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-6 offset-3">
                <strong>No Items in Cart</strong>
            </div>
        </div>
    @endif
             @endsection