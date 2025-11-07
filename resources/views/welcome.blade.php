<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>AJC Pisonet</title>
  <link rel="shortcut icon" href="{{ asset('ajclogo.jpg') }}" type="image/x-icon" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    /* Fullscreen carousel */
    .carousel,
    .carousel-inner,
    .carousel-item,
    .carousel-image {
      height: 100vh;
    }

    .carousel-image {
      object-fit: cover;
    }

    /* Overlay dim */
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.6);
      z-index: 1;
    }

    /* Caption position */
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

    .highlight {
      color: #e50914;
    }

    .btn {
      border-radius: 50px;
      padding: 10px 25px;
      transition: all 0.3s ease;
    }

    .btn:hover {
      transform: scale(1.05);
    }

    /* Transparent navbar */
    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 10;
      background: rgba(0, 0, 0, 0.4);
      backdrop-filter: blur(6px);
    }

    .navbar-brand,
    .nav-link {
      color: #fff !important;
    }

    .navbar-brand:hover,
    .nav-link:hover {
      color: #e50914 !important;
    }

    /* Hamburger custom */
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
      content: "";
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

    .navbar-toggler:not(.collapsed)::before {
      transform: rotate(45deg);
      top: 9px;
      background: #e50914;
    }

    .navbar-toggler:not(.collapsed)::after {
      transform: rotate(-45deg);
      bottom: 9px;
      background: #e50914;
    }

    .navbar-toggler:not(.collapsed) span {
      opacity: 0;
    }

    html {
      scroll-behavior: smooth;
    }

    /* Choose text centered */
    .choose_text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: #fff;
      z-index: 2;
    }

    /* Contact Section */
    #contact {
      background: #111;
      color: white;
      padding: 100px 20px;
    }

    #contact h2 {
      color: #e50914;
      font-weight: bold;
    }

    #contact form input,
    #contact form textarea {
      background: #222;
      color: white;
      border: none;
      border-radius: 10px;
      padding: 10px;
      width: 100%;
    }

    #contact form input:focus,
    #contact form textarea:focus {
      outline: 2px solid #e50914;
    }

    #contact button {
      background: #e50914;
      border: none;
      padding: 10px 25px;
      color: #fff;
      border-radius: 50px;
      transition: 0.3s;
    }

    #contact button:hover {
      background: #ff4c4c;
      transform: scale(1.05);
    }

    body,
    html {
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    /* === MOBILE FIXES === */
    @media (max-width: 768px) {
      .carousel,
      .carousel-inner,
      .carousel-item,
      .carousel-image {
        height: 70vh !important;
      }

      .carousel-caption-left-bottom {
        bottom: 40px;
        left: 20px;
        font-size: 14px;
        max-width: 90%;
      }

      /* Fix overlapping and spacing */
      #about .row {
        flex-direction: column;
      }

      .choose_text {
        position: relative;
        top: 0;
        left: 0;
        transform: none;
        padding: 40px 0 20px;
        background: rgba(0, 0, 0, 0.5);
      }

      #plans .card {
        margin-bottom: 20px;
      }

      #plans h2 {
        font-size: 1.8rem;
      }

      .navbar {
        padding-left: 1rem !important;
        padding-right: 1rem !important;
      }
    }
  </style>
</head>

<body>
  <!-- 🌟 Navbar -->
  <nav class="navbar navbar-expand-lg px-4">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#home">
        <img src="{{ asset('ajclogo.jpg') }}" alt="Logo" width="60" height="60" class="me-2 rounded-circle" />
      </a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#plans">Plans</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- 🖼️ Carousel -->
  <div id="home" class="container-fluid p-0">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('images/carousel7.jpg') }}" class="d-block w-100 carousel-image" alt="Slide 1" />
          <div class="overlay"></div>
          <div class="carousel-caption-left-bottom">
            <h1 class="text-warning">AJC Internet</h1>
            <p>
              <span class="highlight">Internet service provider</span> committed to delivering fast,
              stable, and affordable connectivity for everyone.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/carousel2.jpg') }}" class="d-block w-100 carousel-image" alt="Slide 2" />
          <div class="overlay"></div>
          <div class="carousel-caption-left-bottom">
            <h1>Smart <span class="highlight">Solutions</span></h1>
            <p>We build reliable IoT systems, computers, CCTV, and more.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 🧭 About Section -->
  <div id="about" class="container-fluid p-0">
    <div class="row g-0">
      <div class="col-12 col-md-4 position-relative" style="background-image: url('/images/choose.jpg'); background-size: cover; background-position: center; min-height: 400px;">
        <div class="overlay"></div>
        <div class="choose_text">
          <h1><span class="highlight">Why choose</span> AJC?</h1>
        </div>
      </div>

      <div class="col-12 col-md-8">
        <div class="row g-0">
          <div class="col-12 col-md-6 bg-success text-light p-4 text-center">
            <img src="{{asset('images/isp.png')}}" alt="ISP" width="70">
            <h3 class="fw-bold mt-2">Redundant Internet</h3>
            <p>Multiple internet connections ensure continuous connectivity — AJC guarantees uninterrupted service and reliability.</p>
          </div>
          <div class="col-12 col-md-6 bg-warning text-dark p-4 text-center">
            <img src="{{asset('images/back-up.png')}}" alt="Backup" width="70">
            <h3 class="fw-bold mt-2">Back-up Power</h3>
            <p>Backup batteries and generators keep your connection stable during power outages.</p>
          </div>
          <div class="col-12 col-md-6 bg-primary text-light p-4 text-center">
            <img src="{{asset('images/affordable.png')}}" alt="Affordable" width="70">
            <h3 class="fw-bold mt-2">Affordable Plans</h3>
            <p>High-speed internet that fits your budget — perfect for homes and businesses.</p>
          </div>
          <div class="col-12 col-md-6 bg-secondary text-light p-4 text-center">
            <img src="{{asset('images/customer.png')}}" alt="Support" width="70">
            <h3 class="fw-bold mt-2">24/7 Support</h3>
            <p>Our support team is always available for setup or troubleshooting.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 🌐 Internet Plans -->
  <div id="plans" class="container-fluid py-5" style="background:#0d0d0d; color:#fff;">
    <div class="container text-center">
      <h1 class="mb-4 fw-bold"><span class="highlight">Our</span> Internet Plans</h1>
      <p class="mb-5" style="max-width:600px;margin:0 auto;">Choose the perfect plan with <span class="highlight">AJC Internet</span>. All include <b>AJCFlix</b> — unlimited movies, TV, karaoke, and entertainment!</p>
      <div class="row g-4">
        <!-- Plan 899 -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card h-100 border-0 text-light" style="background:#1a1a1a;border-radius:20px;">
            <div class="card-body">
              <h2 class="fw-bold text-warning">₱899</h2>
              <h5>Up to 50 Mbps</h5>
              <ul class="list-unstyled mt-3 small">
                <li>✅ Unlimited Internet</li>
                <li>🎬 AJCFlix Access</li>
                <li>📺 Movies & TV</li>
                <li>🎤 Karaoke & Entertainment</li>
              </ul>
              <a href="#contact" class="btn btn-danger mt-3">Apply Now</a>
            </div>
          </div>
        </div>

        <!-- Repeat for 1199 / 1499 / 1999 as in your code -->
      </div>
    </div>
  </div>

  <script>
    // Collapse navbar after click (mobile)
    document.addEventListener('DOMContentLoaded', function () {
      const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
      const navbarCollapse = document.querySelector('.navbar-collapse');
      navLinks.forEach(link => {
        link.addEventListener('click', () => {
          const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
          if (bsCollapse) bsCollapse.hide();
        });
      });
    });
  </script>
</body>
</html>
