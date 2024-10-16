<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        $data = $request->validate([
          'name' => 'required',
          'qty'  => 'required|numeric',
          'price' => 'required|decimal:0,2',
          'description' => 'nullable'
        ]);

        $newProduct = Product::create($data);
     //After Submitting The Data into DataBase we will redirect to index page
        return redirect(route('product.index'));

    }
    public function edit(Product $product){
        dd($product);
    }
}
