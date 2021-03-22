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

<div class="row">
    <div class="col mt-5 our-commitment-row" >
        <h3 style="color: #272F5D; ">OUR SERVICES</h3>
        <h2>The Laboratory Diamonds Grading </h2>
        <p style="margin-top: 3rem;">The diamond industry is quickly scaling up. With each passing day, the industry experiences exponential growth in its different sectors, and so the importance of prompt, premium services among diamond service providers cannot be overemphasized.</p>

        <p> On note of this growth, the Laboratory Diamonds Grading is dedicated to providing nothing short of premium quality services to our clients. We also ensure that diamond experts who transact with us enjoy fantastic benefits via the following lines of service:</p>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="row">
        <div class="col">
            <ul>
                <li><i class="fas fa-angle-right"></i>Flawless and professional grading.</li>
                <li><i class="fas fa-angle-right"></i>Adhering to the highest measure of objectivity during grading. </li>
                <li><i class="fas fa-angle-right"></i>Strict compliance with prevailing standards set by international diamond organizations during every grading process.</li>
                <li><i class="fas fa-angle-right"></i>Employment of professionals that are skilled and well-trained to use sophisticated grading equipment, and also comply with prevailing standards.</li>
                <li><i class="fas fa-angle-right"></i>Provision of certificates for appraised gemstones and jewelry items.</li>
            </ul>
        </div>
        <div class="col">
            <ul>
                <li><i class="fas fa-angle-right"></i>Ensuring that our business locations do not jeopardize the convenience of our clients.</li>
                <li><i class="fas fa-angle-right"></i>Utilizing our vast experience to provide consultation services on polished diamond improvements, alongside the planning and marking of rough diamonds.</li>
                <li><i class="fas fa-angle-right"></i>Training and keeping our professionals abreast of the latest developments in the industry.</li>
                <li><i class="fas fa-angle-right"></i>Guidance for consumers who need help in deciding the diamond type to purchase.</li>
                <li><i class="fas fa-angle-right"></i>Running promotional ads on prominent platforms such as trade magazines and digital ads. We also reach into the spotlight of global diamond functions such as tradeshows and exhibits.</li>
            </ul>
        </div>
        </div>
    
    </div>
</div>
</div>


@endsection