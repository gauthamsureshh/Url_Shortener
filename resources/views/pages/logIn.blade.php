@extends('layouts.main')

@section('title','Login')
@section('content')
<div class="container">
    <div class="mt-5">
    </div>
    <form method="post" action="{{route('login.post')}}" class="mr-auto ml-auto mt-3" style="width: 500px">
        @csrf
        @method('post')
        <div class="form-group">
            <label >Email address</label>
            <input type="email" class="form-control"   placeholder="Email" name="email">
        </div>
        <div class="form-group">
            <label >Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <div class="form-group">
            <label class="form-check-label">Not a Member ?<a href="{{route('register')}}"> Register</a></label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



@endsection