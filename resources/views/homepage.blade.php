@extends('mainlayout')
@section('content')
  <div class="container-fluid" >
    {{-- Carousel --}}
    <div class="row" style="margin-top: -100px">
      <div class="col-12 m-0 p-0">
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
      </div>
    </div>

    {{-- REASONS --}}
    <div class="row">
      <div class="col-12 col-lg-5 p-0 m-0"  style="height: 100vh;position:relative">
          <img src="{{asset('assets/internet-head.jpg')}}" alt="Reasons" height="100%" width="100%">
          <div class="dimmer_red"></div>
          <div class="promos_content position-absolute top-50 w-100">
            <h4 class="text-light ms-2 fw-light">REASONS</h4>
            <h3 class="ms-2 fw-bold text-light">Why choose AJC PISONET ?</h3>
            <button type="button" class="btn btn-warning ms-2 mt-4">Apply Now</button>
          </div>
      </div>
      <div class="col">
        <div class="row">
          <div class="col-12 col-md-6" style="height: 50vh;background-color:rgb(138, 34, 34);">
            <div class="card  text-light">
              <span class="mt-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-clock text-light border p-2" viewBox="0 0 16 16">
                  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                </svg>
              </span>
              <h3>100% Uptime Link</h3>
              <p>
                Multiple ISP's that switches automatically for non-stop 
                Transmit and Recieve sessions.
              </p>
            </div>
          </div>
          <div class="col-12 col-md-6" style="height: 50vh;background-color:rgb(16, 5, 78)">
            <div class="card  text-light">
              <span class="mt-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-speedometer text-light border p-2" viewBox="0 0 16 16">
                  <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2M3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
                  <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.95 11.95 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0"/>
                </svg>
              </span>
              <h3 >Guaranted Speed</h3>
              <p>
                A trusted internet speed for your needs with back-up switching for non-stop activities online.
              </p>
            </div></div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6" style="height: 50vh;background-color:rgb(10, 48, 3)">
            <div class="card  text-light">
              <span class="mt-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-battery-charging text-light border p-2" viewBox="0 0 16 16">
                  <path d="M9.585 2.568a.5.5 0 0 1 .226.58L8.677 6.832h1.99a.5.5 0 0 1 .364.843l-5.334 5.667a.5.5 0 0 1-.842-.49L5.99 9.167H4a.5.5 0 0 1-.364-.843l5.333-5.667a.5.5 0 0 1 .616-.09z"/>
                  <path d="M2 4h4.332l-.94 1H2a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h2.38l-.308 1H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2"/>
                  <path d="M2 6h2.45L2.908 7.639A1.5 1.5 0 0 0 3.313 10H2zm8.595-2-.308 1H12a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H9.276l-.942 1H12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"/>
                  <path d="M12 10h-1.783l1.542-1.639q.146-.156.241-.34zm0-3.354V6h-.646a1.5 1.5 0 0 1 .646.646M16 8a1.5 1.5 0 0 1-1.5 1.5v-3A1.5 1.5 0 0 1 16 8"/>
                </svg>
              </span>
              <h3>With Back-up Power</h3>
              <p>
                Guaranted back-up power to avoid internet interuption cause by electricity failure.
              </p>
            </div>
          </div>
          <div class="col-12 col-md-6" style="height:50vh;background-color:rgb(88, 27, 3)">
            <div class="card  text-light">
              <span class="mt-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-tools text-light border p-2" viewBox="0 0 16 16">
                  <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3q0-.405-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
                </svg>
              </span>
              <h3 >Other Services Offer</h3>
              <p >
                Computer & Laptop repair, Online Services and Assistance, Website making,
                Pisowifi repair, and Home Automation(Electrical and Mechanical).
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="background-color: rgb(85, 3, 85)">
      <div class="col-12 col-lg-3 col-md-6 py-4 px-5 py-lg-3 ">
        <div class="card text-center p-0 bg-white shadow" style="border: 1px solid rgb(85, 3, 85)">
          <div class="card-header border-0 bg-dark text-light">
            <h5 >UPTO 20MBPS</h5>
          </div>
          <div class="card-body">
            <h1 class="mt-4 mb-0 pb-0 position-relative fw-bold" style="font-size: 50px"> <span style="font-size: 20px;position:absolute;margin-left:-15px;margin-top:10px">&#8369;</span>800</h1>
            <p  style="margin-top:-10px">Monthly</p>
          <p class="mt-5 fw-bold">Free NETFLIX</p>
          </div>
          <div class="card-footer border-0 bg-white">
            <button class="btn btn-warning w-50 m-auto py-2 px-3 mb-4">Apply Now</button>
          </div>
        </div>
      </div>
      {{-- PLAN 1000 --}}
      <div class="col-12 col-lg-3 col-md-6 py-4 px-5 py-lg-3 ">
        <div class="card text-center p-0 bg-white shadow" style="border: 1px solid rgb(85, 3, 85)">
          <div class="card-header border-0 bg-dark text-light">
            <h5 >UPTO 30MBPS</h5>
          </div>
          <div class="card-body">
            <h1 class="mt-4 mb-0 pb-0 position-relative fw-bold" style="font-size: 50px"> <span style="font-size: 20px;position:absolute;margin-left:-15px;margin-top:10px">&#8369;</span>1000</h1>
            <p  style="margin-top:-10px">Monthly</p>
          <p class="mt-5 fw-bold">Free NETFLIX</p>
          </div>
          <div class="card-footer border-0 bg-white">
            <button class="btn btn-warning w-50 m-auto py-2 px-3 mb-4">Apply Now</button>
          </div>
        </div>
      </div>
      {{-- PLAN 1300 --}}
      <div class="col-12 col-lg-3 col-md-6 py-4 px-5 py-lg-3 ">
        <div class="card text-center p-0 bg-white shadow" style="border: 1px solid rgb(85, 3, 85)">
          <div class="card-header border-0 bg-dark text-light">
            <h5 >UPTO 50MBPS</h5>
          </div>
          <div class="card-body">
            <h1 class="mt-4 mb-0 pb-0 position-relative fw-bold" style="font-size: 50px"> <span style="font-size: 20px;position:absolute;margin-left:-15px;margin-top:10px">&#8369;</span>1300</h1>
            <p  style="margin-top:-10px">Monthly</p>
          <p class="mt-5 fw-bold">Free NETFLIX</p>
          </div>
          <div class="card-footer border-0 bg-white">
            <button class="btn btn-warning w-50 m-auto py-2 px-3 mb-4">Apply Now</button>
          </div>
        </div>
      </div>
      {{-- PLAN 1500 --}}
      <div class="col-12 col-lg-3 col-md-6 py-4 px-5 py-lg-3 ">
        <div class="card text-center p-0 bg-white shadow" style="border: 1px solid rgb(85, 3, 85)">
          <div class="card-header border-0 bg-dark text-light">
            <h5 >UPTO 100MBPS</h5>
          </div>
          <div class="card-body">
            <h1 class="mt-4 mb-0 pb-0 position-relative fw-bold" style="font-size: 50px"> <span style="font-size: 20px;position:absolute;margin-left:-15px;margin-top:10px">&#8369;</span>1500</h1>
            <p  style="margin-top:-10px">Monthly</p>
          <p class="mt-5 fw-bold">Free NETFLIX</p>
          </div>
          <div class="card-footer border-0 bg-white">
            <button class="btn btn-warning w-50 m-auto py-2 px-3 mb-4">Apply Now</button>
          </div>
        </div>
      </div>
    </div>
@endsection