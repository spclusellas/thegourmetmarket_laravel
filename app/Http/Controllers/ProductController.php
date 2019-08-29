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
    $categ = "Todos";
    $products = Product::orderBy('name')->paginate(6);
    return view('products.indexProducto', compact('products','categories', 'categ'));
  }

    public function indexOrganico()
    {
        $categories = Category::all();
        $categ = 'Orgánicos';
        $products = Product::where('category_id','=','1')->paginate(6);
        return view('products.indexProducto', compact('products','categories', 'categ'));
    }
    public function indexVinos()
    {
        $categories = Category::all();
        $categ = "Vinos";
        $products = Product::where('category_id','=','2')->paginate(6);
        return view('products.indexProducto', compact('products','categories', 'categ'));
    }
    public function indexAlacena()
    {
        $categories = Category::all();
        $categ = "Alacena";
        $products = Product::where('category_id','=','3')->paginate(6);
        return view('products.indexProducto', compact('products','categories', 'categ'));
      }
    public function indexSnacks()
    {
        $categories = Category::all();
        $categ = "Snacks";
        $products = Product::where('category_id','=','4')->paginate(6);
        return view('products.indexProducto', compact('products','categories', 'categ'));
    }
    public function indexHogar()
    {
        $categories = Category::all();
        $categ = "Hogar";
        $products = Product::where('category_id','=','5')->paginate(6);
        return view('products.indexProducto', compact('products','categories', 'categ'));
    }
    public function indexOtra()
    {
        $categories = Category::all();
        $categ = "Otros";
        $products = Product::where('category_id','=','6')->paginate(6);
        return view('products.indexProducto', compact('products','categories', 'categ'));
    }
    public function indexSale()
    {
        $categories = Category::all();
        $categ = "Ofertas";
        $products = Product::where('discount','!=','1')->orderBy('discount', 'DESC')->paginate(6);
        return view('products.indexProducto', compact('products','categories', 'categ'));
    }
    public function indexNovedades()
    {
        $categories = Category::all();
        $categ = "Novedades";
        $products = Product::orderBy('created_at', 'DESC')->paginate(6);
        return view('products.indexProducto', compact('products','categories', 'categ'));
    }

    public function search(Request $request)
    {
        $categories = Category::all();
        $categ = "";
        $input = $request->input('busqueda');
        $products = Product::where('name','LIKE','%'.$input.'%')->paginate(6);
        return view('products.indexProducto', compact('products','categories', 'categ'));
    }

    public function show($id)
    {
      $product = Product::find($id);
      return view('products.detalleProducto',compact('product'));
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
