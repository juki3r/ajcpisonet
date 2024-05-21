<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jupiter Arcenas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>
/* ditch the ugle blue outline */
.navbar-toggler:focus,
.navbar-toggler:active {
    outline: 0;
}
/* hide close when burger shown */
.navbar-toggler.collapsed .close-icon {
    display: none;
}
.navbar-toggler:not(.collapsed) .navbar-toggler-icon {
    display: none;
}
.navbar-toggler:focus,
.navbar-toggler:active,
.navbar-toggler-icon:focus {
    outline: none !important;
    box-shadow: none !important; 

}
.navbar-toggler{
    border: none !important;
}
.navbar{
    background-color: black !important;
}
.navBar h2, .nav-link{
    color: white !important;
}
</style>
</head>
<body>
    <header>
        {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-0 m-0">
        <div class="container-fluid navBar">
            <a class="navbar-brand ms-5" href="/">
                <h2>Jupiter</h2>
            </a>
          <button class="navbar-toggler collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list text-danger navbar-toggler-icon" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                  </svg>
            <div class="close-icon py-1 text-danger" style="font-size: 24px; font-color:red">✖</div>
        </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02" >
            <ul class="navbar-nav me-auto mb-3 mb-lg-0" style="width: 100%">
              <li class="nav-item">
                <a class="nav-link {{ Request::path() ==  '/jupiterarcenas' ? 'active' : ''  }}" aria-current="page" href="/">Home</a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link" href="">About</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
</body>
</html>