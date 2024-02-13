@extends('layouts.main')
@section('css')
<link rel="stylesheet" href="{{URL::asset('css/homePage.css')}}"/>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <h1>Welcome to TinyRoute</h1>
            @auth
            <div class="buttons">
                <h6>Shrink your links, not your sense of humor! Making URLs shorter, one chuckle at a time.</h6>
                <a class="btn btn-outline-primary" href="{{route('createurl')}}">New</a>
                <a class="btn btn-outline-success" href="{{route('list')}}">List</a>
            </div>
            @else
                <h6>Let's Get Started,<a href="{{route('login')}}">Login</a></h6>
            @endauth
            
        </div>
        
    </div>
    
@endsection