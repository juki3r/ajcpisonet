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
    .choose {
      position: relative;
      background-size: cover;
      background-position: center;
      min-height: 400px;          /* desktop default */
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1rem;
    }
    .choose_text {
      z-index: 2;
    }

    .choose_text h1 {
      color: #fff;
      text-decoration: underline;
      text-underline-offset: 6px; /* adds spacing between text and line */
      text-decoration-thickness: 2px; /* makes line thicker */
      text-decoration-color: #ffc107; /* (optional) custom color for underline */
    }


    .choose > .overlay { position: absolute; inset: 0; z-index: 1; }

    /* === MOBILE FIXES === */
    @media (max-width: 768px) {
      /* increase the choose column height on small screens */
      .choose {
        min-height: 600px;     /* bigger on mobile to avoid overlap */
        padding-top: 2.5rem;
        padding-bottom: 2.5rem;
      }
      .choose{
        height: 100% !important;
      }
      .carousel,
      .carousel-inner,
      .carousel-item,
      .carousel-image {
        height: 70vh !important;
      }

      .carousel-image {
        object-fit: cover !important;
      }

      .carousel-caption-left-bottom {
        bottom: 40px;
        left: 20px;
        font-size: 14px;
        max-width: 90%;
      }

      #about .col-md-4,
      #about .col-md-8 {
        height: auto !important;
      }

      #about .row {
        flex-direction: column;
      }

      .choose_text {
        position: relative;
        top: 0;
        left: 0;
        transform: none;
        text-align: center;
        padding: 20px 0;
        margin-top: 50px;
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
          <li class="nav-item"><a class="nav-link" href="#plans">Plans</a></li>
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
              We aim to provide nonstop internet — keeping homes and businesses connected without interruption.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/carousel2.jpg') }}" class="d-block w-100 carousel-image" alt="Slide 2" />
          <div class="overlay"></div>
          <div class="carousel-caption-left-bottom">
            <h1>Smart <span class="highlight">Solutions</span></h1>
            <p>We build reliable, efficient systems — IoT, computer assembly, CCTV, software, and repair jobs.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 🧭 About Section -->
  <div id="about" class="container-fluid p-0 h-100">
    <div class="row h-100">
      <!-- Left side -->
      <div class="col-12 col-md-4 p-0 m-0 choose"
        style="background-image: url('/images/choose.jpg'); background-size: cover; background-position: center;">
        <div class="overlay"></div>
        <div class="choose_text text-center">
          <h1 class="mt-5">Why choose AJC?</h1>
        </div>
      </div>

      <!-- Right side -->
      <div class="col-12 col-md-8 p-0 m-0">
        <div class="row g-0">
          <div class="col-12 col-md-6 bg-success text-light p-4 text-center">
            <img src="{{asset('images/isp.png')}}" alt="ISP" width="70">
            <h3 class="fw-bold mt-2">Redundant Internet</h3>
            <p>Multiple internet connections ensure continuous connectivity — AJC guarantees uninterrupted service and reliability.</p>
          </div>

          <div class="col-12 col-md-6 bg-warning text-dark p-4 text-center">
            <img src="{{asset('images/back-up.png')}}" alt="Backup" width="70">
            <h3 class="fw-bold mt-2">Back-up Power</h3>
            <p>Backup batteries and generators keep your connection stable during power outages — stay online always.</p>
          </div>

          <div class="col-12 col-md-6 bg-primary text-light p-4 text-center">
            <img src="{{asset('images/affordable.png')}}" alt="Affordable" width="70">
            <h3 class="fw-bold mt-2">Affordable Plans</h3>
            <p>High-speed internet that fits your budget — flexible options for homes, gamers, and businesses.</p>
          </div>

          <div class="col-12 col-md-6 bg-secondary text-light p-4 text-center">
            <img src="{{asset('images/customer.png')}}" alt="Support" width="70">
            <h3 class="fw-bold mt-2">24/7 Support</h3>
            <p>Our support team is always available for setup, billing, or troubleshooting assistance.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 🌐 Internet Plans -->
  <div id="plans" class="container-fluid py-5" style="background: #0d0d0d; color: #fff;">
    <div class="container text-center">
      <h1 class="mb-4 fw-bold"><span class="highlight">Our</span> Internet Plans</h1>
      <p class="mb-5" style="max-width: 600px; margin: 0 auto;">
        Fast, reliable, and affordable — choose the perfect plan for your home or business with
        <span class="highlight">AJC Internet</span>. All plans include <b>AJCFlix</b>: unlimited movies, TV channels, karaoke, and entertainment!
        <br>
        <br>
        <span class="text-warning"> Note: Installation fee is 2,500 pesos.</span>
      </p>

      <div class="row g-4">
        <!-- Plan cards -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card h-100 border-0 text-light" style="background:#1a1a1a;border-radius:20px;">
            <div class="card-body">
              <h2 class="fw-bold text-warning plan-title">₱899</h2>
              <h5>Up to 50 Mbps</h5>
              <ul class="list-unstyled mt-3 small">
                <li>✅ Unlimited Internet</li>
                <li>🎬 AJCFlix Access</li>
                <li>📺 Movies & TV</li>
                <li>🎤 Karaoke & Entertainment</li>
              </ul>
              <button 
                class="btn btn-danger mt-3 apply-btn" 
                data-bs-toggle="modal" 
                data-bs-target="#applyModal"
                data-plan="₱899 - Up to 50 Mbps">
                Apply Now
              </button>

            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
          <div class="card h-100 border-0 text-light" style="background:#1a1a1a;border-radius:20px;">
            <div class="card-body">
              <h2 class="fw-bold text-warning">₱1199</h2>
              <h5>Up to 100 Mbps</h5>
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

        <div class="col-12 col-md-6 col-lg-3">
          <div class="card h-100 border-0 text-light" style="background:#1a1a1a;border-radius:20px;">
            <div class="card-body">
              <h2 class="fw-bold text-warning">₱1499</h2>
              <h5>Up to 150 Mbps</h5>
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

        <div class="col-12 col-md-6 col-lg-3">
          <div class="card h-100 border-0 text-light" style="background:#1a1a1a;border-radius:20px;">
            <div class="card-body">
              <h2 class="fw-bold text-warning">₱1999</h2>
              <h5>Up to 200 Mbps</h5>
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
      </div>
    </div>
  </div>




<!-- 💬 Modal -->
<div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="applyModalLabel">Apply for Plan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <p>You are applying for <strong id="selectedPlan"></strong>.</p>

        <form id="applyForm">
          @csrf
          <input type="hidden" name="plan" id="planInput">

          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="fullname" class="form-control" placeholder="Enter your full name" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Contact Number</label>
            <input type="text" name="contact_number" class="form-control" maxlength="11" placeholder="e.g. 09123456789" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Enter your address" required>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="submitApplication" class="btn btn-danger">Submit Application</button>
      </div>
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

    document.querySelectorAll('.apply-btn').forEach(button => {
      button.addEventListener('click', function() {
        // Find the nearest card and get the plan text
        const plan = this.closest('.card').querySelector('.plan-title').textContent.trim();

        // Update both modal display and hidden input
        document.getElementById('selectedPlan').textContent = plan;
        document.getElementById('hiddenPlan').value = plan;
      });
    });

  document.addEventListener("DOMContentLoaded", () => {
    const applyButtons = document.querySelectorAll(".apply-btn");
    const selectedPlan = document.getElementById("selectedPlan");
    const planInput = document.getElementById("planInput");
    const modal = new bootstrap.Modal(document.getElementById("applyModal"));
    const submitBtn = document.getElementById("submitApplication");
    const form = document.getElementById("applyForm");

    // 🟥 When clicking "Apply Now"
    applyButtons.forEach(btn => {
      btn.addEventListener("click", e => {
        e.preventDefault();
        const plan = btn.getAttribute("data-plan");
        selectedPlan.textContent = plan;
        planInput.value = plan;
        modal.show();
      });
    });

  // 🟩 Handle Submit
  submitBtn.addEventListener("click", async () => {
    const formData = new FormData(form);

    try {
      const response = await fetch("{{ url('/apply') }}", {
        method: "POST",
        headers: {
          "X-CSRF-TOKEN": form.querySelector('input[name="_token"]').value,
        },
        body: formData,
      });

      const result = await response.json();

      if (response.ok) {
        alert("✅ Application submitted successfully!");
        form.reset();
        modal.hide();
      } 
      // 🟥 Handle validation errors (Laravel 422)
      else if (response.status === 422) {
        let errors = result.errors;
        let messages = Object.values(errors).flat().join("\n");
        alert("⚠️ Validation Error:\n" + messages);
      } 
      else {
        alert("⚠️ " + (result.message || "Something went wrong"));
      }

    } catch (error) {
      console.error(error);
      alert("❌ Error submitting application.");
    }
  });

});
  </script>

</body>
</html>
