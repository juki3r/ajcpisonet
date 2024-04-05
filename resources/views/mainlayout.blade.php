<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJC PISONET</title>
    {{-- STYLESHEET --}}
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
    <style>
      body{
    position: relative;
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
.navbar-toggler-icon{
    background-color: red !important;
}

.homepage{
    width: 100%;
    position: absolute;
    top: 0;
}

.navBar
{
    background-color: rgba(0, 0, 0, 0.6);
    z-index: 9999;
    height: 100px;
}
.nav-link{
    color: white !important;
    font-size: 22px !important;
}

/* LOGO */
.logo
{
    width: 150px;
    margin-left: -40px !important;
}

/* CAROUSEL */

.carousel{
    height: 100vh; /* For 100% screen height */
}
.carousel-inner
{
    height: 100%;
    background-color: grey;
}
.carousel-item
{
    height: 100%;
    background-color: red;
    position: relative;
}

.carousel-item img
{
    height: 100vh; /* For 100% screen height */
    width: 100vw;
}
.slide_btn
{
    width: 12px !important;
    height: 12px !important;
    border-radius: 50%;
    margin-right: 12px !important;
}
.dimmer
{
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    position: absolute;
    top: 0;
    left: 0;
}
.carousel_content
{
    margin-top: 30vh !important;
    color: white;
    padding-left: 60px;
    width: 100vw;
    animation: fadeIn 5s;
}
@keyframes fadeIn
{
    0%{
        opacity: 0;
    }
    100%{
        opacity: 1;
    }
}
.content_header{
    font-size: 48px;
    padding: 0;
    margin: 0;
    font-weight: bolder;
    width: 40%;
}
.carousel_content p{
    font-size: 16px;
    font-family: arial;
    font-weight: lighter;
    margin-top: 20px;
    color: rgba(255, 255, 255, 0.7);
    width: 35%;
}




.middle
{
    height: 100vh;
    background-color: grey;
}


@media screen and (max-width:375px)
{
    .content_header
    {
        font-size: 22px !important;
        width: 80% !important;
    }
    .carousel_content p
    {
        font-size: 12px !important;
        width: 80% !important;
    }

    
    
}
@media  screen and (max-width:425px)
{
    .carousel-item img
    {
        object-fit: cover;
    }
    .carousel_content
    {
        padding-left: 20px;
    }
    .content_header
    {
        width: 80% !important;
    }
    .carousel_content p
    {
        width: 80% !important;
    }
}
@media  screen and (max-width:768px)
{
    .content_header
    {
        font-size: 22px !important;
        width: 50% ;
    }
    .carousel_content p
    {
        width: 50% ;
        font-size: 14px !important;
    }
    .navbar-nav
    {
        background-color: red;
        width: 100%;
        text-align: center;
        margin-bottom: 10px;
    }
    .logo{
        width: 135px;
    }
    
}
@media  screen and (max-width:1024px)
{
    .carousel_content p
    {
        width: 50%;
    }
    .content_header
    {
        width: 70%;
    }
}


    </style>
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