<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function add(Product $product)
    {

        $cart = request()-> cookie('cart') ? json_decode(request()-> cookie('cart'),true):[];

        if(isset($cart[$product->id])) $cart[$product->id]++;
        else $cart[$product->id]=1;
        
        return  back()->withCookie('cart',json_encode($cart),45000);
    }

    public function minus(Product $product)
    {
        $cart = request()-> cookie('cart') ? json_decode(request()-> cookie('cart'),true):[];
        if(isset($cart[$product->id] )&& $cart[$product->id]>1) $cart[$product->id]--;


        return  back()->withCookie('cart',json_encode($cart),45000);
    }
}
