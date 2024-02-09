@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="card">
            <h1>Welcome to Url Short</h1>
            <h6>Let's Get Started,<a href="{{route('login')}}">Login</a></h6>
            <div class="buttons">
                <a class="btn btn-primary" href="{{route('createurl')}}">New</a>
                <a class="btn btn-success" href="{{route('list')}}">List</a>
            </div>
        </div>
        
    </div>
    
@endsection