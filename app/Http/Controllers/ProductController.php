<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.form');
    }

    public function countCalculation(Request $request)
    {
        $description = $request->description;
        $price = $request->price;
        $discount_percent = $request->discount_percent;

        $discount_amount = $price * $discount_percent * 0.1;
        $discount_price = $price-$discount_amount;

        return view('product.result', compact('description','price','discount_percent','discount_amount','discount_price'));
    }
}


