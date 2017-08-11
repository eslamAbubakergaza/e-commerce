<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{


    public function delete($id){
        $product=Product::findOrFail($id);
        $product->is_delete=1;
        $product->update();
        return back();
    }

    public function update($id){
        $product=Product::findOrFail($id);

        return back();
    }




    public function getProductsByCategory($id){
        $products=Product::where('category',$id)->get();
        return view('website.products_grid',compact('products'));
    }

    public function getStoreProductsByCategory($stor_id,$cat_id){
        $products=Product::where(['store_id','category'],[$stor_id,$cat_id])->get();
        return view('website.products_grid',compact('products'));
    }
    public function getProducts(){


    }
}
