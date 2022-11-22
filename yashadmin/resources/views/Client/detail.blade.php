@extends('Client.header-footer')
@section('content')
<main id="main">
    <section id="specials" class="specials">
        <div class="container" data-aos="fade-up">
            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">
                    <br><br><br>
                    <table id="cart" class="table table-hover table-condensed">

    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th >Remove</th>
        </tr>
    </thead>

    <tbody>
        @php $total =0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id =>$d)
                @php $total += $d['price'] * $d['quantity'] @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs">
                                <img src="{{ url('item_img') }}" alt="" class="img-fluid" style="width: 500px;">
                            </div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $d['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $d['price'] }}</td>
                    <td data-th="Quantity">

                        <input type="number" value="{{ $d['quantity'] }}" id="quantity" data-id="{{$id}}" name="quantity" type="number" class="form-control quantity update-cart" min="1"/>
                    </td>
                    <td data-th="Subtotal"id="" subtotalclass="text-center" data-id={{$id}}>${{ $d['price'] * $d['quantity'] }}</td>

                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id={{ $id }}><i class="fa fa-trash-o">Remove</i></button>
                    </td>
                </tr>
            @endforeach
        @endif
        <!-- <hr>
        <div class="">
                @foreach($similar as $p)
                <div class="col-lg-4 text-center ">

                    @php $a = explode(",",$a->img); @endphp
                    @foreach($a as $b)
                    <a href="{{ url('detail')}}/{{$p->id}}/{{$s->cname}}">
                        <img src="{{ url('item_img') }}/{{ $b }}" alt="" class="img-fluid" style="width: 150px;">
                    </a>
                    @endforeach
                </div>
                <div class="col-lg-8 details order-2 order-lg-1" style="padding-left:50px;">

                    <h4>
                        <p class="font-italic">Brand: {{$p->brand}}</p>
                    </h4>

                    <h2>{{$p->title}}</h2>

                    <h4><strong>Price:</strong> {{ $p->price }}</h4>

                </div>
            </div>
            <hr>
            @endforeach
        </div> -->
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <a href="{{ url('strip') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i>Payment</a>
                <button class="btn btn-success">Checkout</button>
            </td>
        </tr>
    </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">

$(document).on("click",".update-cart",function(e){
   e.preventDefault();
   var ele = $(this);

     // alert(ele.attr("data-id"));
    $.ajax({
    // headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
    url:  "{{ url('update-cart') }}",
    type: 'get',
    data: {
        id: ele.attr("data-id"),
        quantity :ele.val()},
      success: function (response) {
        window.location.reload();
     }
  });
});


    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: "{{  url('remove-from-cart') }}",
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {

                    window.location.reload();
                }
            });
        }
    });

</script>


@endsection
