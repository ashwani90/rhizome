@extends('layout')

@section('title', 'Contact Architecture Studio Team')

@section('content')
    @parent
    <section id="breadcrumbs" class="breadcrumbs pt-1">
    <div class="section-title pl-5">
              <p>Contact us</p>
            </div>
          
        </section>
    <section id="contact" class="contact" style="margin-top: -50px;">
          <div class="contact-container">
          <div class="row">
          <div class="col-lg-4 col-sm-12 contact-comp">
          <div class="pl-4 pt-2">
                                      <div class="info">
                                        <div class="address">
                                          <i class="icofont-google-map"></i>
                                          <h4>Location:</h4>
                                          <p>P 2/21, DLF Phase 2, Gurugram, Haryana 122001</p>
                                        </div>

                                        <div class="email">
                                          <i class="icofont-envelope"></i>
                                          <h4>Email:</h4>
                                          <p>info@studiorhizome.com</p>
                                        </div>

                                        <div class="phone">
                                          <i class="icofont-phone"></i>
                                          <h4>Call:</h4>
                                          <p>+91 01244351477</p>
                                        </div>

                                      </div>

                                    </div>
                                    </div>
            <div class="col-lg-8 col-sm-12 contact-comp">
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.7747818849425!2d77.08510031554358!3d28.486328497432797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce402455385a9%3A0xf232434f358e9d5a!2sStudio%20Rhizome!5e0!3m2!1sen!2sin!4v1633022847818!5m2!1sen!2sin" frameborder="0" allowfullscreen loading="lazy"></iframe>
            </div>
            </div>

          </div>
        </section><!-- End Contact Section -->
         <section class="form-container contact" style"margin: 0!important; padding: 0!important;">
                    <div class="container">

                    <form action="/send_mail" method="post" role="form" class="php-email-form">
                    @csrf
                                      <div class="form-row">
                                        <div class="col-md-6 form-group">
                                          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                          <div class="validate"></div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                          <div class="validate"></div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                        <div class="validate"></div>
                                      </div>
                                      <div class="form-group">
                                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                        <div class="validate"></div>
                                      </div>
                                      <div class="mb-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                      </div>
                                      <div class="text-center"><button type="submit">Send Message</button></div>
                                    </form>
                    </div>
                    </section>
@endsection
