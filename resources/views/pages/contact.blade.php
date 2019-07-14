@extends('layouts.site')

@section('title') Contact @endsection

@section('content')
   <link href="{{ asset('css/custom.css') }}" rel="stylesheet">



<br><br><br><br>
<!--==========================
  Contact Section
============================-->
<section id="contact" class="section-bg wow fadeInUp">

  <div class="container">

<h3 class="text-center">Contact us</h3><br />

<div class="row">
  <div class="col-md-8">
    <div class="alert alert-success hide-box mt-4" id="contactSuccess">
                          <p><strong>Success!</strong> We got your message.</p>
                      </div>

                      <div class="alert alert-danger hide-box mt-4" id="contactError">
                          <p><strong>Error!</strong> Problem sending message</p>
                          <span class="text-1 mt-2 d-block" id="mailErrorMessage"></span>
                      </div>

                      <form id="contactForm" action="{{ url('/send') }}" method="POST">
                          <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">

                          <div class="form-group">
                              <label>Name Surname *</label>
                              <input type="text" value="" data-msg-required="Please enter your name and surname" maxlength="100" class="form-control" name="name" id="name" placeholder="Name Surname" required>
                          </div>

                          <div class="form-group">
                              <label>Email *</label>
                              <input type="email" value="" data-msg-required="Please enter your email" data-msg-email="Please entera valid email" maxlength="100" class="form-control" name="email" id="email" placeholder="Email" required>
                          </div>

                          <div class="form-group">
                              <label>Message *</label>
                              <textarea maxlength="5000" data-msg-required="Please enter your message" rows="8" class="form-control" name="message" id="message" placeholder="Message" required></textarea>
                          </div>

                          <input type="submit" value="Send Message" class="btn btn-primary" data-loading-text="Sending...">
                      </form>
  </div>
  <div class="col-md-4">
    <b>Customer service:</b> <br />
    Phone: +1 512-643-4879<br />
    E-mail: <a href="mailto:expertdiplomaticservice@diplomats.com">expertdiplomaticservice@diplomats.com</a><br />
    <!-- <br /><br />
    <b>Headquarter:</b><br />
    Company Inc, <br />
    Las vegas street 201<br />
    55001 Nevada, USA<br />
    Phone: +1 145 000 101<br />
    <a href="mailto:usa@mysite.com">usa@mysite.com</a><br />


    <br /><br />
    <b>Hong kong:</b><br />
    Company HK Litd, <br />
    25/F.168 Queen<br />
    Wan Chai District, Hong Kong<br />
    Phone: +852 129 209 291<br />
    <a href="mailto:hk@mysite.com">hk@mysite.com</a><br /> -->


  </div>
</div>
<br><br><br><br><br><br><br><br><br><br>
</div>
</section><!-- #contact -->



@endsection



@section ('footer')

<!-- <script src="{{ asset('js/app.js') }}"></script> -->
   <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
   <script src="{{ asset('js/jquery.validation.min.js') }}"></script>
   <script src="{{ asset('js/custom.js') }}"></script>
@endsection
