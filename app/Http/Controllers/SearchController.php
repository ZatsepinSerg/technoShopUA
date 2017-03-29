<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        dd(request());
       // $products = Product::where('title', '=', $category)->orderBY($type, $param)->paginate(60);
    }





    /**
     * Display a listing of the resource.
     * @param    $type $param
     * @return \Illuminate\Http\Response
     */
    public function searchCategory($category, $type = 0, $param = 0)
    {
        if (!($type || $param))
        {
            $products = Product::where('category', '=', $category)->paginate(30);
        } else {
            switch ($type) {
                case 'count' :
                    $products = Product::where('category', '=', $category)->paginate($param);
                    break;
                case 'title' :
                    $products = Product::where('category', '=', $category)->orderBY($type, $param)->paginate(60);
                    break;
                case 'price' :
                    $products = Product::where('category', '=', $category)->orderBY($type, $param)->paginate(60);
                    break;
                case 'rating' :
                    //$products=Product::orderBY($type,$param)->paginate(60);
                    dd($type, $param);
                    break;
                case 'alias' :
                    $products = Product::where('category', '=', $category)->orderBY($type, $param)->paginate(60);
                    break;
                case 'default' :
                    $products = Product::where('category', '=', $category)->orderBY('id', 'DESC')->paginate(60);
                    break;
                default; $products=0;
                    break;
            }
        }

        return view('search.index',compact('products','category'));
    }

    /**
     * Display the specified resource.
     *
     * @param    $type $param
     * @return \Illuminate\Http\Response
     */
    
    public function show($type,$param)
    {
        switch ($type){
            case 'count' :
                $products=Product::orderBY('id','DESC')->paginate($param);
                break;
            case 'title' :
                $products=Product::orderBY($type,$param)->paginate(60);
                break;
            case 'price' :
                $products=Product::orderBY($type,$param)->paginate(60);
                break;
            case 'rating' :
                //$products=Product::orderBY($type,$param)->paginate(60);
                dd($type, $param);
                break;
            case 'alias' :
                $products=Product::orderBY($type,$param)->paginate(60);
                break;
            case 'default' :
                $products=Product::orderBY('id','DESC')->paginate(60);
                break;
            default;
                break;
        }

        return view('product.index',compact('products'));
    }

}
