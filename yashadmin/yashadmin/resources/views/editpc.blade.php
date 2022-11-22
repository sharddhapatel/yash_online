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

                            <form class="form-horizontal" action="{{ url('editcatag')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group row">

                                <input type="hidden" name="id" id="id" value="{{ $data->id }}">
                                    <label>Category Name</label><br>
                                    <input type="text" class="form-control" value="{{$data->cname}}" placeholder="product Name" name="cname" id="cname">


                                </div>
                                <div class="form-group row">
                                    <label>product brand</label>
                                    <input type="text" class="form-control" value="{{$data->brand}}" placeholder="product brand" name="brand" id="brand">

                                    </div>
                                    <div class="form-group row">
                                    <label>title</label>
                                    <input type="text" class="form-control" value="{{$data->title}}" placeholder="title" name="title" id="title">

                                    </div>
                                    <div class="form-group row">
                                    <label>descripation</label>
                                    <textarea class="form-control" name="descripation" id="descripation" rows="2">{{$data->descripation}}</textarea>

                                </div>
                                <div class="form-group row">
                                    <label>price</label>
                                    <input type="text" class="form-control" value="{{$data->price}}" placeholder="price" name="price" id="price">
                                    <p id="price_validation"></p>
                                </div>
                                <div class="form-group row">
                                    <label>images</lable><br>
                                    <input type="hidden" name="oldimg" id="oldimg" value="{{ $data->img }}">
                                </div>

                                <img id="blah" src="{{ url('item_img') }}/{{ $data->img }}" alt="" height="100" width="100" />
                        <br>
            <input class="file" data-preview-file-type="text" type = 'file' id="imgInp" name="img[]" value ="{{$data->img}}" />



                                <br><br>

                                <div class="form-group row">
                                    <div class="offset-sm-0 col-sm-10">
                                        <button type="submit" class="btn btn-success">Save Category</button> <button type="reset" class="btn btn-danger">edit</button>
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
