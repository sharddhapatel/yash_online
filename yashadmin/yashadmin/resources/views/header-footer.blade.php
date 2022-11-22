<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{URL:: asset('assets/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{URL:: asset('assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL:: asset('assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL:: asset('assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{URL:: asset('assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{URL:: asset('assets/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL:: asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL:: asset('assets/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{URL:: asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL:: asset('assets/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{URL:: asset('assets/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL:: asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->

    <link href="{{URL:: asset('assets/css/theme.css')}}" rel="stylesheet" media="all">

</head>
 <!-- MENU SIDEBAR-->
 <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{URL:: asset('assets/images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{url ('/')}}">Dashboard 1</a>

                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href = "{{url ('showcatagory')}}">Catagory</a>
                        </li>
                        <li>
                            <a href = "{{url ('showcontact')}}">Contact</a>
                        </li>
                        <li>
                          <a href="{{url ('showpc')}}">Product</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{url ('login')}}">Login</a>
                                </li>
                                <li>
                                    <a href="{{url ('logout')}}">logout</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->


        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap" style="float:right;">

                            <div class="header-button">

                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{URL:: asset('assets/images/icon/avatar-01.jpg')}}" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{URL:: asset('assets/images/icon/avatar-01.jpg')}}" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>

                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
          </div>
       <!--END MENU SIDEBAR-->


  @yield('content')



  <div class="row">
  <div class="col-md-12">
        <div class="copyright">
            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
        </div>
   </div>
   </div>

 <!-- Jquery JS-->
 <script src="{{URL:: asset('assets/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{URL:: asset('assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{URL:: asset('assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{URL:: asset('assets/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{URL:: asset('assets/vendor/wow/wow.min.js')}}"></script>
    <script src="{{URL:: asset('assets/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{URL:: asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{URL:: asset('assets/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{URL:: asset('assets/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{URL:: asset('assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{URL:: asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{URL:: asset('assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{URL:: asset('assets/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{URL:: asset('assets/js/main.js')}}"></script>
</html>
