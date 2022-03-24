<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('front.blog.index');
    }

    public function blogdetail($id){
        $blog = Blog::findOrFail($id);

        return view('front.blog.blogdetail',compact('blog'));
    }
}