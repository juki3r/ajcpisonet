<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJC PISONET</title>
    {{-- STYLESHEET --}}
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-0 m-0">
        <div class="container-fluid navBar">
            <a class="navbar-brand ms-5" href="/">
                <img src="{{asset('assets/ajclogo.png')}}" alt="LOGO"  class="logo">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list text-danger" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                  </svg>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-3 mb-lg-0" style="width: 100%">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Internet</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contacts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Apply Now</a>
              </li>
            </ul>
          
          </div>
        </div>
      </nav>

      {{-- SECTION --}}
      @yield('content')
</body>
</html>