<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $product1 = Product::where('featured', true)->where('product_category_id', 1)->get();
        $product2 = Product::where('featured', true)->where('product_category_id', 2)->get();

        $blogs = Blog::orderby('id', 'desc')->limit(3)->get();
        return view('front.index', compact('product1','product2', 'blogs'));
    }
}
