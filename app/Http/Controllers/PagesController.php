<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Cart;
use Session;

class PagesController extends Controller
{
    public function main()
    {
      $categories = Category::all();
      $products = Product::all();
      return view('home', compact('products','categories'));
      }

    public function faqs()
      {
        return view('faqs.faqs');
      }

}
