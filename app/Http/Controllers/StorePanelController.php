<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class StorePanelController extends Controller
{
    public function index(){
        //dd(11);
        return view('controlPanel_store.index');
    }

    public function addProduct()
    {
        $categories=Category::all();
        return view('controlPanel_store.products.addproduct',['categories'=>$categories]);
    }

    public function addEffort()
    {
        $user = Auth::user();
        $products=Product::where('store_id',$user->store()->id)->get();
       // dd($products);
        return view('controlPanel_store.efforts.addeffort',['products'=>$products]);
    }

    public function saveproduct(Request $request){
        $this->validate($request, [
            'fname' => 'required|max:255',
            'pnumber' => 'required | alpha_num',
            'price' => 'required | numeric',
            'contity' => 'required | numeric',

            'category' => 'required | numeric',
            'img' => 'required | image',
        ]);

        $name=$request->fname;
        $pnumber=$request->pnumber;
        $price=$request->price;
        $category=$request->category;
        $img=$request->img;

        $product=new Product();
        $product->name=$request->fname;
        $product->pnumber=$request->pnumber;
        $product->price=$request->price;
        $product->category=$request->category;
        $product->contity=$request->contity;
        if(Input::hasFile('img')){
            $file=Input::file('img');
            $current_timestamp = Carbon::now()->timestamp;
            $link=$current_timestamp.'.'.$file->getClientOriginalExtension();
            $file->move('uploads',$link);
            $product->img=$link;
        }else{
            $product->img='default.jpg';
        }

        $product->comment=$request->comment;
        $user = Auth::user();
        $product->store_id=$user->store()->id;

        $product->save();
        return back();

    }
    public function saveEffort(Request $request){
        $this->validate($request, [

            'product' => 'required | numeric',
            'percent' => 'required | numeric',
            'startdate' => 'required | date',
            'enddate' => 'required | date',

        ]);

        $product=$request->product;
        $percent=$request->percent;
        $startdate=$request->startdate;
        $enddate=$request->enddate;


        $effort=new Effort();
        $effort->product=$request->product;
        $effort->percent=$request->percent;
        $effort->startdate=$request->startdate;
        $effort->enddate=$request->enddate;


        $effort->save();
        return back();

    }

    public function products_table(){


        $store=Auth::user()->store();
        $products=$store->getProducts();

        return view('controlPanel_store.products.products',['products'=>$products]);

    }

    public function storeData()
    {
        return view('controlPanel_store.storeData');
    }
}
