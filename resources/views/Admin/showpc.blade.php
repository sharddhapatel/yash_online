@extends('Admin.header-footer')
@section('content')
<html>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">

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

                    <p style="font-size:24px"><strong>product</strong></p>
                    <br>
                    <div style="float: right;">
                        <button type="submit" class="btn btn-primary"><a href="{{ url('product') }}" style="color: white;">Add Product</a></button>
                    </div>
                    <br>
                    <form class="form-horizontal" action="" method="get">
                        <div style="float: left;">
                            {{ csrf_field() }}
                            <b><label>Search:</label></b> &nbsp;
                            <input type="text" name="search" id="search" value="{{$search}}" onkeyup="myFunction()" placeholder="Search product">
                        </div>

                    </form>
                    <br><br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="table-responsive m-b-20">
                                    <table class="table table-borderless table-data3" id="myTable">
                                        <thead>
                                            <tr>
                                                <td>id</td>
                                                <td>Category Name</td>
                                                <td>productbrand</td>
                                                <td>title</td>
                                                <td>price</td>
                                                <td>img</td>
                                                <td>Edit</td>
                                                <td>Delete</td>
                                            </tr>
                                        </thead>
                                        <tr></tr>

                                        @foreach($data as $ans)
                                        <tr>

                                            <!--FETCHING DATA FROM EACH
                              ROW OF EVERY COLUMN-->
                                            <td>{{$ans->id}}</td>
                                            <td>{{$ans->cname}}</td>
                                            <td>{{$ans->brand}}</td>
                                            <td>{{$ans->title}}</td>
                                            <td>{{$ans->price}}</td>
                                            <td>
                                                <!-- <a href="{{ url('showproductdetail') }}/{{ $ans->id }}"> -->
                                                @php $a =explode(",",$ans->img);@endphp
                                                <img class="thumbnail no-margin" data-toggle="modal" data-target="#scrollmodal{!! $ans->id !!}" src=" {{url('item_img')}}/{{ $a[0]}}" height="80px" width="80px">
                                            </td>
                                            <td><a href="editcatag/{{ $ans->id}}">Edit</a></td>
                                            <td><a href="deleteproduct/{{ $ans->id}}">Delete</a></td>
                                            <div class="modal fade" id="scrollmodal{!! $ans->id !!}" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                                                <br><br>

                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3 class="modal-title" id="scrollmodalLabel">View Product Detail</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <p><b><i>Product Brand:</i></b> {{$ans->brand}}</p><br>
                                                            <p><b>Title:</b> {{$ans->title}}</p><br>
                                                            <p><b>Price:</b>{{$ans->price}}</p><br>

                                                            @php $a = explode(",",$ans->img); @endphp
                                                            @foreach($a as $b)
                                                            <img src="{{ url('item_img') }}/{{ $b }}" alt="" class="img-fluid">
                                                            @endforeach
                                                            <br>

                                                            <p><b>Product Detail:</b><br>
                                                                {!! nl2br($ans->descripation) !!}<br></p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                        @endforeach
                                    </table>

                                </div>
                                {{$data->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
@endsection
