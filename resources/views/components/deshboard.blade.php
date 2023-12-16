@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>

        <div class="row">
            <div class="col-md-3">
                <div class="card bg-danger text-white">
                    <div class="card-body" >
                        <h5 class="card-title">Today's Sales</h5>
                        <p class="card-text">BDT 1000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title">Yesterday's Sales</h5>
                        <p class="card-text">BDT 800</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title">This Month's Sales</h5>
                        <p class="card-text">BDT 5000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-warning text-dark">
                    <div class="card-body bg-warning">
                        <h5 class="card-title">Last Month's Sales</h5>
                        <p class="card-text">BDT 4500</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
