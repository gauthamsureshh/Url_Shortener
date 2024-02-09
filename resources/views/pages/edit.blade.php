@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="card">
            @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
            <h3>Edit URL</h3>
            <form method="post" action="{{route('updateurl',['url'=>$url])}}">
                @csrf
                @method('put')
                <input type="text" name="long_url" value="{{$url->long_url}}" placeholder="Enter url here" />
                <input type="submit" value="Update" class="btn btn-dark" />
            </form>
        </div>
    </div>
@endsection