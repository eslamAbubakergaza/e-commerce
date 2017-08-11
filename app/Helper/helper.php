<?php
function getTotalCart(){
    $user=Auth::user();
    $carts=\App\Cart::join('products','carts.product_id','=','products.id')

        ->where('user_id',$user->id)

        ->select('carts.*','products.price')->get();
    $amount=0;

    foreach ($carts as $cart){
        $effort=getEffortProduct($cart->product_id);
        if($effort==null){
            $amount+=$cart->contity*$cart->price;
        }else{
            $amount+=$cart->contity*$cart->price*(1-$effort->percent/100.0);
        }
    }
    return $amount;
}
function getCountCart(){
    return \App\Cart::where('user_id',Auth::user()->id)->count();
}
    function getEffortProduct($id){
       $arr=\Illuminate\Support\Facades\DB::select('select * from efforts where product_id='.$id.' 
       AND is_delete=0 AND end_date >=CURDATE() ');
       if(count($arr)>0)
           return $arr[0];
       else
           return null;
    }
    function getStoresInCart(){

        return \App\Store::whereIn('id',

            function($query){
                $query->select('store_id')
                    ->from('products')
                    ->whereIn('id', function($query){
                        $query->select('product_id')
                            ->from('carts')
                            ->where('user_id', Auth::user()->id);
                    });
                    })


       -> select('id')->get();


    }

    function countProductsByCat($cat_id){
        return \App\Product::where('category',$cat_id)
            ->where('is_delete',0)->count('*');
    }