@extends('Admin.header-footer')
@section('content')
<html>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <!-- <div style="float: left;">
                        <button type="submit" class="btn btn-primary"><a href="{{ url('showpc') }}" style="color: white;">Show product</a></button>
                    </div> -->
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

                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label>Product Name</label><br>
                                    <select id="productid" name="productid" class="form-control">
                                        <option selected disabled>select product..</option>
                                        @foreach($p as $product)
                                        <option value="{{$product->id}}">{{$product->id}}</option>@endforeach

                                    </select>

                                </div>
                                <div class="form-group row">
                                    <label>Product Color</label>
                                    <input type="text" class="form-control" placeholder="product color" name="color" id="color">

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


@endsection
