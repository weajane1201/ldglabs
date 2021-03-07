@extends('layouts.app')

@section('title', 'Homepage')

@section('headercontent')
<div class="jumbotron jumbotron-fluid" style="background-image: url('{{asset('assets/images/homebanner1.jpg')}}'); background-size: 100%; background-repeat:  no-repeat;">
    <div class="row">
        <div class="col"></div>
        <div class="col">
        <div class="banner-content">
            <div class="mh-100" style="width: 100%; height: 100%; ">
                <h1 style="font-size: 80px; ">LOREM IPSUM</h1>
                <p><em>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</em></p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')

<div class="row">
    <div class="col mt-5 our-commitment-row" >
    <h2 style="">Our Commitment</h2>
    <p style="margin-top: 3rem;">Lion Diamonds Group sells genuine loose diamonds, certified by GIA. Lion Diamonds is a true American success story and can trace its beginnings to the United States bicentennial year of 1976. The Domatov family has worked in every facet of the diamond business including polishing and cutting raw stones, importing and exporting as well as e-commerce.
    </p></div>
    <div class="col"><img src="{{asset('assets/images/5F5A3714-Edit.png')}}" class="img-fluid" alt="Responsive image"></div>
</div>
@endsection