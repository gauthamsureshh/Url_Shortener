@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="card">
            <h3>Enter URL</h3>
            <form method="post" action="{{route('storeurl')}}">
                @csrf
                @method('post')
                <input type="text" name="long_url" placeholder="Enter url here" />
                <input type="submit" value="Shorten" class="btn btn-sm btn-dark" />
            </form>
        </div>
        <a class="btn btn-info" href="{{route('home')}}">Back</a>
    </div>
@endsection