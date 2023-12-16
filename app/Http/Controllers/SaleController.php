<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
       
    public function create()
    {
        $products = DB::table('products')->get();
        return view('components.salecreate', compact('products'));
    }

    public function store(Request $request)
    {
        $product = DB::table('products')->find($request->product_id);

      
        if (!$product) {
            return redirect()->route('sales_create')->with('error', 'Invalid product.');
        }

  
        if ($product->quantity < $request->quantity) {
            return redirect()->route('sales_create')->with('error', 'Insufficient stock.');
        }

       
        $totalAmount = $product->price * $request->quantity;

  
        DB::table('sales')->insert([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'total_amount' => $totalAmount,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    
        DB::table('products')
            ->where('id', $request->product_id)
            ->decrement('quantity', $request->quantity);

        return redirect()->route('sales_index')->with('success', 'Sale recorded successfully.');
    }

    public function index()
    {
    
        $sales = DB::table('sales')
            ->join('products', 'sales.product_id', '=', 'products.id')
            ->select('sales.*', 'products.name as product_name')
            ->get();

        return view('components.saleindex', compact('sales'));
    }

}
