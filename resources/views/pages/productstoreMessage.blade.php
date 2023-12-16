@extends('layouts.app')

@section('productstoreMassage_content')



<div class="page-wrapper">
    <div class="create_content">
  
        <br>

        <div class="container">
            <h1>Product Creating</h1>
    
            <div class="alert alert-success mt-3">
                <p>Your product has been created successfully.</p>
            </div>
            <br>
            <h4><a href="{{ route('create_product') }}">agian create product?</a></h4>

</div>