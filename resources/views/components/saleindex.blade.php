<!-- resources/views/sales/index.blade.php -->

@extends('layouts.app')

@section('saleindex_content')

<div class="page-wrapper">
    <div class="create_content">

        <br>

    <div class="container">
        <h1>Sale Transaction History</h1>

        <table class="table bg-success">
            <thead>
                <tr> 
                    <th style="border: 2px solid #000000; padding: 10px; text-align:center" >ID</th>
                    <th style="border: 2px solid #000000; padding: 10px; text-align:center" ">Product Name</th>
                    <th style="border: 2px solid #000000; padding: 10px; text-align:center" ">Quantity</th>
                    <th style="border: 2px solid #000000; padding: 10px; text-align:center" ">Total Amount</th>
                    <th style="border: 2px solid #000000; padding: 10px; text-align:center" ">Date</th>
                </tr>
            </thead>
            <tbody style="border: 1px solid #000000; padding: 10px;">
                @forelse ($sales as $sale)
                    <tr>
                        <td style="border: 1px solid #000000; padding: 10px; text-align:center" ">{{ $sale->id }}</td>
                        <td style="border: 1px solid #000000; padding: 10px; text-align:center" ">{{ $sale->product_name }}</td>
                        <td style="border: 1px solid #000000; padding: 10px; text-align:center" ">{{ $sale->quantity }}</td>
                        <td style="border: 1px solid #000000; padding: 10px; text-align:center" ">BDT {{ $sale->total_amount }}</td>
                        <td style="border: 1px solid #000000; padding: 10px; text-align:center" ">{{ $sale->created_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No sale transactions recorded yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    </div>