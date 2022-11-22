@extends('Client.header-footer')
@section('content')

<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-8">
                <h1>Welcome to <span>Ganesh Fashion</span></h1>
                <h2>Delivering great cloth !</h2>

                <div class="btns">
                    <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>

                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
                <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="venobox play-btn" data-vbtype="video" data-autoplay="true"></a>
            </div>

        </div>
    </div>
</section>

<main id="main">
    <section id="menu" class="menu section-bg">
        <div class="container">
            <?php
            $brandss = request()->get('brands');
            ?>
            <form action="" method="GET">
                <b>
                    <h1> <label>Category Name</label></h1>
                </b>
                <div style=" color: black;">
                    @foreach($categorys as $cat)
                    <input type="checkbox" name="brands[]" value="{{ $cat->name }}" {{ $cat->name == $brandss ? 'checked' : ''}}>
                    {{$cat->name}} <br>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>

            <div class="section-title">
                <p>Check Our Products</p>
            </div>

            <div style="float: right;">
                {{ csrf_field() }}
                <b><label>Search:</label></b> &nbsp;
                <span class="input-group-btn mr-5 mt-1">
                    <input type="text" name="search" id="search" value="{{$search}}" placeholder="Search Colors">
                    <button type="submit" class="btn btn-primary">Search</button>
                </span>
            </div>

            <div class="row tm-gallery">
                <div id="tm-gallery-page" class="tm-gallery-page">

                    @foreach($data as $ans)
                    <article class=" col-md-4 col-sm-6 col-12 tm-gallery-item" style=" max-width: 33.333%;     padding-bottom: 20px;">
                        <a href="{{url('productdetail')}}/{{$ans->id}}/{{$ans->name}}">
                            @php $a = explode(",",$ans->img); @endphp

                            @foreach($a as $b)
                            <img src="{{ url('item_img') }}/{{ $b }}" alt="image1" height="250px" width="250px" /></a>@endforeach
                        <figcaption>
                            <h4 class="tm-gallery-title">Brand:{{$ans->brand}}</h4>
                            <hr>
                            <h2 class="tm-gallery-title">{{$ans->title}}</h2>
                            <p class="tm-gallery-description"> {!! nl2br($ans->descripation) !!}</p>
                            <br>
                            <p class="tm-gallery-price">Price: {{$ans->price}}</p>
                        </figcaption>
                        <br>
                        <a href="{{url ('addtocart')}}/{{$ans->id}}"><button type="submit" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add To Cart</button></a>

                    </article>
                    @endforeach





                <!-- <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item" style=" max-width: 33.333%;">
        <a href="itemdetail/'.$items->id.'">
      <img src="{{URL::asset('assets/client/img/about.jpg')}}" alt="image1" height="250px" width="250px" /></a>
        <figcaption>
          <h4 class="tm-gallery-title">T-shirt</h4>
          <p class="tm-gallery-description">adidas-Flixible for stock avalable .</p>
          <p class="tm-gallery-price">Rs.60</p>
        </figcaption>
        <a  href ="addtocart/'.$items->id.'"><button  type="submit" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add To Cart</button></a>
      </article>

      <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item" style=" max-width: 33.333%;">
        <a href="itemdetail/'.$items->id.'">
      <img src="{{URL::asset('assets/client/img/about.jpg')}}" alt="image1" height="250px" width="250px" /></a>
        <figcaption>
          <h4 class="tm-gallery-title">T-shirt</h4>
          <p class="tm-gallery-description">adidas-Flixible for stock avalable .</p>
          <p class="tm-gallery-price">Rs.60</p>
        </figcaption>
        <a  href ="addtocart/'.$items->id.'"><button  type="submit" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add To Cart</button></a>
      </article> -->
            </div>

        </div>
    </section>
</main>
@endsection
