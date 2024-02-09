@extends('layouts.main')

@section('content')
<div class="container">
            <div class="card">
                <h1>REGISTER</h1>
                <form method="post" action="">
                    <div class="inputBox">
                        <input type="text" class="inputField" name="username" placeholder="Username" required="required"/>
                    </div>
                    <div class="inputBox">
                        <input type="text" class="inputField" name="mail" placeholder="Email" required="required"/>
                    </div>
                    <div class="inputBox">
                        <input type="password" class="inputField"  name="password" placeholder="Password" required="required"/>
                    </div>
                    <div class="inputBox">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                    <p>Already a member ?  <a href="{{route('login')}}">LogIn</a></p>
                    </div>
                </form>
            </div>
</div>



@endsection