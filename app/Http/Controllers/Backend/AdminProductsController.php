<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
class AdminProductsController extends Controller
{
    public function create(){
        return view('backend.pages.product.create');
    }
    public function store(Request $request){

        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;

        $product->slug = Str::slug($product->title);
        $product->category_id =1;
        $product->brand_id =1;
        $product->admin_id =1;
        $product->save();

        return redirect()->route('admin.product.create');
    }
}
