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
                    <h3 class="content_header">Ultrafast and reliable fiber and wireless internet for all</h3>
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
  
          <div class="middle">
  
          </div>
      </div>
    </div>
    
@endsection