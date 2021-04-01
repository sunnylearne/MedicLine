@extends('layouts.header')


@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-home.jpg)">
          <div class="container">
            <h2>Welcome to <span>MedicLine E-Health</span></h2>
            
            <h5>Passion for a Healthy Lifestyle</h5>
            <a href="about.html" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="container">
            <h2>24/7 Hours First-Aid Services </h2>
            <p>Provision of a 24/7 hours First-Aid Services over the phone
              to our clients, essentially addressing the health
            </p>
            
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="container">
            <h2>Virtual Health (Telehealth) Programme</h2>
            <p>Provision of virtual health (telehealth) programme that will
              include rapid access to health assessment, etc.
            </p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero --

     <!-- ======= Featured Services Section ======= -->
     <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="icofont-learn"></i></div>
              <h4 class="title"><a href="">(COVID-19) UPDATES</a></h4>
              <p class="description">learn about Corvid-19 in Nigeria and get recent updates click <a href="https://covid19.ncdc.gov.ng/report" target="blank">here</a></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="icofont-beaker"></i></div>
              <h4 class="title"><a href="">COLLECTION SITE</a></h4>
              <p class="description">(COVID-19) Collection Sites in each State in Nigeria with contact click <a href="https://covid19.ncdc.gov.ng/samplesites/" target="blank">here</a></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="icofont-shield"></i></div>
              <h4 class="title"><a href="">(COVID) GUIDELINES</a></h4>
              <p class="description">Guidelines on how to remain save during this Pandemic click <a href="https://covid19.ncdc.gov.ng/samplesites/" target="blank">here</a></p>
              
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="icofont-question-square"></i></div>
              <h4 class="title"><a href="">(COVID-19) FAQ</a></h4>
              <p class="description">Frequently Ask Questions on Covid-19 click <a href="https://covid19.ncdc.gov.ng/faq/" target="blank">here</a></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

   

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>In an emergency? Need help now?</h3>
          <p> We offer Open Access Scheduling, which means you can schedule an appointment the same day you call. (If available) For details on scheduling appointments click here.</p>
          <a class="cta-btn scrollto" href="features.html #appointment">Make an Appointment</a>
        </div>

      </div>
    </section><!-- End Cta Section -->


     <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
          <div class="icon-box mt-5 mt-lg-0">
            <i class="bx bxs-quote-alt-left"></i>
            <h4>Team Work</h4>
            <p>Our providers work as a team to ensure we meet all of your health care needs. With a team of  experience Health professionals.</p>
          </div>
          <div class="icon-box mt-5">
            <i class="bx bxs-quote-alt-left"></i>
            <h4>Client Base</h4>
            <p>Medicline E-Health serves over 100 clients  in our current locations and our client volumes continue to increase.</p>
          </div>
          <div class="icon-box mt-5">
            <i class="bx bxs-quote-alt-left"></i>
            <h4>vouchers</h4>
            <p>We aim to reduce the unnecessary cost, our services are cost effective and we are transparent with our dealing with our clients.</p>
          </div>
          <div class="icon-box mt-5">
            <i class="bx bxs-quote-alt-left"></i>
            <h4>Commitment</h4>
            <p>Our commitment is to always look for ways to increase capacity so we can help meet the needs of the ever increasing number of underserved people in our society.</p>
          </div>
        </div>
        <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/features1.jpg");' data-aos="zoom-in"></div>
      </div>

    </div>
  </section><!-- End Features Section -->
 
@endsection