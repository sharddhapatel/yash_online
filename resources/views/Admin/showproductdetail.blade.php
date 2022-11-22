@extends('Admin.header-footer')
@section('content')
<style>
    hr {
        border: 0;
        border-top: 1px solid #c3c0c0;
        margin: 20px 0;
    }
</style>

<!-- modal scroll -->
<div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                @foreach($data as $ans)
                <h4 class="modal-title" id="scrollmodalLabel">Brand:{{$ans->brand}}</h4>
                <h2 class="modal-title" id="scrollmodalLabel">Title:{{$ans->title}}</h2>
                <h4>Price:{{$ans->price}}</h4>
                <hr>

                <p>Product Detail:<br>
                    {!! nl2br($ans->descripation) !!}</p>

                    @php $a = explode(",",$ans->img); @endphp
                                @foreach($a as $b)
                                <img src="{{ url('item_img') }}/{{ $b }}" alt="" class="img-fluid">
                                @endforeach

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @endforeach
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal scroll -->
@endsection
