<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Ecowintex</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('/assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('/assets/lib/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/lib/owlcarousel/owl.carousel.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/lib/owlcarousel/owl.transitions.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/lib/venobox/venobox.css')}}" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="{{asset('/assets/css/nivo-slider-theme.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="{{asset('/assets/css/responsive.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <!-- harusnya tidak di comment -->
  <!--<div id="preloader"></div>-->
  <!-- end harusnya tidak di comment -->

  @include('header')

  <!-- Start Slider Area -->
  @include('home')
  <!-- End Slider Area -->

  <!-- Start About area -->
  @include('about')
  <!-- End About area -->
  
   <!-- Start Works area -->
  @include('processprod')
  <!-- End works area -->

  <!-- Start Service area -->
  @include('services')
  <!-- End Service area -->

  <!-- our-skill-area start -->
  @include('skill')
  <!-- our-skill-area end -->


  <!-- Start Welcome Area -->
  @include('contact')
  <!-- End Wellcome Area -->

  <!-- Start team Area -->
  {{-- <div id="team" class="our-team-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Our special Team</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="team-top">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
										<img src="{{asset('/assets/img/team/1.jpg')}}" alt="">
									</a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
													<i class="fa fa-facebook"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-twitter"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-instagram"></i>
												</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Jhon Mickel</h4>
                <p>Seo</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
										<img src="{{asset('/assets/img/team/2.jpg')}}" alt="">
									</a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
													<i class="fa fa-facebook"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-twitter"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-instagram"></i>
												</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Andrew Arnold</h4>
                <p>Web Developer</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
										<img src="{{asset('/assets/img/team/3.jpg')}}" alt="">
									</a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
													<i class="fa fa-facebook"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-twitter"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-instagram"></i>
												</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Lellien Linda</h4>
                <p>Web Design</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
										<img src="{{asset('/assets/img/team/4.jpg')}}" alt="">
									</a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
													<i class="fa fa-facebook"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-twitter"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-instagram"></i>
												</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Jhon Powel</h4>
                <p>Seo Expert</p>
              </div>
            </div>
          </div>
          <!-- End column -->
        </div>
      </div>
    </div>
  </div>  --}}
  <!-- End Team Area -->

  

  <!-- Start portfolio Area -->
  @include('buyer')
  <!-- awesome-portfolio end -->
  <!-- start pricing area -->
   {{-- @include('pricing')  --}}
  <!-- End pricing table area -->
  <!-- Start Testimonials -->
 {{-- @include('testimoni') --}}
  <!-- End Testimonials -->
  <!-- Start Blog Area -->
  {{--@include('news')--}}
  <!-- End Blog -->
  <!-- Start Suscrive Area -->
  @include('contactus')
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
  @include('footer')
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('/assets/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('/assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('/assets/lib/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('/assets/lib/knob/jquery.knob.js')}}"></script>
  <script src="{{asset('/assets/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('/assets/lib/parallax/parallax.js')}}"></script>
  <script src="{{asset('/assets/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('/assets/lib/nivo-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
  <script src="{{asset('/assets/lib/appear/jquery.appear.js')}}"></script>
  <script src="{{asset('/assets/lib/isotope/isotope.pkgd.min.js')}}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{asset('/assets/contactform/contactform.js')}}"></script>

  <script src="{{asset('/assets/js/main.js')}}"></script>
</body>

</html>
