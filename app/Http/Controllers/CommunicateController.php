<?php

namespace App\Http\Controllers;

use App\Communicate;
use App\CommunicatesList;
use Illuminate\Http\Request;

class CommunicateController extends Controller
{
    public function index()
    {
      $communicates=Communicate::all();
       
        return view('information.communicate',compact('communicates'));
    }
    
    public function store()
    {
        $this->validate(request(),[
            'body'=>'required|min:10',
            'email'=>'required|email',
            'name'=>'required|min:4',
        ]);

        CommunicatesList::create([
            'email'=>request('email'),
            'name'=>request('name'),
            'body' =>request('body'),
        ]);
        return redirect('/communicate');
    }

}
