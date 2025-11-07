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
      object-fit: cover;
    }

    /* Overlay */
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

    .choose_text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #fff;
      text-align: center;
      z-index: 2;
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

    /* Buttons */
    .btn {
      border-radius: 50px;
      padding: 10px 25px;
      transition: all 0.3s ease;
    }

    .btn:hover {
      transform: scale(1.05);
    }

    /* Navbar */
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

    /* Hamburger menu */
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

    /* ABOUT SECTION */
    #about {
      background: #000;
      color: #fff;
    }

    #about .left-section {
      background-image: url('{{ asset('images/choose.jpg') }}');
      background-size: cover;
      background-position: center;
      position: relative;
      min-height: 100vh;
    }

    #about .right-section {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    #about .info-box {
      flex: 1;
      padding: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      text-align: left;
      color: #fff;
    }

    #about .info-box h2 {
      display: flex;
      align-items: center;
      gap: 15px;
      font-size: 1.5rem;
      font-weight: bold;
    }

    #about .info-box img {
      width: 60px;
      height: 60px;
    }

    #about .info-box p {
      font-size: 14px;
      margin-top: 10px;
      opacity: 0.9;
    }

    @media (max-width: 768px) {
      .choose_text h1 {
        font-size: 1.8rem;
      }

      #about .info-box {
        text-align: center;
        align-items: center;
      }

      #about .info-box h2 {
        justify-content: center;
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
              Experience nonstop internet — keeping homes, businesses, and communities connected without interruption.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 📞 About Section -->
  <div id="about" class="container-fluid p-0">
    <div class="row g-0">
      <div class="col-12 col-md-4 left-section">
        <div class="overlay"></div>
        <div class="choose_text">
          <h1><span class="highlight">Why Choose</span> AJC?</h1>
        </div>
      </div>

      <div class="col-12 col-md-8 right-section">
        <div class="row g-0 h-100">
          <div class="col-12 col-md-6 bg-success info-box">
            <h2><img src="{{asset('images/isp.png')}}" alt=""> Redundant Internet</h2>
            <p>
              Multiple internet connections or backup links ensure continuous connectivity
              in case one provider or connection fails. It’s a key reliability strategy that
              minimizes downtime and keeps your business running smoothly.
            </p>
          </div>
          <div class="col-12 col-md-6 bg-warning info-box text-dark">
            <h2><img src="{{asset('images/back-up.png')}}" alt=""> Back-up Power</h2>
            <p>
              Our systems stay online even during power interruptions thanks to
              high-capacity battery and generator backup systems for uninterrupted service.
            </p>
          </div>
          <div class="col-12 col-md-6 bg-primary info-box">
            <h2><img src="{{asset('images/affordable.png')}}" alt=""> Affordable Plans</h2>
            <p>
              We offer flexible and affordable internet plans tailored to your needs —
              providing great value without compromising speed or reliability.
            </p>
          </div>
          <div class="col-12 col-md-6 bg-secondary info-box">
            <h2><img src="{{asset('images/customer.png')}}" alt=""> 24/7 Customer Support</h2>
            <p>
              Our support team is always available to assist you anytime,
              ensuring fast response and resolution whenever you need help.
            </p>
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
          if (bsCollapse) bsCollapse.hide();
        });
      });
    });
  </script>
</body>
</html>
