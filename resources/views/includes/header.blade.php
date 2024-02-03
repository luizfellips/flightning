<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand fs-2" href="{{route('/')}}"><i class="bi bi-lightning-fill"></i>Flightning</a>
    <div class="navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link hover:text-sky-600" href="{{route('/')}}">Home</a>
        <a class="nav-item nav-link hover:text-sky-600" href="{{route('flights.index')}}">Flights</a>
        <a class="nav-item nav-link hover:text-sky-600" href="{{route('about')}}">About</a>
      </div>
    </div>
        <button class="nav-item nav-link mx-3 "><a href="{{route('login')}}" class="no-underline hover:underline hover:text-sky-600">Login</a></button>
        <button class="nav-item nav-link "><a href="{{route('register')}}" class="no-underline hover:underline hover:text-sky-600">Register</a></button>
  </nav>
