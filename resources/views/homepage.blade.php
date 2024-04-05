@extends('mainlayout')
@section('content')
    <div class="homepage">
        {{-- CAROUSEL --}}
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="slide_btn active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" class="slide_btn" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" class="slide_btn" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="3" class="slide_btn" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{asset('images/family.jpg')}}" alt="Family Net">
                <div class="dimmer">
                  <div class="carousel_content">
                    <h3 class="content_header">Ultrafast and reliable fiber and wireless internet</h3>
                    <p>
                      AJC Pisonet provides internet services to areas mostly not covered
                      by main TELCO. Enhancing the digital world by providing what you
                      need for communications, gaming and businesses.
                    </p>
                    <button type="button" class="btn text-light bg-primary mt-3">Apply Now</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="10000">
                <img src="{{asset('images/isla1.jpg')}}" alt="Gigantes">
                <div class="dimmer">
                  <div class="carousel_content">
                    <h3 class="content_header">Isla Gigantes</h3>
                    <p>
                      Stay connected while at vacation. Direct access to social media to upload
                      latest adventure of your life and communicate to your love ones and convince them
                      to enjoy thier life too.
                    </p>
                    <button type="button" class="btn text-light bg-primary mt-3">Apply Now</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="10000">
                <img src="{{asset('images/mission.jpg')}}" alt="Mission">
                <div class="dimmer">
                  <div class="carousel_content">
                    <h3 class="content_header">Our Mission</h3>
                    <p>
                      Help to connect people to fastest growing digital world, by providing ultrafast and reliable internet
                      connectivity.
                    </p>
                    <button type="button" class="btn text-light bg-primary mt-3">Apply Now</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="10000">
                <img src="{{asset('images/images.jpg')}}" alt="Success">
                <div class="dimmer">
                  <div class="carousel_content">
                    <h3 class="content_header">Our Vision</h3>
                    <p>
                      To be the most trusted internet provider, by helping people to evolve and understand
                      about fast growing technology. The INTERNET ERA.
                    </p>
                    <button type="button" class="btn text-light bg-primary mt-3">Apply Now</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row m-0 p-0">
              <div class="col-12 col-md-5 p-0 m-0 promos">
                  <img src="{{asset('assets/internet-head.jpg')}}" alt="Reasons">
                  <div class="dimmer_red"></div>
                  <div class="promos_content position-absolute top-50 w-100">
                    <h4 class="text-light ms-5 fs-5 fw-light">REASONS</h4>
                    <h3 class="ms-5 fs-1 fw-bold text-light">Why choose AJC PISONET ?</h3>
                    <button type="button" class="btn btn-warning ms-5 mt-4">Apply Now</button>
                  </div>
              </div>
              <div class="col bg-primary p-0 m-0 promos">
                <div class="row p-0 m-0">
                  <div class="col-12 col-md-6" style="background-color:rgb(197, 56, 56)">
                    <div class="card p-4 text-light">
                      <span class="mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-clock text-light border p-2" viewBox="0 0 16 16">
                          <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                        </svg>
                      </span>
                      <h3 class="fs-2">100% Uptime Transmit</h3>
                      <p class="fs-5">
                        Multiple ISP's that switches automatically for non-stop 
                        Transmit and Recieve sessions.
                      </p>
                    </div>
                  </div>
                  <div class="col-12 col-md-6" style="background-color:rgb(16, 5, 78)">
                    <div class="card p-4 text-light">
                      <span class="mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-clock text-light border p-2" viewBox="0 0 16 16">
                          <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                        </svg>
                      </span>
                      <h3 class="fs-2">100% Uptime Transmit</h3>
                      <p class="fs-5">
                        Multiple ISP's that switches automatically for non-stop 
                        Transmit and Recieve sessions.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="row p-0 m-0">
                  <div class="col-12 col-md-6" style="background-color:rgb(10, 48, 3)">
                    <div class="card p-4 text-light">
                      <span class="mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-clock text-light border p-2" viewBox="0 0 16 16">
                          <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                        </svg>
                      </span>
                      <h3 class="fs-2">100% Uptime Transmit</h3>
                      <p class="fs-5">
                        Multiple ISP's that switches automatically for non-stop 
                        Transmit and Recieve sessions.
                      </p>
                    </div>
                  </div>
                  <div class="col-12 col-md-6" style="background-color:rgb(88, 27, 3)">
                    <div class="card p-4 text-light">
                      <span class="mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-clock text-light border p-2" viewBox="0 0 16 16">
                          <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                        </svg>
                      </span>
                      <h3 class="fs-2">100% Uptime Transmit</h3>
                      <p class="fs-5">
                        Multiple ISP's that switches automatically for non-stop 
                        Transmit and Recieve sessions.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
    
@endsection