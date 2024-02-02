<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand fs-2" href="{{route('/')}}"><i class="bi bi-lightning-fill"></i>Flightning</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="{{route('/')}}">Home</a>
        <a class="nav-item nav-link" href="{{route('flights.index')}}">Flights</a>
        <a class="nav-item nav-link" href="{{route('about')}}">About</a>
      </div>
    </div>
  </nav>
