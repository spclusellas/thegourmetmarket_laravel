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
      "stock" => "required|integer",
      "image" => "image|",
  ]);

  $product = new Product();

  $path = $request->file('image')->store('public');
  $fileName = basename($path);

  $product->image = $fileName;
  $product->name = $request["name"];
  $product->description = $request["description"];
  $product->category_id = $request["category_id"];
  $product->price = $request["price"];
  $product->stock = $request["stock"];

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
      "stock" => "required|integer",
      // "imageLoc" => "image|dimensions:min_width=340,max_width=366,min_height=440,max_height=466",
      // "imageLoc2" => "image|dimensions:min_width=340,max_width=366,min_height=440,max_height=466",
  ]);

  $product = Product::find($id);

  $product->name = $request->input("name");
  $product->description = $request->input("description");
  $product->category_id = $request->input("category_id");
  $product->price = $request->input("price");
  $product->stock = $request->input("stock");

  // $path = $request->file('imageLoc');
  // $path2 = $request->file('imageLoc2');
  //
  // $extension = $request->file('imageLoc')->extension();
  // $extension2 = $request->file('imageLoc2')->extension();
  //
  //
  // if (!is_null($path)) {
  //     $path->storeAs('public/products', '1'.$request->user()->id.'.'.$extension);
  //     $product->imageLoc = 'storage/products/1'.$request->user()->id.'.'.$extension2;
  // }
  // if (!is_null($path2)) {
  //     $path2->storeAs('public/products', '2'.$request->user()->id);
  //     $product->imageLoc2 = 'storage/products/2'.$request->user()->id;
  // }


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
