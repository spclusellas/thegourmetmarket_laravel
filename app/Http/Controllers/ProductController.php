<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Cart;
use Session;

class ProductController extends Controller
{
  public function index(){
    $categories = Category::all();
    $products = Product::orderBy('name')->paginate(6);
    return view('products.indexProducto', compact('products','categories'));
  }

    public function indexOrganico()
    {
        $products = Product::where('category_id','=','1')->paginate(6);
        return view('products.indexProducto')->with("products", $products);
    }
    public function indexVinos()
    {
        $products = Product::where('category_id','=','2')->paginate(6);
        return view('products.indexProducto')->with("products", $products);
    }
    public function indexAlacena()
    {
        $products = Product::where('category_id','=','3')->paginate(6);
        return view('products.indexProducto')->with("products", $products);
      }
    public function indexSnacks()
    {
        $products = Product::where('category_id','=','4')->paginate(6);
        return view('products.indexProducto')->with("products", $products);
    }
    public function indexHogar()
    {
        $products = Product::where('category_id','=','5')->paginate(6);
        return view('products.indexProducto')->with("products", $products);
    }
    public function indexSale()
    {
        $products = Product::where('discount','!=','1')->paginate(6);
        return view('products.indexProducto')->with("products", $products);
    }
    public function indexNovedades()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(6);
        return view('products.indexProducto')->with("products", $products);
    }


    public function show($id)
    {
      $product = Product::find($id);
      return view('products.detalleProducto',compact('product'));
    }
  public function search(Request $request)
  {
      $input = $request->input('busqueda');
      $products = Product::where('name','LIKE','%'.$input.'%')->paginate(8);
      return view('products.indexProducto')->with("products", $products);
  }
  // public function addToCart($id){
  //   $product = Product::find($id);
  //   $carritoViejo = Session::has('cart') ? Session::get('cart') : null;
  //   $carrito = new Cart($carritoViejo);
  //   $carrito->agregarItem($product, $product->id);
  //
  //   Session::put('carrito', $carrito);
  //   // dd(Session::get('carrito'));
  //   return view('products.carrito', compact('carrito'));
  // }
  //
  // public function getCarrito(){
  //   if (!Session::has('cart')) {
  //     return view('products.carrito');
  //   }
  //   $carritoViejo = Session::get('cart');
  //   $carrito = new Cart($carritoViejo);
  //   return view('products.carrito', [
  //     'products' => $cart->items,
  //     'precioTotal' => $cart->precioTotal,
  //   ]);
  // }
}
