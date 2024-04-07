<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJC PISONET</title>
    <link rel="shortcut icon" href="{{asset('assets/ajclogo.png')}}" type="image/x-icon">
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
    <style>
body{

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
    margin-top: -100px;
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
}
.carousel-item
{
    height: 100%;
    position: relative;
}

.carousel-item img
{
    height: 100vh; /* For 100% screen height */
    width: 100vw;
    object-fit: cover;
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
    color: rgba(255, 255, 255, 0.8);
    padding-left: 60px;
    width: 100vw;
    animation: fadeIn 3s;
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
    color: rgba(255, 255, 255, 0.8);
    width: 35%;
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
        font-size: 24px !important;
        width: 50% ;
    }
    .carousel_content p
    {
        width: 50% ;
        font-size: 16px !important;
    }
    .navbar-nav
    {
        background-color: rgb(77, 3, 3);
        width: 100%;
        text-align: center;
        margin-bottom: 10px;
        padding-bottom: 30px;
    }
    .logo{
        width: 135px;
    }
    .carousel-item img
    {
        object-fit: fill;
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



.nav-link.active{
  color: red !important;
  font-weight: bold;
}
.nav-link{
  font-weight: lighter;
}
.nav-link:hover{
  color: red !important;
}
.login{
  margin: auto;
  align-items: end;
}





.promos{
  position: relative;
  height: 100vh;
}

.promos img{
  height: 100%;
  width: 100%;
}
.dimmer_red
{
    height: 100%;
    width: 100%;
    background-color: rgba(2, 41, 51, 0.6);
    position: absolute;
    top: 0;
    left: 0;
}
.card{
  background-color: transparent;
  border: none;
}
.promo_row{
    height: 100vh;
}
.promos_content h4{
    font-size: 18px;
}
.promos_content h3{
    font-size: 24px;
}
.card{
    padding: 10px;
}
.card h3{
    font-size: 26px;
}
.card p{
    font-size: 18px;
    font-weight: lighter;
}
.dimmer_promo
{
    height: 100%;
    width: 100%;
    background-color: rgba(5, 75, 204, 0.9);
    position: absolute;
    top: 0;
    left: 0;
}

.google-map {
     padding-bottom: 50%;
     position: relative;
}

.google-map iframe {
     height: 100%;
     width: 100%;
     left: 0;
     top: 0;
     position: absolute;
}






@media screen and (min-width:768px){
    .promo_row{
    height: 50%;
    }
    .promos_content h4{
        font-size: 18px;
    }
    .promos_content h3{
        font-size: 24px;
    }
    .card{
        padding: 10px;
    }
    .card h3{
        font-size: 18px;
    }
    .card p{
        font-size: 14px;
        font-weight: lighter;
    }
}
@media screen and (min-width:1000px){
    .promos_content h4{
        font-size: 20px;
    }
    .promos_content h3{
        font-size: 30px;
    }
    .card{
        padding: 20px;
    }
    .card h3{
        font-size: 24px;
    }
    .card p{
        font-size: 16px;
        font-weight: lighter;
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
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02" >
            <ul class="navbar-nav me-auto mb-3 mb-lg-0" style="width: 100%">
              <li class="nav-item">
                <a class="nav-link {{ Request::path() ==  '/' ? 'active' : ''  }}" aria-current="page" href="/">Home</a>
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
              <li class="nav-item ms-lg-auto">
                <a class="nav-link {{ Request::path() ==  'login' ? 'active' : ''  }}" href="login">Login</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>

      {{-- SECTION --}}
      @yield('content')
      <div class="container-fluid-break" >
        <div class="row p-5" style="background-color: rgb(36, 3, 97)">
            <div class="col-12 col-md-4 d-flex justify-content-center flex-column ms-5 ps-5 text-light">
                <a href="/" class="ms-3">
                    <img src="{{asset('assets/ajclogo.png')}}" alt="LOGO"  class="logo">
                </a>
                <p style="margin-top: -20px ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                    </svg>
                    ajcpisonet@gmail.com
                </p>
                <p style="margin-top: -20px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                    </svg>
                    +639562078139
                </p>
                <p style="margin-top: -20px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                      </svg>
                    JU Dhen
                </p>
            </div>
            <div class="col p-0 bg-info">
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4738.650554149824!2d123.14888275833434!3d11.596323932837459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sph!4v1712499401866!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="row text-center text-light" style="background-color: rgb(36, 3, 97)">
            <span>
                &copy AJC Pisonet
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                    <path d="M6 12.796V3.204L11.481 8zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753"/>
                  </svg>
                  Mars Tyler Arcenas
            </span>
        </div>
      </div>
</body>
</html>