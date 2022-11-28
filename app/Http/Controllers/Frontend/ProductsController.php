<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(Request $request){
        $product = Product::orderBy('id','desc')->get();
        return view('frontend.pages.product.index')->with('products',$product);
    }
    public function product(){
        
    }
}
