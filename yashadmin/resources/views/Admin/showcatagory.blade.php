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


                    <p style="font-size:24px"><strong>Category</strong></p>
                    <br>
                    <div style="float: right;">
                        <button type="submit" class="btn btn-primary"><a href="{{ url('catagory') }}" style="color: white;">Add Category</a></button>
                    </div>
                    <br>
                    <form class="form-horizontal" action="" method="get">
                        <div style="float: left;">
                            {{ csrf_field() }}
                            <b><label>Search:</label></b> &nbsp;
                            <input type="text" name="search" id="search" value="{{$search}}" onkeyup="myFunction()" placeholder="Search Category">

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
                                                <td>Edit</td>
                                                <td>Delete</td>
                                            </tr>
                                        </thead>


                                        @foreach($data as $ans)
                                        <tr>

                                            <!--FETCHING DATA FROM EACH
                                            ROW OF EVERY COLUMN-->
                                            <td>{{$ans->id}}</td>
                                            <td>{{$ans->name}}</td>
                                            <td><a href="editprocess/{{ $ans->id}}">Edit</a></td>
                                            <td><a href="deletecatagory/{{ $ans->id}}">Delete</a></td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                                {{$data->links()}}
                            </div>
                        </div>
                    </div>

</html>

@endsection
