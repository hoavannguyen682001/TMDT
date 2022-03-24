<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('front.login');
    }

}