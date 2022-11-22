@extends('Client.header-footer')
@section('content')

<style>
    hr {
        border: 0;
        border-top: 1px solid #c3c0c0;
        margin: 20px 0;
    }
</style>
<!-- <section id="hero" class="d-flex align-items-center">
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
  </section> -->
<br><br><br><br>
<main id="main">

    <section id="specials" class="specials">
        <div class="container" data-aos="fade-up">

            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-5">
                        <div class="row" style="align-items: center;">

                            <div class="col-lg-4 text-center ">

                                @php $a = explode(",",$ans->img); @endphp
                                @foreach($a as $b)
                                <img src="{{ url('item_img') }}/{{ $b }}" alt="" class="img-fluid" style="width: 500px;">
                                @endforeach
                            </div>
                            <div class="col-lg-8 details order-2 order-lg-1" style="padding-left:50px;">

                                <h4>
                                    <p class="font-italic">Brand:

                                     {{$ans->brand}}</p>
                                </h4>

                                <h2>{{$ans->title}}</h2>
                                <hr>

                                <h4><strong>Price:</strong> {{ $ans->price }}</h4>

                                <p>Product Detail:
                                    {!! nl2br($ans->descripation) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="">
                @foreach($similar as $s)
                <div class="col-lg-4 text-center ">

                    @php $a = explode(",",$s->img); @endphp
                    @foreach($a as $b)
                    <a href="{{ url('productdetail')}}/{{$s->id}}/{{$s->cname}}">
                        <img src="{{ url('item_img') }}/{{ $b }}" alt="" class="img-fluid" style="width: 150px;">
                    </a>
                    @endforeach
                </div>
                <div class="col-lg-8 details order-2 order-lg-1" style="padding-left:50px;">

                    <h4>
                        <p class="font-italic">Brand: {{$s->brand}}</p>
                    </h4>

                    <h2>{{$s->title}}</h2>

                    <h4><strong>Price:</strong> {{ $s->price }}</h4>

                </div>
            </div>
            <hr>
            @endforeach
        </div>
    </section>
</main>
@endsection
