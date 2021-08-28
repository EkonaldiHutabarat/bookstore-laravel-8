<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function product(){
        return view('frontend/product');
    }
    public function productOrder(Request $request){
        $request->validate([
            'name_product' => 'required|min:10|max:150',
            'shipping_address' =>'required|min:10|max:150',
            'price' => 'required|integer',
        ]);
        // Product::create($request->all());
        // return view('frontend/sukses_orders_product');

        $product = new Product;
        $product->name_product = ($request->name_product);
        $product->shipping_address = ($request->shipping_address);
        $product->price = ($request->price);
        $product->save();

        return view('frontend/sukses_orders_product');

    }
}
