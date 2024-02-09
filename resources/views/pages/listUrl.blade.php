@extends('layouts.main')

@section('content')
    <div class="container">
        <table class="table table-borderless" border="1">
            <thead class="thead-dark">
                <div>
                    <h2>Shorten URL's </h2>
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
                <td>{{$url->id}}</td>
                <td> <a href="http://{{$url->long_url}}" target="_blank" class="text-dark">{{$url->long_url}}</a></td>
                <td>coming soon..!</td>
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
        <a class="btn btn-" href="{{route('home')}}">Back</a>
    </div>
@endsection