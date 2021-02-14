@extends('layouts.app')

@section('title', 'Homepage')

@section('headercontent')
<div class="jumbotron jumbotron-fluid" style="background-image: url('{{asset('assets/images/homebanner1.jpg')}}'); background-size: 100%; background-repeat:  no-repeat;">
    <div class="row">
        <div class="col"></div>
        <div class="col">
        <div class="banner-content">
            <div class="mh-100" style="width: 100%; height: 100%; ">
                <h1 style="font-size: 80px;">LOREM IPSUM</h1>
                <p><em>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</em></p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

@endsection