
@extends('layouts.app')

@section('salecreate_content')



<div class="page-wrapper">
    <div class="create_content">
 

      
<br>

        <div class="container">
            <h1>Create Sale</h1>
    
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
    
            <form action="{{ route('sales_store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="product_id">Select Product</label>
                    <select name="product_id" class="form-control" style="border: 1px solid #ccc; padding: 10px;">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" class="form-control" style="border: 1px solid #ccc; padding: 10px;" required>
                </div>
                <button type="submit" class="btn btn-primary">Record Sale</button>
            </form>
        </div>
        </div>






</div>

@endsection