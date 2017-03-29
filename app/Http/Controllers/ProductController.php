<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Storage;
use App\Description;
use App\Image;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id','desc')->paginate(60);
        return view('product.index', compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $product)
    {

        $product=Product::find($product);
        
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(),[
           'title'=>'required|min:3',
           'alias'=>'required|min:3',
           'file'=>'required|image',
           'price'=>'required|integer',
           'description'=>'required|min:5'
        ]);

        $time=time();
        $product= new Product();
        $product->title=request('title');
        $product->alias=request('alias');
        $product->price=request('price');
        $product->img = "/images/products/".$time.request()->file('file')->getClientOriginalName();
        request()->file('file')->storeAs("/images/products/",$time.request()->file('file')->getClientOriginalName());
        $product->description=request('description');
        $product->save();

        session()->flash('message', 'Товар успешно добавлен !');

        return redirect()->back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);

        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $time=time();
        $this->validate(request(), [
            'title' => 'required|min:5',
            'description' => 'required|min:10',
            'alias' => 'required|min:3',
            'price' => 'required|integer',
        ]);

        if(request()->file())
        {
            request()->file('file')->storeAs("/images/news_and_action/",$time.request()->file->getClientOriginalName());
            $product= Product::find($id);
            $product-> title = request('title');
            $product->img = "/images/news_and_action/".$time.request()->file('file')->getClientOriginalName();
            $product-> description = request('description');
            $product-> alias = request('alias');
            $product-> save();
        }else{
            $product= Product::find($id);
            $product-> title = request('title');
            $product-> description  = request('description');
            $product-> alias = request('alias');
            $product-> save();
        }

        session()->flash('message', 'информация успешно  обновлена!');

        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $product = Product::find($id);
        Storage::delete($product->img); //получение пути и удаленние  записи из папки
        Product::destroy($id);//удаление из БД

        session()->flash('message', 'Товар удалён  !');

        return redirect('/product');
    }
}
