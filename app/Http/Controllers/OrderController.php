<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('order.show_all', compact('orders'));
    }
    
    public function store()
    {
        $cart = request()->cookie('cart') ? json_decode(request()->cookie('cart'), true) : [];
        $order = Order::create(request(['customer_name', 'phone', 'email', 'feedback', 'total_price']));
        foreach ($cart AS $productId => $productAmount) {
            $order->products()->attach($productId, ['amount' => $productAmount]);
        }
        $cookie = \Cookie::forget('cart');
        return redirect('/order/success')->withCookie($cookie);
    }

    public function create()
    {

        $cart = request()->cookie('cart') ? json_decode(request()->cookie('cart'), true) : [];

        if (empty($cart)) return redirect('/');
        $products = [];

        foreach ($cart AS $productId => $productamount) {

            $products[] = Product::find($productId);//TODO перестала работать корзина не получает айди товара 

        }

        return view('order.index', compact('products', 'cart'));
    }


}
