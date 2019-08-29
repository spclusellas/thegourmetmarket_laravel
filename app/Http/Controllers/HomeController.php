<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Cart;
use Session;

class HomeController extends Controller
{
  public function main()
  {
    $categories = Category::all();
    $productsoferta = Product::where('discount','=','0.5')->orderBy('created_at')->paginate(3);
    $products = Product::orderBy('created_at', 'DESC')->paginate(3);
    return view('home', compact('products','categories', 'productsoferta'));
    }

    public function faqs()
      {
        return view('faqs.faqs');
      }

}
