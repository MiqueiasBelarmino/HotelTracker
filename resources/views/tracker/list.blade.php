@extends('includes.template')

@section('title', 'List')

@section('content')
<div class="container-fluid">

    <div class="row mt-2 d-flex justify-content-center">
        <div class="col-12 d-flex justify-content-center">
            <h1>Hotels</h1>
        </div>
    </div>

    <div class="row mt-2 d-flex justify-content-center">
        <div class="col-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">Hotel Lisbon, 1.7 KM, 23.56 EUR</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2 d-flex justify-content-center">
        <div class="col-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">Hotel London, 8 KM, 11.56 EUR</p>
                </div>
            </div>
        </div>
    </div>

</div>
@stop