<!-- Access app.blade parent -->
@extends('layouts.app')

@section('title', 'Contact Page')
@section('headercontent')
<div class="jumbotron jumbotron-fluid" style="background-image: url('{{asset('assets/images/certification-banner.jpg')}}'); background-size: 100%; background-repeat:  no-repeat;">
    <div class="row">
        <div class="col"></div>
        <div class="col">
        <div class="banner-content-pages">
           
        </div>
    </div>
</div>
@endsection
@section('content')

<div class="row">
        <div class="col-md"></div>
        <div class="col-md-8 page-banner-title">
        <h1>Contact Us!</h1>
        </div>
        <div class="col-md"></div>
    </div>

    <div class="row">
    <div class="col-md"></div>
        <div class="col-md-6">
            <p>We can’t wait to hear from you!
                Kindly fill out the form below to get a direct response from us. You can also give us a call, send an email, or visit us at any of our locations.
            </p>
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Name</label>
                    <input type="text" class="form-control" id="Name" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Phone Number</label>
                    <input type="number" class="form-control" id="phonenumber" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md"></div>
    </div>

<!-- <ul class="list-group">
    @foreach ($contacts as $value) -->
        <!-- <li class='list-group-item'>{{$value}}</li> -->
        <!-- @if ($value === "Wea")
            <li class='list-group-item'>{{$value}}</li>
        @endif
    @endforeach
</ul> -->

@endsection


