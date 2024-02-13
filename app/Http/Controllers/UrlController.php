<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use  App\Models\Url;

class UrlController extends Controller
{
    public function listUrl()
    {
        $urls=Url::all();
        return view('pages.listUrl',['urls'=>$urls]);
    }

    public function createUrl()
    {
        return view('pages.addUrl');
    }

    public function store(Request $request)
    {
        $data=$request->validate([
            'long_url'=>'required'
        ]);

        $data['long_url']=$request->long_url;
        $data['shorturl']=Str::random(5);
        Url::create($data);
        return redirect(route('list'));
    }

    public function edit(Url $url)
    {
        return view('pages.edit',['url'=>$url]);
    }

    public function update(Url $url,Request $request)
    {
        $data=$request->validate([
            'long_url'=>'required'
        ]);

        $data['shorturl']=Str::random(5);
        $url->update($data);
        return redirect(route('list'))->with('success','Url Updated');
    }

    public function destroy(Url $url)
    {
        $url->delete();
        return redirect(route('list'))->with('success','Url Deleted');;
    }

    public function shortenurl($shorturl){
        $find= Url::where('shorturl',$shorturl)->first();
        return redirect($find->long_url);


    }
}
