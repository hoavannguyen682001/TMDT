<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
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
        //get category,brands
        $categories = ProductCategory::all();
        $brands = Brand::all();
        //get product
        $perPage = $request->show ?? 3;
        $sortBy = $request->sort_by ?? 'latest';
        $search = $request->search ?? '';

        $products = Product::where('name','like','%' . $search . '%');

        $products = $this->filter($products, $request);
        $products = $this->sortAndPagination($sortBy, $products, $perPage);

        return view('front.shop.index',compact('products','categories','brands'));
    }

    public function category($categoryName, Request $request){
        //get category, brands
        $categories = ProductCategory::all();
        $brands = Brand::all();
        //get product
        $perPage = $request->show ?? 3;
        $sortBy = $request->sort_by ?? 'latest';
        $products = ProductCategory::where('name', $categoryName)->first()->products->toQuery();
        $products = $this->filter($products, $request);
        $products = $this->sortAndPagination($sortBy, $products, $perPage);
       

        return view('front.shop.index',compact('products','categories','brands'));
    }

    public function sortAndPagination($sortBy, $products, $perPage){
        switch ($sortBy) {
            case 'latest':
                $products = $products->orderBy('id');
                break;
            case 'oldest':
                $products = $products->orderByDesc('id');
                break;
            case 'name-ascending':
                $products = $products->orderBy('name');
                break;
            case 'name-descending':
                $products = $products->orderByDesc('name');
                break;
            case 'price-ascending':
                $products = $products->orderBy('price'); 
                break;
            case 'price-descending':
                $products = $products->orderByDesc('price');
                break;
            default:
                $products = $products->orderBy('id');
            }

            $products = $products->paginate($perPage);

            $products->appends(['sort by' => $sortBy, 'show' => $perPage]);

            return $products;
    }

    public function filter($products, Request $request)
    {
        //Brand
        $brands = $request->brand ?? [];
        $brand_ids= array_keys ($brands);
        $products = $brand_ids != null ? $products->whereIn('brand_id', $brand_ids) : $products;

        //Price
        $priceMin = $request->price_min;
        $priceMax = $request->price_max;
        
        $priceMin = str_replace('$', '', $priceMin);
        $priceMax = str_replace('$', '', $priceMax);
        $products = ($priceMin != null && $priceMax != null) ? $products->whereBetween('price', [$priceMin, $priceMax]):$products;

        return $products;
    }
}
