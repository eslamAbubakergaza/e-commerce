<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Store;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
   public function index(){
       $products=Product::getLast10Products();
       $efforts=Product::getLast10Efforts();
       $bestefforts=Product::getBestEfforts();
       $stores=Store::orderBy('created_at', 'desc')->limit(10);
       $categories=Category::all();
       return view('website.main',['products'=>$products,
           'stores'=>$stores,'categories'=>$categories,'efforts'=>$efforts,'bestefforts'=>$bestefforts]);
   }

    public function allStores(){

        $stores=Store::join('users','users.id','=','stores.user_id')
            ->select('stores.*','users.name as user_name')->limit(24)->get();
        $counter=Store::count();
        $counter2=(integer)($counter/24);
        if($counter%24!=0)
            $counter2++;
        $url='stores/page';
        $page=1;
        return view('website.stores_01',compact('stores','counter2','url','page'));
    }

    public function allStoresPage($no){
        if(is_numeric($no)){
            $stores=Store::join('users','users.id','=','stores.user_id')
                ->select('stores.*','users.name as user_name')->offset(($no-1)*24)->limit(24)->get();
            $counter=Store::count();
            $counter2=(integer)($counter/24);
            if($counter%24!=0)
                $counter2++;
            $url='stores/page';
            $page=$no;
            return view('website.stores_01',compact('stores','counter2','url','page'));
        }else{
            return view('errors.404');
        }
    }


    public function allProducts(){

        $products=Product::limit(8)->get();
        $categories=Category::all();
        $counter=Product::count();
        $counter2=(integer)($counter/8);
        if($counter%8!=0)
            $counter2++;
        $url='products/page';
        $page=1;
        return view('website.coupons_grid',['products'=>$products,'categories'=>$categories,'count'=>$counter2,'url'=>$url,'page'=>$page]);
    }


    public function allProductsPage($no){
        if(is_numeric($no)) {
            $products = Product::offset(($no-1)*8)->limit(8)->get();
            $categories = Category::all();
            $counter = Product::count();
            $counter2 = (integer)($counter / 8 );
            if($counter%8!=0)
                $counter2++;
            $url = 'products/page';
            $page=$no;
            return view('website.coupons_grid', ['products' => $products, 'categories' => $categories, 'count' => $counter2, 'url' => $url,'page'=>$page]);
        }else{
                return view('errors.404');
            }
        }

    public function allProductsByCategory($id){
        if(is_numeric($id)) {
            $products = Product::where('category', $id)->limit(8)->get();
            $categories = Category::all();
            $counter = Product::where('category', $id)->count();

            $counter2 = (integer)($counter / 8 );
            if($counter%8!=0)
                $counter2++;

            $url='products/category/'.$id.'/page';
            $page=1;
            return view('website.coupons_grid', ['products' => $products, 'categories' => $categories, 'count' => $counter2,'url'=>$url,'page'=>$page]);
        }else{
            return view('errors.404');
        }
        }

        public function allProductsByCategoryPage($id,$no){
        if(is_numeric($id) && is_numeric($no)) {
            $products = Product::where('category', $id)->offset(($no-1)*8)->limit(8)->get();
            $categories = Category::all();
            $counter = Product::where('category', $id)->count();
            $counter2 = (integer)($counter / 8 );
            if($counter%8!=0)
                $counter2++;
            $url='products/category/'.$id.'/page';
            $page=$no;
            return view('website.coupons_grid', ['products' => $products, 'categories' => $categories, 'count' => $counter2,'url'=>$url,'page'=>$page]);
        }else{
            return view('errors.404');
        }
        }

}
