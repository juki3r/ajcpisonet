<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AJC Pisonet</title>
  <link rel="shortcut icon" href="{{ asset('ajclogo.jpg') }}" type="image/x-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    /* Make carousel fullscreen */
    .carousel,
    .carousel-inner,
    .carousel-item,
    .carousel-image {
      height: 100vh;
    }

    .carousel-image {
      object-fit: cover;
    }

    /* Dim overlay */
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      z-index: 1;
    }

    /* Left bottom caption */
    .carousel-caption-left-bottom {
      position: absolute;
      bottom: 60px;
      left: 60px;
      color: #fff;
      text-align: left;
      z-index: 2;
      max-width: 600px;
      opacity: 0;
      transform: translateY(40px);
      animation: fadeUp 1.2s ease forwards;
    }

    /* Animate caption fade-in and move-up */
    @keyframes fadeUp {
      0% {
        opacity: 0;
        transform: translateY(40px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Accent color for brand name */
    .highlight {
      color: #E50914;
    }

    /* Button enhancements */
    .btn {
      border-radius: 50px;
      padding: 10px 25px;
      transition: all 0.3s ease;
    }

    .btn:hover {
      transform: scale(1.05);
    }

    /* Transparent navbar over carousel */
    .navbar {
      position: absolute;
      top: 0;
      width: 100%;
      z-index: 10;
      background: rgba(0, 0, 0, 0.3);
      backdrop-filter: blur(6px);
    }

    .navbar-brand, .nav-link {
      color: #fff !important;
    }

    .navbar-brand:hover, .nav-link:hover {
      color: #E50914 !important;
    }

    /* Elegant hamburger (3 bars to X animation) */
    .navbar-toggler {
      border: none;
      outline: none !important;
      box-shadow: none !important;
      position: relative;
      width: 30px;
      height: 22px;
      transition: transform 0.3s ease;
      
    }

    .navbar-toggler-icon {
      display: none;
    }

    .navbar-toggler::before,
    .navbar-toggler::after,
    .navbar-toggler span {
      position: absolute;
      left: 0;
      width: 100%;
      height: 3px;
      background: #fff;
      border-radius: 2px;
      transition: all 0.3s ease;
      content: '';
      background: #ff4c4c;
    }

    .navbar-toggler span {
      top: 9px;
    }

    .navbar-toggler::before {
      top: 0;
    }

    .navbar-toggler::after {
      bottom: 0;
    }

   /* Transform to X */
    .navbar-toggler:not(.collapsed)::before {
    transform: rotate(45deg);
    top: 9px;
    background: #E50914; /* 🔴 Red when active */
    }

    .navbar-toggler:not(.collapsed)::after {
    transform: rotate(-45deg);
    bottom: 9px;
    background: #E50914; /* 🔴 Red when active */
    }

    .navbar-toggler:not(.collapsed) span {
    opacity: 0;
    }

    /* Optional: subtle hover glow */
    .navbar-toggler:hover::before,
    .navbar-toggler:hover::after,
    .navbar-toggler:hover span {
    background: #ff4c4c; /* brighter red on hover */
    }

    /* Collapse smooth animation */
    .collapse {
    transition: all 0.4s ease;
    }


    /* Responsive adjustments */
    @media (max-width: 768px) {
      /* Smaller navbar padding on mobile */
      .navbar {
        padding-left: 1rem !important;
        padding-right: 1rem !important;
      }

      .carousel-caption-left-bottom {
        bottom: 130px;
        left: 20px;
        max-width: 90%;
      }

      .carousel-caption-left-bottom h1 {
        font-size: 1.8rem;
      }

      .carousel-caption-left-bottom p {
        font-size: 14px;
      }
    }

    body, html {
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }
  </style>
</head>

<body>
  <!-- 🌟 Transparent Navbar -->
  <nav class="navbar navbar-expand-lg px-5 px-md-3 px-lg-5">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#">
        <img src="{{ asset('ajclogo.jpg') }}" alt="Logo" width="40" height="40" class="me-2 rounded-circle">
        AJC Pisonet
      </a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- 🖼️ Carousel -->
  <div class="container-fluid p-0">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <img src="{{ asset('images/carousel1.jpg') }}" class="d-block w-100 carousel-image" alt="Slide 1">
          <div class="overlay"></div>
          <div class="carousel-caption-left-bottom animate-caption">
            <h1 class="text-warning">AJC Pisonet</h1>
            <p>
              AJC Pisonet is the #1 local internet service provider committed to delivering fast, stable, and affordable connectivity for everyone.
              We aim to provide a nonstop internet experience — keeping homes, businesses, and communities connected without interruption.
              Experience the power of reliable internet with <span class="highlight">AJC Pisonet</span>.
            </p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <img src="{{ asset('images/carousel2.jpg') }}" class="d-block w-100 carousel-image" alt="Slide 2">
          <div class="overlay"></div>
          <div class="carousel-caption-left-bottom animate-caption">
            <h1>Smart <span class="highlight">Solutions</span></h1>
            <p>We build reliable, efficient systems that make life simpler and better.</p>
            <a href="#" class="btn btn-primary btn-lg shadow">Get Started</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <img src="{{ asset('images/carousel3.jpg') }}" class="d-block w-100 carousel-image" alt="Slide 3">
          <div class="overlay"></div>
          <div class="carousel-caption-left-bottom animate-caption">
            <h1><span class="highlight">Innovation</span> Meets Simplicity</h1>
            <p>Explore our latest projects and discover what makes us different.</p>
            <a href="#" class="btn btn-light text-dark btn-lg shadow">Explore</a>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</body>
</html>
