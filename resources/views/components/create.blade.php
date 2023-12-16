<!-- resources/views/products/create.blade.php -->

@extends('layouts.app')

@section('create_product_content')



<div class="page-wrapper">
    <div class="create_content">



        <div class="container">
            <h1>Create Product</h1>
    
            <form action="{{ route('products_store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

</div>
@endsection
