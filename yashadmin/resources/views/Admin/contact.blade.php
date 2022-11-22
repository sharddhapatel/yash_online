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
    <title>Login</title>

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

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{URL:: asset('assets/images/icon/logo.png')}}" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                        @if(Session::has('message'))
                                <div class="alert alert-success">
                                    <i class="fa-lg fa fa-warning"></i>
                                    {!! session('message') !!}
                                </div>
                                @elseif(Session::has('error'))
                                <div class="alert alert-danger">
                                    <i class="fa-lg fa fa-warning"></i>
                                    {!! session('error') !!}
                                </div>
                                @endif
                                <form action="{{ url('insertcall')}}" method="post" role="form" class="php-email-form">
                    {{ csrf_field() }}

                        <div class="form-group row">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name" id="name">

                        </div>

                        <div class="form-group row">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Email " name="email" id="email">

                        </div>
                        <div class="form-group row">
                            <label>Phoneno</label>
                            <input type="text" class="form-control" placeholder="Phoneno" name="phoneno" id="phoneno">
                            <p id="price_validation"></p>

                        </div>

                        <div class="form-group row">
                            <label>Message</label>
                            <textarea class="form-control" name="message" id="message" rows="2"></textarea>

                        </div>


                        <div class="form-group row">
                            <div class="offset-sm-0 col-sm-10">
                                <button type="submit" class="btn btn-success">Save Category</button> <button type="reset" class="btn btn-danger">Cancel</button>
                            </div>

                </form>
                        </div>
                    </div>
                </div>
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
</body>

</html>
