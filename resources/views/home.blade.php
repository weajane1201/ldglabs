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


 <!-- ======= About Section ======= -->
 <section id="about" class="about">

<div class="container" data-aos="fade-up">
  <div class="row gx-0">

    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
      <div class="content">
        <h3>Who We Are</h3>
        <h2>“Out of everything in the world, diamonds are the most valuable” – Pliny, 1 – 99 AD.</h2>
        <p>
        Long before civilization found ways to beautify and modify precious stones, diamond has always been a valued commodity among humans. From its earliest discoveries in Indian water bodies; to its trading in Venice’s Medieval markets; and its use on the jewelry items of European elites, the diamond has always traversed a priceless course.
        </p>

        <div class="text-center text-lg-start">
          <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Read More</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
      <img src="{{asset('assets/images/5F5A3714-Edit.png')}}" class="" alt="">
    </div>

  </div>
</div>

</section><!-- End About Section -->

  <!-- ======= Values Section ======= -->
<section id="values" class="values">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h3>OUR SERVICES</h3>
    <h2 style="text-align: center;">LDG Value-Added Services</h2>
    <p>At LDG, we know how dynamic the diamond industry is. Our professionals also understand how important time and valuable service are to diamond merchants. We also understand that there are times when you may need to quickly grade a gemstone to close a deal with your client within a short time. Hence, in addition to our basic grading service, we also offer additional services that give you real value for your money.</p>
  </header>

  <div class="row">

    <div class="col-lg-4">
      <div class="box" data-aos="fade-up" data-aos-delay="200">
        <img src="assets/img/values-1.png" class="img-fluid" alt="">
        <h3>Door-to-Door Service</h3>
        <p>In a bid to ensure that your convenience is not jeopardized, we have included door-to-door service in our list of value-added services. You only need to pay a small fee, in addition to the cost of our key services.</p>
      </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0">
      <div class="box" data-aos="fade-up" data-aos-delay="400">
        <img src="assets/img/values-2.png" class="img-fluid" alt="">
        <h3>Same-Day Appraisal</h3>
        <p>For those sales you need to complete with valid certification, and within a short time, you can count on us to deliver. We offer same-day diamond grading services so that you will never lose your customers due to delayed grading.</p>
      </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0">
      <div class="box" data-aos="fade-up" data-aos-delay="600">
        <img src="assets/img/values-3.png" class="img-fluid" alt="">
        <h3>Basic Assessment</h3>
        <p>You may want to try a preliminary assessment of your diamonds before committing to complete grading. We offer a basic assessment service for the clarity and color of diamonds. This assessment result is stored separately from full grading reports and used as a reference for further evaluation of the stones in question.</p>
      </div>
    </div>

  </div>

</div>

</section><!-- End Values Section -->


  

 <!-- ======= Features Section ======= -->
 <section id="features" class="features">

<div class="container" data-aos="fade-up" style="margin-top: 4rem; margin-bottom: 5rem;">

  <header class="section-header">
    <h3>The Laboratory Diamonds Grading</h3>
    <p style="margin-top: 3rem;">The diamond industry is quickly scaling up. With each passing day, the industry experiences exponential growth in its different sectors, and so the importance of prompt, premium services among diamond service providers cannot be overemphasized.</p>
    <p>On note of this growth, the Laboratory Diamonds Grading is dedicated to providing nothing short of premium quality services to our clients. We also ensure that diamond experts who transact with us enjoy fantastic benefits via the following lines of service:
</p>
  </header>

  <div class="row">

    <div class="col-lg-6">
      <img src="{{asset('assets/images/homebanner3.jpg')}}" class="img-fluid" alt="">
    </div>

    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
      <div class="row align-self-center gy-4">

        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
          <div class="feature-box d-flex align-items-center">
            <i class="far fa-check-square"></i>
            <h3>Flawless and professional grading.</h3>
          </div>
        </div>

        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
          <div class="feature-box d-flex align-items-center">
            <i class="far fa-check-square"></i>
            <h3>Adhering to the highest measure of objectivity during grading.</h3>
          </div>
        </div>

        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
          <div class="feature-box d-flex align-items-center">
            <i class="far fa-check-square"></i>
            <h3>Strict compliance with prevailing standards set by international diamond organizations during every grading process.</h3>
          </div>
        </div>

        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
          <div class="feature-box d-flex align-items-center">
            <i class="far fa-check-square"></i>
            <h3>Employment of professionals that are skilled and well-trained to use sophisticated grading equipment, and also comply with prevailing standards.</h3>
          </div>
        </div>

        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
          <div class="feature-box d-flex align-items-center">
            <i class="far fa-check-square"></i>
            <h3>Provision of certificates for appraised gemstones and jewelry items.</h3>
          </div>
        </div>

        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
          <div class="feature-box d-flex align-items-center">
            <i class="far fa-check-square"></i>
            <h3>Ensuring that our business locations do not jeopardize the convenience of our clients.</h3>
          </div>
        </div>

      </div>
    </div>

  </div> <!-- / row -->


</div>

</section><!-- End Features Section -->


@endsection