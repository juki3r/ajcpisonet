<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img class="logo" src="./assets/agclogo.png">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ (\Request::route()->getName() == 'internet') ? 'active' : '' }}"  href="{{route('internet')}}">Internet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Promos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ContactUs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ApplyNow</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
    





















{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            Logo Here
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            @auth
            <li class="nav-item">
                <a class="nav-link" href="#">Bill</a>
            </li>         
        @else
            <li class="nav-item">
                <a class="nav-link" href="#">Internet</a>
            
        @endauth
         @if (Route::has('login'))
                <div class="nav-item ">
                    @auth
                        <a class="nav-link {{ (\Request::route()->getName() == '#') ? 'active' : '' }}" href="{{ url('/dashboard') }}" >Dashboard</a>
                    @else
                        <a class="nav-link {{ (\Request::route()->getName() == '#') ? 'active' : '' }}" href="{{ route('login') }}" >Log in</a>
                    @endauth
                </div>
        @endif
      </div>
    </div>
  </nav> --}}


  