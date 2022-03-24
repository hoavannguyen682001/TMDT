<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('front.contact.contact');
    }

}