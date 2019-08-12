<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
  public function index(){
    $categories = Category::all();
    $products = Product::orderBy('name')->get();
    return view('products.indexProducto', compact('products','categories'));
  }
  // public function show($id) {
  //     return view('products.show', ['product' => Product::findOrFail($id)]);
  // }
  // public function search(Request $request)
  // {
  //     $input = $request->input('busqueda');
  //     $products = Product::where('name','LIKE','%'.$input.'%')->paginate(8);
  //     return view('products.index')->with("products", $products);
  // }
}
