@extends('Admin.header-footer')
@section('content')
<html>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">

                    <div style="float: left;">
                        <button type="submit" class="btn btn-primary"><a href="{{ url('showpc') }}" style="color: white;">Show product</a></button>
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

                            <form class="form-horizontal" action="{{ url('insertpc')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label>Category Name</label><br>
                                    <select id="cname" name="cname" class="form-control">
                                        <option selected disabled>select catagory..</option>
                                        @foreach($data as $catagory)
                                        <option value="{{$catagory->name}}">{{$catagory->name}}</option>@endforeach

                                    </select>

                                </div>
                                <div class="form-group row">
                                    <label>Product Brand</label>
                                    <input type="text" class="form-control" placeholder="product brand" name="brand" id="brand">

                                </div>

                                <div class="form-group row">
                                    <label>Product Title</label>
                                    <input type="text" class="form-control" placeholder="product title" name="title" id="title">

                                </div>
                                <div class="form-group row">
                                    <label>price</label>
                                    <input type="text" class="form-control" placeholder="price" name="price" id="price">
                                    <p id="price_validation"></p>

                                </div>

                                <div class="form-group row">
                                    <label>descripation</label>
                                    <textarea class="form-control" name="descripation" id="description" rows="2"></textarea>

                                </div>


                                <div class="form-group row">
                                    <label>images</lable><br>
                                        <input type="file" name="img[]" id="fileToUpload">
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
</body>

</html>


@endsection
