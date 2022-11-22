<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurantly Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{URL::asset('assets/client/img/favicon.png')}}" rel="icon">
  <link href="{{URL::asset('assets/client/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{URL::asset('assets/client/vendors/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/client/vendors/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/client/vendors/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/client/vendors/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/client/vendors/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/client/vendors/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/client/vendors/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{URL::asset('assets/client/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
  <!-- =======================================================
  * Template Name: Restaurantly - v1.2.1
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> +1 90811 39039
        <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM</span>
      </div>
      <div class="languages">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Ganesh fashion</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{url('/')}}">Home</a></li>
          <!-- <li><a href="#about">About</a></li> -->
          <li><a href="#menu">Menu</a></li>

          <li><a href="{{url('call')}}">Contact</a></li>

           <li class="fa fa-shopping-cart">
                  <a href="{{url('cart')}}" class="tm-nav-link">Add ToCart
                  @if(count((array) session('cart')) == 0)
                  <span class="w3-badge w3-xlarge w3-green"> </span>
                  @else
                  <span class="w3-badge w3-xlarge w3-green">{{ count((array) session('cart')) }}</span>
                  @endif
                  </a>
                </li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

@yield('content')
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3 style="color: #eaa9a9;">Ganesh Fashion</h3>
              <p>
                B-49,gopinath soc, <br>
                mota varachha, surat<br><br>
                <strong>Phone:</strong> +1 90811 39039<br>
                <strong>Email:</strong> dhirengarsondiya@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2  footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('#menu')}}">Menu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('call')}}">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p style="color: #ffffff;">Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Ganesh Fashion</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{URL::asset('assets/client/vendors/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::asset('assets/client/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::asset('assets/client/vendors/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{URL::asset('assets/client/vendors/php-email-form/validate.js')}}"></script>
  <script src="{{URL::asset('assets/client/vendors/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{URL::asset('assets/client/vendors/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{URL::asset('assets/client/vendors/venobox/venobox.min.js')}}"></script>
  <script src="{{URL::asset('assets/client/vendors/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{URL::asset('assets/client/js/main.js')}}"></script>

</body>

</html>
