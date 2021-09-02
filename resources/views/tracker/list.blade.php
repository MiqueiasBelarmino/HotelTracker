@extends('includes.template')

@section('title', 'List')

@section('content')
<div class="container-fluid">

    <div class="row mt-2 d-flex justify-content-center">
        <div class="col-12 d-flex justify-content-center">
            <h1>Hotels</h1>
        </div>
    </div>

    @foreach($hotels as $h)
    <div class="row mt-2 mb-2 d-flex justify-content-center">
        <div class="col-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-body  d-flex justify-content-center">
                    <h5 class="card-title"></h5>
                    <p class="card-text">{{$h['name']}}, {{number_format($h['distance'], 2, '.', '')}} KM, {{$h['price']}} EUR</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
@stop