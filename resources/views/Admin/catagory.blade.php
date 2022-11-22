@extends('Admin.header-footer')
@section('content')
<html>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">

                    <div style="float: left;">
                        <button type="submit" class="btn btn-primary"><a href="{{ url('showcatagory') }}" style="color: white;">Show Category</a></button>
                    </div>
                    <br><br>
                    <div class="login-content">
                        <!-- <div class="login-logo">
                            <h4>Category</h4>
                        </div> -->
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

                            <form class="form-horizontal" action="{{ url('insertcategory')}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">

                                    <label>Category Name</label>
                                    <input type="text" class="form-control" placeholder=" Category Name" onkeypress="return checkNum(event)" name="cname" id="cname">
                                    <p id="cname_validation"></p>
                                </div>
                                <br><br>
                                <div class="form-group row">
                                    <div class="offset-sm-0 col-sm-10">
                                        <button type="submit" class="btn btn-success">Save Category</button> <button type="reset" class="btn btn-danger">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</html>
@endsection
