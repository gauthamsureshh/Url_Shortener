  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">URL Short</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about')}}">About</a>
        </li>
        @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}">Logout</a>
          </li> 
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>
        @endauth
      </ul>
      <span class="navbar-text">
        @auth
          <p>Welcome, {{auth()->user()->name}}</p>
        @else
          <p>Welcome, Guest</p>
        @endauth
      </span>
    </div>
  </nav>