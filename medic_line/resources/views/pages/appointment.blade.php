@extends('layouts.header')


@section('content')


    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2></h2>
         
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

  
        <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Make an Appointment</h2>
            <p>We offer Open Access Scheduling, which means you can schedule an appointment the same day you call. (If available) Carefully fill the appointments form</p>
          </div>
  
          <form action="{{ route('appointment.store') }}" method="POST" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
            @csrf

            <div class="form-row">
              <div class="col-md-4 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-md-4 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="col-md-4 form-group">
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-4 form-group">
                <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
               <!-- <div class="col-md-4 form-group">
                <select name="department" id="department" class="form-control">
                  <option value="">Select Department</option>
                  <option value="Department 1">Department 1</option>
                  <option value="Department 2">Department 2</option>
                  <option value="Department 3">Department 3</option>
                </select>
                <div class="validate"></div>
              </div>
              <div class="col-md-4 form-group">
                <select name="doctor" id="doctor" class="form-control">
                  <option value="">Select Doctor</option>
                  <option value="Doctor 1">Doctor 1</option>
                  <option value="Doctor 2">Doctor 2</option>
                  <option value="Doctor 3">Doctor 3</option>
                </select>
                <div class="validate"></div>
              </div> -->
            </div>
  
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
            </div>
            <div class="text-center"><button type="submit">Make an Appointment</button></div>
          </form>
  
        </div>
      </section><!-- End Appointment Section -->
  
      <!-- ======= Testimonials Section ======= -->
      <!-- <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Testimonials</h2>
            <p>some text will come in here maybe two or more sentences</p>
          </div>
  
          <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="100">
  
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                MedicLine E-Health has come to change our health narrative. UTche Ogbus' chioces
                of pattners are uniquely topnotch.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>George Okey Iloene</h3>
              <h4>Lecturer</h4>
            </div>
  
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Our visit to Dominion Eye Clinic was excellent. The service was great and well
                discounted. Many thanks MedicLine E-Health
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Margaret Ben</h3>
              <h4>Ceo</h4>
            </div>
  
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Thanks to this great platform for the eye test. Thanks MedicLine E-Health
                and thanks to UTche Ogbus for the great opportunity
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Chika Mimi Chika</h3>
              <h4>Store Owner</h4>
            </div>
  
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Good day all I have just collected my eye glasses from Frost Eye Clinic Ogba
                branch thanks to MedicLine E-Health thank to UTche Ogbus
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Toyin Osileh</h3>
              <h4>Freelancer</h4>
            </div>
  
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Today's free eye chech went well at Konexx Optometry, Dr. Emma is awesome. Thanks
                to MedicLine E-Health Thanks to UTche Ogbus
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>Udodirim Friday</h3>
              <h4>Teacher</h4>
            </div>
  
          </div>
  
        </div>
      </section>End Testimonials Section -->
  
       
      <!-- ======= Gallery Section ======= -->
      <section id="gallery" class="gallery">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Gallery</h2>
            <p>some text will come in here maybe two or more sentences</p>
          </div>
  
          <div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
            <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-1.jpg" alt=""></a>
            <a href="assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-2.jpg" alt=""></a>
            <a href="assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-3.jpg" alt=""></a>
            <a href="assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-4.jpg" alt=""></a>
            <a href="assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-5.jpg" alt=""></a>
            <a href="assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-6.jpg" alt=""></a>
            <a href="assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-7.jpg" alt=""></a>
            <a href="assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-8.jpg" alt=""></a>
          </div>
  
        </div>
      </section><!-- End Gallery Section -->
  
      <!-- ======= Pricing Section ======= -->
      <!-- <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Subscription Plans</h2>
            <p>some text will come in here maybe two or more sentences.</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-3 col-md-6">
              <div class="box" data-aos="fade-up" data-aos-delay="100">
                <h3>Free</h3>
                <h4><sup>$</sup>0<span> / month</span></h4>
                <ul>
                  <li>Single</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li class="na">Pharetra massa</li>
                  <li class="na">Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
              <div class="box featured" data-aos="fade-up" data-aos-delay="200">
                <h3>CouPles</h3>
                <h4><sup>$</sup>19<span> / month</span></h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li class="na">Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
              <div class="box" data-aos="fade-up" data-aos-delay="300">
                <h3>Family of Three</h3>
                <h4><sup>$</sup>29<span> / month</span></h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li>Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
              <div class="box" data-aos="fade-up" data-aos-delay="400">
                <span class="advanced">Advanced</span>
                <h3>Ultimate</h3>
                <h4><sup>$</sup>49<span> / month</span></h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li>Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>
  
          </div>
  
        </div> -->
      <!-- </section>--><!--End Pricing Section -->
  
      <!-- ======= Frequently Asked Questioins Section ======= -->
      <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Frequently Asked Questioins</h2>
            <p>some text will come in here maybe two or more sentences</p>
          </div>
  
          <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">
  
            <li>
              <a data-toggle="collapse" class="" href="#faq1">some text will come in here maybe two or more sentences.? <i class="icofont-simple-up"></i></a>
              <div id="faq1" class="collapse show" data-parent=".faq-list">
                <p>
                  some text will come in here maybe two or more sentences.
                </p>
              </div>
            </li>
  
            <li>
              <a data-toggle="collapse" href="#faq2" class="collapsed">some text will come in here maybe two or more sentences.? <i class="icofont-simple-up"></i></a>
              <div id="faq2" class="collapse" data-parent=".faq-list">
                <p>
                  some text will come in here maybe two or more sentences.
                </p>
              </div>
            </li>
  
            <li>
              <a data-toggle="collapse" href="#faq3" class="collapsed">some text will come in here maybe two or more sentences.? <i class="icofont-simple-up"></i></a>
              <div id="faq3" class="collapse" data-parent=".faq-list">
                <p>
                  some text will come in here maybe two or more sentences.
                </p>
              </div>
            </li>
  
            <li>
              <a data-toggle="collapse" href="#faq4" class="collapsed">some text will come in here maybe two or more sentences.? <i class="icofont-simple-up"></i></a>
              <div id="faq4" class="collapse" data-parent=".faq-list">
                <p>
                  some text will come in here maybe two or more sentences.
                </p>
              </div>
            </li>
  
            <li>
              <a data-toggle="collapse" href="#faq5" class="collapsed">some text will come in here maybe two or more sentences.? <i class="icofont-simple-up"></i></a>
              <div id="faq5" class="collapse" data-parent=".faq-list">
                <p>
                  some text will come in here maybe two or more sentences.
                </p>
              </div>
            </li>
  
            <li>
              <a data-toggle="collapse" href="#faq6" class="collapsed">some text will come in here maybe two or more sentences.? <i class="icofont-simple-up"></i></a>
              <div id="faq6" class="collapse" data-parent=".faq-list">
                <p>
                  some text will come in here maybe two or more sentences.
                </p>
              </div>
            </li>
  
          </ul>
  
        </div>
      </section><!-- End Frequently Asked Questioins Section -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
      <script>
        flatpickr('#date', {
          enableTime: true,
          enableSeconds: true
        })

        $(document).ready(function() {
          $('.tags-selector').select2();
        })
      </script>
  
  <!-- End #main -->
@endsection