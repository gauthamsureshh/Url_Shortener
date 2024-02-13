@extends('layouts.main')

@section('title','Register')
@section('content')
<div class="container">
    <div class="mt-5">
        @if ($errors->any())
            <div class="col">
                @foreach ($errors->all() as $error )
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
        @endif
    </div>
    <form method="post" action="{{route('register.post')}}" class="mr-auto ml-auto mt-3" style="width: 500px">
        @csrf
        @method('post')
        <div class="form-group">
            <label >Username</label>
            <input type="text" class="form-control" placeholder="Username" name="name">
        </div>    
        <div class="form-group">
            <label >Email address</label>
            <input type="email" class="form-control"   placeholder="Email" name="email">
        </div>
        <div class="form-group">
            <label >Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <div class="form-group">
            <label class="form-check-label">Already a Member ?<a href="{{route('login')}}"> Login</a></label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



@endsection