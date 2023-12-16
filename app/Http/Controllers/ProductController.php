<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function Create_product(){
        return view('components.create');
    }
    public function productStoreMessage(){
        return view('pages.productstoreMessage');
    }

    public function store(Request $request)
    {
        DB::table('products')->insert([
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('products_index');
    }



}
