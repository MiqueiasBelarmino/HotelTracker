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
                    <form action="">
                        <label for="city">City</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="city" id="city" required>
                        </div>

                        <label for="state">State</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="state" id="state" required>
                        </div>

                        <label for="country">Country</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="country" id="country" required>
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