<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>AJC Pisonet</title>
  <link rel="shortcut icon" href="{{ asset('ajclogo.jpg') }}" type="image/x-icon" />

  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
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
      object-fit: stretch;
    }

    /* Overlay dim */
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
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

    .choose_text {
      position: absolute;
      top: 50%;
      left: 10%;
      transform: translate(-50%, -50%);
      color: #fff;
      z-index: 1;
      opacity: 0;
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

    .navbar-toggler:hover::before,
    .navbar-toggler:hover::after,
    .navbar-toggler:hover span {
      background: #ff4c4c;
    }

    /* Smooth scroll */
    html {
      scroll-behavior: smooth;
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

    @media (max-width: 768px) {
      .navbar {
        padding-left: 1rem !important;
        padding-right: 1rem !important;
      }

      .carousel-caption-left-bottom {
        bottom: 120px;
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

    body,
    html {
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      height: 100vh;
    }
  </style>
</head>

<body>
  <!-- 🌟 Navbar -->
  <nav class="navbar navbar-expand-lg px-4">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#home">
        <img
          src="{{ asset('ajclogo.jpg') }}"
          alt="Logo"
          width="60"
          height="60"
          class="me-2 rounded-circle"
        />
      </a>
      <button
        class="navbar-toggler collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
      >
        <span></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- 🖼️ Carousel (Home Section) -->
  <div id="home" class="container-fluid p-0">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('images/carousel7.jpg') }}" class="d-block w-100 carousel-image" alt="Slide 1" />
          <div class="overlay"></div>
          <div class="carousel-caption-left-bottom">
            <h1 class="text-warning">AJC Internet</h1>
            <p>
              <span class="highlight">Internet service provider</span> committed to
              delivering fast, stable, and affordable connectivity for everyone.
              We aim to provide a nonstop internet experience — keeping homes,
              businesses, and communities connected without interruption.
              Experience the power of reliable internet with our affordable internet plans.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/carousel2.jpg') }}" class="d-block w-100 carousel-image" alt="Slide 2" />
          <div class="overlay"></div>
          <div class="carousel-caption-left-bottom">
            <h1>Smart <span class="highlight">Solutions</span></h1>
            <p>We build reliable, efficient systems that make life simpler and better.
              Internet of Things, Computer assembly, CCTV, Software and Programming, and even repair jobs.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/carousel3.jpg') }}" class="d-block w-100 carousel-image" alt="Slide 3" />
          <div class="overlay"></div>
          <div class="carousel-caption-left-bottom">
            <h1><span class="highlight">Innovation</span> Meets Simplicity</h1>
            <p>Explore our latest projects and discover what makes us different.
              Island internet from wireless to fiber installation with fast internet speed
              and a secure transmission with unterupted surfing to the internet.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 📞 About Section -->

    <div id="about" class="container-fluid p-0 h-100">
      <div class="row h-100">
        <div class="col-12 col-md-4 p-0 m-0 h-100"
            style="
              background-image: url('/images/choose.jpg');
              background-size: stretch;
              background-position: center;
              background-repeat: no-repeat;
              position: relative;
            ">
            <div class="overlay"></div>
            <div class="choose_text">
            <h1><span class="highlight">Why choose</span> AJC ?</h1>
          </div>
        </div>
        <div class="col-12 col-md-8 p-0 m-0">
          <div class="row h-50">
            <div class="col-12 col-md-6 bg-success p-3 d-flex justify-content-center flex-column">
              <h2>
                <img src="{{asset('images/isp.png')}}" alt="" width="100" height="100">
                Redundant Internet</h2>
                <p class="">
                  having multiple internet connections or backup links to ensure continuous connectivity in case 
                  one provider or connection fails. It is a reliability strategy often used by businesses, organizations, 
                  and ISPs to prevent downtime and maintain seamless online operations.
                </p>
            </div>
            <div class="col-12 col-md-6 bg-warning p-3">
              <h2>
                <img src="{{asset('images/back-up.png')}}" alt="" width="100" height="100">
                Back-up Power</h2>
            </div>
          </div>
          <div class="row h-50">
            <div class="col-12 col-md-6 bg-primary p-3">
              <h2>
                <img src="{{asset('images/affordable.png')}}" alt="" width="100" height="100">
                Affordable Plans
              </h2>
            </div>
            <div class="col-12 col-md-6 bg-secondary p-3">
              <h2>
                <img src="{{asset('images/customer.png')}}" alt="" width="100" height="100">
                24/7 Customer Support
              </h2>
            </div>
          </div>
        </div>
      </div>
    </div>


  <script>
  // Collapse navbar after clicking a link (for mobile)
  document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
        if (bsCollapse) {
          bsCollapse.hide(); // collapse it
        }
      });
    });
  });
</script>

</body>
</html>
