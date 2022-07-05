
@extends('layouts.app')

@section('navlist')
  <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
  <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
  <li class="nav-item active"><a href="/services" class="nav-link">Services</a></li>
  <li class="nav-item"><a href="/team" class="nav-link">team</a></li>
  <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
  <li class="nav-item"><a href="/#my_footer" class="nav-link">Contact</a></li>
  {{-- <li class="nav-item"><a href="/gallery" class="nav-link">Gallery</a></li> --}}
  <li class="nav-item cta"><a href="https://apply.healthtraining.gov.gh/application" class="nav-link"><span>Apply Now</span></a></li>
@endsection

@section('content')

  <section class="home-slider owl-carousel">
    <div class="slider-item bread-item" style="background-image: url('/maindir/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container" data-scrollax-parent="true">
        <div class="row slider-text align-items-end">
          <div class="col-md-7 col-sm-12 ftco-animate mb-5">
            <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span> <span>Services</span></p>
            <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Our Services Makes you Smile</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <!--Services-->
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <h2 class="mb-2">Our Service Keeps you Smile</h2>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-tooth"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Teeth Whitening</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-dental-care"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Teeth Cleaning</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>    
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-tooth-with-braces"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Quality Brackets</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-anesthesia"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Modern Anesthetic</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>

        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-dental-care"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Dental Calculus</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-bacteria"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Paradontosis</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>    
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-dentist"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Dental Implants</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-dental-care-1"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Tooth Braces</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
      </div>
    </div>
  </section>

  <!--Achievements-->
  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(/maindir/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-3 aside-stretch py-5">
          <div class=" heading-section heading-section-white ftco-animate pr-md-4">
            <h2 class="mb-3">Achievements</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
        <div class="col-md-9 py-5 pl-md-5">
          <div class="row">
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="text">
                  <strong class="number" data-number="14">0</strong>
                  <span>Years of Experience</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="text">
                  <strong class="number" data-number="4500">0</strong>
                  <span>Qualified Dentist</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="text">
                  <strong class="number" data-number="4200">0</strong>
                  <span>Happy Smiling Customer</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="text">
                  <strong class="number" data-number="320">0</strong>
                  <span>Patients Per Year</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection