<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;



class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id', 'DESC')->paginate(2);
        return view('news.index', compact('news'));
    }

    public function show(News $action)
    {
        return view('news.show', compact('action'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store()
    {
        $time = time();

        $this->validate(request(),[
            'title'=>'required|min:10',
            'body'=>'required|min:100',
            'alias'=>'required|max:100',
            'file'=>'required|image'
        ]);

        $news = new News();
        $news->title = request('title');
        $news->body = request('body');
        $news->alias = request('alias');
        $news->img = "/images/news_and_action/".$time.request()->file('file')->getClientOriginalName();
        request()->file('file')->storeAs("/images/news_and_action/",$time.request()->file->getClientOriginalName());
        $news->save();

        session()->flash('message', 'Запись успешно сохранена !');

        return redirect()->back();
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('news.edit',compact('news'));
    }

    public function update()
    {
        $time = time();

        $this->validate(request(), [
            'title' => 'required|min:10',
            'body' => 'required|min:10',
            'alias' => 'required|max:100'
        ]);
        
        if(request()->file())
        {
            request()->file('file')->storeAs("/images/news_and_action/",$time.request()->file->getClientOriginalName());

            $news= News::find(request('id'));
            $news-> title = request('title');
            $news->img = "/images/news_and_action/".$time.request()->file('file')->getClientOriginalName();
            $news-> body = request('body');
            $news-> alias = request('alias');
            $news-> save();
        }else{
            $news= News::find(request('id'));
            $news-> title = request('title');
            $news-> body = request('body');
            $news-> alias = request('alias');
            $news-> save();
        }

        session()->flash('message', 'Запись успешно обновлена!');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $news = News::find($id);
        Storage::delete($news->img); //получение пути и удаленние  записи из папки
        News::destroy($id);//удаление из БД

        session()->flash('message', 'новость успешно удалена  !');

        return redirect()->back();

    }
}
