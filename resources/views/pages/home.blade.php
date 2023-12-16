@extends('layouts.app')




@section('content')

<div class="page-wrapper">
    <div class="content">


        <div class="container">
            <h1>Dashboard</h1>
    
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Today's Sales</h5>
                            <p class="card-text">$1000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Yesterday's Sales</h5>
                            <p class="card-text">$800</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">This Month's Sales</h5>
                            <p class="card-text">$5000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Last Month's Sales</h5>
                            <p class="card-text">$4500</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>



@endsection