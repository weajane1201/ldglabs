@extends('layouts.app')

@section('title', 'Verify Diamonds')
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
      <h1>LDG Verification on Diamonds</h1>
    </div>
    <div class="col-md"></div>
</div>

    <div class="row" style="background-image: url('{{asset('assets/images/banner-verification.png')}}'); background-size: 100%; background-repeat:  no-repeat;">
      <div class="col-md" style="padding: 11% 0;">
          To accurately authenticate your diamonds, you need to ascertain whether it is natural or laboratory-synthesized. This verification can be time and capital consuming, as it requires lengthy processes and the use of costly equipment.
      </div>
      <div class="col"></div>
    </div>


    <div class="row">
      <div class="col" style="text-align: center;
    padding-top: 2rem;"><img src="{{asset('assets/images/certification.jpg')}}" class="img-fluid" alt="Responsive image" style="width: 80%;"></div>
      <div class="col" style="padding: 14% 0;"><p>It also requires the expertise of experienced gem professionals for accuracy. At LDG, we are committed to providing you with nothing less than 100% accuracy on the verification of your precious stones. </p>

      <p>We also ensure that the verification process is affordable and convenient. Hence, you can access the result of our verification process via our web portal. </p></div>
    </div>

    <div class="row" style="margin-bottom: 10rem;">
      <div class="col-12 text-center">
        <h2 style="color: #CC9B4E; font-family: 'Slabo';">Our verification process includes:</h2>
      </div>
      <div class="col">
        <div class="row mt-5 justify-content-md-center">
          <div class="col-md-4 text-center">
            <div class="card" style="">

              <img class="card-img-top" src="{{asset('assets/images/ldg-ring.png')}}" alt="Card image cap" style="width: 20px; margin: 0 auto;">
              <div class="card-body">
                <p class="card-text">Verifying that your diamond is natural.</p>
              </div>

            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="card" style="">
              
              <img class="card-img-top" src="{{asset('assets/images/ldg-ring.png')}}" alt="Card image cap" style="width: 20px; margin: 0 auto;">
              <div class="card-body">
                <p class="card-text">HPHT assessment to detect previous treatments done on your precious stones. </p>
              </div>

            </div>
          
          
          </div>
        </div>
      </div>
    </div>

    
    <div class="row"  style="margin-bottom: 10rem; background:#f5f4f3; padding: 5rem 2rem; background-image: url('{{asset('assets/images/5F5A4561.png')}}'); background-repeat: no-repeat;
    background-size: contain;
    background-position: right;">
      <div class="col-md">
        <h2>Complete grading service on your request.</h2>
        <p style="padding-top: 20px;">To save your resources, and preserve your reputation and your gem’s authenticity, reach out to us by email to get a quote for your diamonds.</p>
      </div>
      <div class="col-md">
        <div class="row">
            <div class="col-12">
             
            </div>
          </div>
        </div>
      </div>
    </div>
    
@endsection

