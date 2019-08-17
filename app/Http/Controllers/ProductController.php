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

    public function indexOrganico()
    {
        $products = Product::where('category_id','=','1')->paginate(8);
        return view('products.indexProducto')->with("products", $products);
    }
    public function indexVinos()
    {
        $products = Product::where('category_id','=','2')->paginate(8);
        return view('products.indexProducto')->with("products", $products);
    }
    public function indexAlacena()
    {
        $products = Product::where('category_id','=','3')->paginate(8);
        return view('products.indexProducto')->with("products", $products);
      }
    public function indexSnacks()
    {
        $products = Product::where('category_id','=','4')->paginate(8);
        return view('products.indexProducto')->with("products", $products);
    }
    public function indexHogar()
    {
        $products = Product::where('category_id','=','5')->paginate(8);
        return view('products.indexProducto')->with("products", $products);
    }
    public function show($id)
    {
      $product = Product::find($id);
      return view('products.detalleProducto',compact('product'));
    }
  // public function search(Request $request)
  // {
  //     $input = $request->input('busqueda');
  //     $products = Product::where('name','LIKE','%'.$input.'%')->paginate(8);
  //     return view('products.index')->with("products", $products);
  // }
}
