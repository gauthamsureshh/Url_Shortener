<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        $newUrl=Url::create($data);
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

        $url->update($data);
        return redirect(route('list'))->with('success','Url Updated');
    }

    public function destroy(Url $url)
    {
        $url->delete();
        return redirect(route('list'))->with('success','Url Deleted');;
    }
}
