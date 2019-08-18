<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
  /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
  $categories = Category::all();
  $products = Product::orderBy('name')->get();
  return view('admin.products.index', compact('products','categories'));
}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
  $categories = Category::all();
  return view('admin.products.create',compact('categories'));
}

/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
  $this->validate($request, [
      "name" => 'required|unique:products',
      "description"  => 'required',
      "category_id" => 'required',
      "price" => 'required|integer',
      "discount" => 'required',
      "stock" => "required|integer",
      "image" => "required|image",
  ]);

  $product = new Product();

  $path = $request->file('image')->store('public');
  $fileName = basename($path);

  if ($request["discount"] != 1) {
    $descuento = $request["discount"] * $request["price"];
    $precioFinal =$request["price"] - $descuento;
  } else {
    $precioFinal = $request["price"];
  }

  $product->image = $fileName;
  $product->name = $request["name"];
  $product->description = $request["description"];
  $product->category_id = $request["category_id"];
  $product->price = $request["price"];
  $product->discount = $request["discount"];
  $product->stock = $request["stock"];
  $product->final_price = $precioFinal;

  $product->save();


  return redirect()->route('products.show',['id' => $product->id]);
}

/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
  $product = Product::find($id);
  return view('admin.products.show',compact('product'));
}

/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{

  $categories = Category::all();

  $product = Product::find($id);
  return view('admin.products.edit',compact('product','categories'));
}

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{

  $this->validate($request, [
      "name" => 'required',
      "description"  => 'required',
      "category_id" => 'required',
      "price" => 'required|integer',
      "discount" => 'required',
      "stock" => "required|integer",
      "image" => "image|",
  ]);
  $product = Product::find($id);

  // $path = $request->file('image')->store('public');
  // $fileName = basename($path);

  if ($request["discount"] != 1) {
    $descuento = $request->input("discount") * $request->input("price");
    $precioFinal =$request->input("price") - $descuento;
  } else {
    $precioFinal = $request->input("price");
  }

  // $product->image = $request->input($fileName);
  $product->name = $request->input("name");
  $product->description = $request->input("description");
  $product->category_id = $request->input("category_id");
  $product->price = $request->input("price");
  $product->discount = $request->input("discount");
  $product->stock = $request->input("stock");
  $product->final_price = $precioFinal;

  $path = $request->file('image');

  $product->save();


  return redirect()->route('products.show',['id' => $id]);
}

/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
  $product = Product::find($id);
  $product->delete();

  return redirect()->route("products.index");
}

}
