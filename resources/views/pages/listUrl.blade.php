@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="{{URL::asset('css/listPage.css')}}"/>
@endsection

@section('title','List Url')
@section('content')
<div class="container-fluid">
    <div class="table-responsive">
        <table class="table" border="1">
            <thead class="thead-dark">
                <div>
                    <h1>Shorten URL's </h1>
                    @if (session()->has('success'))
                        <div class="text-white">
                            {{session('success')}}
                        </div>
                        
                    @endif
                </div>
            <tr>
                <th>Id</th>
                <th>URL</th>
                <th>Shorten URL</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($urls as $url )
            <tr>
                <td class="text-white">{{$url->id}}</td>
                <td> <a href="{{$url->long_url}}" target="_blank">{{$url->long_url}}</a></td>
                <td><a href="{{route('shorturl',$url->shorturl)}}" target="_blank" class="text-success" >{{route('shorturl',$url->shorturl)}}</a></td>

                <td>
                    <form method="post" action="{{route('deleteurl',['url'=>$url])}}">
                        @csrf
                        @method('delete')
                        <a class="btn btn-warning" href="{{route('editurl',['url'=>$url])}}">Edit</a>
                        <input type="submit" class="btn btn-danger" value="Delete" />
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <a class="btn btn-info" href="{{route('home')}}">Back</a>
    </div>
</div>
@endsection