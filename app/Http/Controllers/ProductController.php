<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function products(){
        $product = Product::all();
        return view('products.index', ['products' => $product]);
    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
        
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'product_name' => "required|string",
            'price' => "required|regex:/^\d+(\.\d{1,2})?$/",
            'user_id' => "required|integer",
            'qty' => "required|numeric",
            'description' => "required|string",
        ]);
        $createProduct = Product::create($data);
        return redirect(route('products.index'));
    }

    public function update(Product $product, Request $request){
    $data = $request->validate([
        'product_name' => "required|string",
        'price' => "required|regex:/^\d+(\.\d{1,2})?$/",
        'qty' => "required|numeric",
        'description' => "required|string",
    ]);

    $product->update($data);
    
    return redirect(route('products.index'))->with('success', 'Product Edit Successfully');
}

    public function delete(Product $product){
        $product->delete();
        return redirect(route('products.index'))->with('success', 'Product Edit Successfully' );
    }
}
