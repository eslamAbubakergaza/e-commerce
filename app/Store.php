<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function getProducts(){

        return Product::where('store_id',$this->id)->where('is_delete',0)->get();
    }



}
