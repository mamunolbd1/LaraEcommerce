<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Str;
use Session;
use Image;
class AdminProductsController extends Controller
{
    public function create(){
        return view('backend.pages.product.create');
    }
    public function store(Request $request){
        $request->validate([
            'title'       => 'required|max:55',
            'description' => 'required',
            'price'       => 'required| numeric',
            'quantity'    => 'required| numeric',
        ]);

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

        // Image Insert
        // if($request->hasFile('product_image')){

        //     $image = $request->file('product_image');
        //     $img = time().'.'. $image->getClientOriginalExtension();
        //     $location = public_path('images/products/'.$img);
        //     Image::make($image)->save($location);

        //     $product_image = new ProductImage;
        //     $product_image->product_id= $product->id;
        //     $product_image->image= $img;
        //     $product_image->save();
        // }

        if(count($request->product_image)>0){
            foreach($request->product_image as $image){

                    // $image = $request->file('product_image');
                    $img = time().'.'. $image->getClientOriginalExtension();
                    $location = public_path('images/products/'.$img);
                    Image::make($image)->save($location);
        
                    $product_image = new ProductImage;
                    $product_image->product_id= $product->id;
                    $product_image->image= $img;
                    $product_image->save();
            
            }
        }

        Session::flash('msg','Product Added Successfully');
        return redirect()->route('admin.product.create');
    }
}
