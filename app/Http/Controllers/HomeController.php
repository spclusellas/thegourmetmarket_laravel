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
      $products = Product::orderBy('created_at', 'DESC')->paginate(3);
      return view('home', compact('products','categories'));
      }

    public function faqs()
      {
        return view('faqs.faqs');
      }

}
