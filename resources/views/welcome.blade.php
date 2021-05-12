@extends('layouts.master')

@section('title')
    Blue Water Café.
@endsection

@section('content')

<link rel="stylesheet" href='src/css/main.css'>
<div class="container">
    <header>
		<h1><strong>Blue Water Café</strong></h1>
		 </header>
			<div class="row aln-center">
			 <div class="col-6 col-6-medium col-12-small>
            </div>
        </div>
    </div>

   <div class="row">
            <div class="thumbnail">
                <img src="images/logo.png" alt="..." class="img-responsive">
                <div class="caption">
                 </div>
                </div>
            </div>
        </div>
        <div class="row">
        
  <div class="column">
    <img src="images/blue.png" alt="Blue Water Café" style="width:100%">
  </div>
  <div class="column">
    <img src="images/blue1.png" alt="Blue Water Café" style="width:100%">
  </div>
  <div class="column">
    <img src="images/blue3.png" alt="Blue Water Café" style="width:100%">
  </div>
</div>
    
</div>
<!-- Start Map section -->
  <section id="mu-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d152052.3465946326!2d-2.0786681976015084!3d53.45384110496289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb5ddf34a7a55%3A0x83bbfa55453918d7!2sGracies%20Cafe!5e0!3m2!1sen!2suk!4v1620322972605!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </section>
  <!-- End Map section -->

  <!-- Start Footer -->
  <footer id="mu-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="mu-footer-area">
           <div class="mu-footer-social">
            <a href="www.facebook.com"><span class="fa fa-facebook"></span></a>
            <a href="www.twitter.com"><span class="fa fa-twitter"></span></a>
            <a href="www.instagram.com"><span class="fa fa-instagram"></span></a>
            <a href="www.Snapchat-Blue_Water_Cafe.com"><span class="fa fa-snapchat"></span></a> 
          </div>
          <div class="mu-footer-copyright">
            <p>&copy; Copyright Umran Hussain. All right reserved.</p>
          </div>         
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
@endsection
            