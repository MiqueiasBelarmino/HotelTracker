@extends('includes.template')

@section('title', 'Search')

@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center ">

        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card border-0 shadow my-5">
                <div class="card-body p-sm-4">
                    <h5 class="card-title text-center">Search for nearby hotels</h5>
                    <hr class="my-4">
                    <form action="{{ route('search.submit')}}" method="POST">
                        {{@csrf_field()}}
                        <div class="row">
                            <div style="width: 60%;">
                                Order by:&nbsp;
                                <input class="form-check-input" type="radio" name="order" id="proximity" value="proximity" checked>
                                <label class="form-check-label" for="proximity">
                                    Proximity
                                </label>
                                <input class="form-check-input" type="radio" name="order" id="price" value="price">
                                <label class="form-check-label" for="price">
                                    Price
                                </label>
                            </div>
                            <div style="width: 40%;">
                                <input class="form-check-input" type="radio" name="type" id="asc" value="asc" checked>
                                <label class="form-check-label" for="asc">
                                    A-Z
                                </label>
                                <input class="form-check-input" type="radio" name="type" id="desc" value="desc">
                                <label class="form-check-label" for="desc">
                                    Z-A
                                </label>
                            </div>
                        </div>

                        <!-- <label class=" mt-4" for="location">Location</label> -->
                        <div class="mb-3 mt-3">
                            <input type="text" class="form-control" name="location" id="location" placeholder="Location" required>
                        </div>
                        <button class="btn btn-primary btn-login text-uppercase fw-bold" style="width: 100%; font-weight:bolder;" type="submit">
                            Search
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@stop