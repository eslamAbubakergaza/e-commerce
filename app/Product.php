<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getProducts(){
        return Product::all();
    }

    public function getProductsByCategory($id){
        return Product::where('category',$id)->get();
    }

    public static function getLast10Products(){
       return Product::whereNotIn('id',
            function($query){
               $query->select('product_id')->from('efforts')->where([
                   ['created_at', '>=', 'NOW() - INTERVAL no_dates day'],

               ]);
            }

)
           ->orderBy('created_at', 'desc')->limit(10)->get();
    }

    public static function getLast10Efforts(){
        return Effort::join('products','products.id','=','efforts.product_id')->
          select('products.*', 'efforts.percent','efforts.start_date','efforts.end_date')->
        where('efforts.is_delete','!=',1)->
        where('efforts.end_date','>','NOW()')->
        where('products.is_delete','!=',1)->
        orderBy('efforts.created_at', 'desc')->limit(3)->get();
    }
    public static function getBestEfforts(){
        return Effort::join('products','products.id','=','efforts.product_id')->
          select('products.*', 'efforts.percent')->
          orderBy('efforts.percent', 'desc')->limit(5)->get();
    }

}
