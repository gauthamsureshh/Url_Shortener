@extends('layouts.main')
@section('css')
<link rel="stylesheet" href="{{URL::asset('css/homePage.css')}}"/>
@endsection

@section('title','Create New URL')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <h1>Enter URL</h1>
            <form method="post" action="{{route('storeurl')}}">
                @csrf
                @method('post')
                <div class="input-group">
                    <input type="text" name="long_url" placeholder="Enter URL Here" />
                    <div class="input-group-addon">
                        <button class="btn btn-outline-success">Shorten</button>
                        <a class="btn btn-outline-info" href="{{route('home')}}">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection