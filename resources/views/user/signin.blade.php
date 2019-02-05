@extends('layouts.master')

@section('Content')
    <div class="row m-4">
        <div class="col-md-6 offset-3">


            <form action="{{route('user.signin')}}" method="post">
                @csrf
                <div class="form-group">
                    <label  for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-warning btn-lg">Sign In</button>
            </form>
        </div>


    </div>

@endsection