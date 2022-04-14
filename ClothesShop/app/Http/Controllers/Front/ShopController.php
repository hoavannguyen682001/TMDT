<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show($id){

        $product = Product::findOrFail($id);

        $avg_rating = 0;
        $sum_rating = array_sum(array_column($product->productComment->toArray(),'rating'));
        $count_rating = count($product->productComment);
        if($count_rating != 0){
            $avg_rating = $sum_rating/$count_rating;
        }
        $colors = array_unique(array_column($product->productDetails->toArray(),'color'));
        $size = array_unique(array_column($product->productDetails->toArray(),'size'));

        $relatedProducts = Product::where('product_category_id', $product->product_category_id)
            // ->where('tag', $product->tag)
            ->limit(4)
            ->get();


        return view('front.shop.show',compact('product','avg_rating','colors','size','relatedProducts'));
    }

    public function index(Request $request){

        

        $perPage = $request->show ?? 3;
        $sortBy = $request->sort_by ?? 'latest';

        switch ($sortBy) {
            case 'latest':
                $products = Product::orderBy('id');
                break;
            case 'oldest':
                $products = Product::orderByDesc('id');
                break;
            case 'name-ascending':
                $products = Product::orderBy('name');
                break;
            case 'name-descending':
                $products = Product::orderByDesc('name');
                break;
            case 'price-ascending':
                $products = Product::orderBy('price'); 
                break;
            case 'price-descending':
                $products = Product::orderByDesc('price');
                break;
            default:
                $products = Product::orderBy('id');
            }

            $products = $products->paginate($perPage);

            $products->appends(['sort by' => $sortBy, 'show' => $perPage]);

        return view('front.shop.index',compact('products'));
    }
}
