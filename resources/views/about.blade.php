
@extends('layouts.app')


@section('navlist')

  <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
  <li class="nav-item dropbtn"><a href="/about" class="nav-link">About</a></li>
  {{-- <li class="nav-item dropdown"><a href="" class="nav-link dropbtn">Other Pages</a> --}}
    <div class="dropdown-content">
      <a class="nav-item dropdown" href="/admissions#apply"><i class="fa fa-send li_icon"></i>&nbsp;&nbsp; How to Apply</a>
      <a class="nav-item dropdown" href="/admissions#programs"><i class="fa fa-graduation-cap li_icon"></i>&nbsp; Programs Offered</a>
    </div>
  </li>
  {{-- <li class="nav-item"><a href="/news" class="nav-link">News</a></li> --}}
  <li class="nav-item"><a href="#" class="nav-link">Products</a></li>
  <li class="nav-item"><a href="#" class="nav-link">Projects</a></li>
  <li class="nav-item"><a href="/#contact" class="nav-link">Contact</a></li>

@endsection


@section('content')
 
  <section class="home-slider owl-carousel">
    <div class="slider-item bread-item" style="background-image: url('/maindir/images/M5.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container" data-scrollax-parent="true">
        <div class="row slider-text align-items-end">
          <div class="col-md-7 col-sm-12 ftco-animate mb-5">
            <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/">Home</a></span> <span>About</span></p>
            <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">About Us</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Goal -->
  <section class="my_section1 myBg" style="background: url(/maindir/images/solar4.jpeg)">
    <div class="bg_overlay">
      <div class="blank_space2" style="height: 70px"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-3 goal_left">
            <h2>Our</h2>
            <h2>Goal</h2>
            {{-- <div class="blank_space" style="height: 30px"></div> --}}
            <p class="phone_globe"><i class="fa fa-globe"></i>&nbsp;&nbsp;www.eekconsults.com</p>
            {{-- <p class="phone_globe">{{ $company->name }}</p> --}}
          </div>

          <div class="col-md-9 goal_right">
            <h2>EEK Consults</h2>
            <p class="phone_globe">E.E.K CONSULTS AND ELECTRICALS LIMITED was formed to provide service in Electricals and electronic Installations (D.C., Lithium Battery), CCTV, I.T. Equipment’s supply and I.T. Consultancy, Engineering Services and Solar Panels.
              <br><br>The firm has competent and professional Engineers who have worked over the years, undertaking notable electrical installations, house Wiring, Installation of streetlights, CCTV, I.T. Consultancy (software developments) and telecommunication services.
              <br>The company has been in existence since June 2014 as E.E.K CONSULTS and was later changed from sole properties to Limited as E.E.K CONSULTS & ELECTRICALS LTD in 2019. However, it was fully registered by the Registrar General Department in June 2019. 
              The company has employed eleven (11) personnel (both Technical and Non-Technical). Also engages casual workers when the need be. Standard machinery required for contemporary work execution has been acquired.
            </p>
            <h2>Mission</h2>
            <p class="phone_globe">Our mission is to bring development to the IT/Electrical services engineering at national and international levels by providing expected services and products of the finest quality through improved ideas and methods.</p>
            
            <h2>Vission</h2>
            <p class="phone_globe">To be the market leader in I.T. and Engineering Services shortly and provide the highest level of technical expertise and technology to Architects, Engineers, Building officials, Government Departments, 
              Cooperative institutions and Real Estate Developers. We always intend to be committed to customer service, including sensitivity towards the cost, design of alternative solutions, concern for historical and cultural significance and maintenance considerations.</p>
            <p class="phone_globe"><i class="fa fa-phone-square"></i>&nbsp;&nbsp;0552490079 / 0243540415 / 0505094697</p>
          </div>
        </div>
      </div>
      <div class="blank_space2" style="height: 70px"></div>
    </div>
  </section>

  @if (count($about) > 0)
    <section class="ftco-section">
      <div class="container">
        <div class="row d-md-flex">
          {{-- <div class="col-md-3 ftco-animate img about-image order-md-first" style="background-image: url(/maindir/images/about.jpg);">
          </div> --}}
          <div class="col-md-9 offset-md-2 ftco-animate pr-md-5 order-md-last">
            <div class="row">
              <div class="col-md-12 nav-link-wrap mb-5">
                <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  @foreach ($about as $item)
                      @if ($y++ == 1)
                        <a class="nav-link active" id="linktab{{ $item->id }}" data-toggle="pill" href="#pills{{ $item->id }}" role="tab" aria-controls="pills2{{ $item->id }}" aria-selected="true">{{ $item->header }}</a>
                      @else
                        <a class="nav-link" id="linktab{{ $item->id }}" data-toggle="pill" href="#pills{{ $item->id }}" role="tab" aria-controls="pills2{{ $item->id }}" aria-selected="false">{{ $item->header }}</a>
                      @endif
                  @endforeach
                </div>
              </div>
              <div class="col-md-12 d-flex align-items-center">
                
                <div class="tab-content ftco-animate" id="v-pills-tabContent">

                  @foreach ($about as $item)
                    @if ($z++ == 1)
                      <div class="tab-pane fade show active" id="pills{{ $item->id }}" role="tabpanel" aria-labelledby="pannel{{ $item->id }}">
                        <div><h2 class="mb-4">{{ $item->title }}</h2><p>{{ $item->text }}</p></div>
                      </div>
                    @else
                      <div class="tab-pane fade show" id="pills{{ $item->id }}" role="tabpanel" aria-labelledby="pannel{{ $item->id }}">
                        <div><h2 class="mb-4">{{ $item->title }}</h2><p>{{ $item->text }}</p></div>
                      </div>
                    @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif

  <!--Achievements-->
  <section class="ftco-section-2">
    {{-- <div class="container-wrap">
      <div class="row d-flex no-gutters">
        <div class="col-md-6 img" style="background-image: url(/storage/classified/system_use/0122_0e57098.jpg);">
        </div>
        <div class="col-md-6 d-flex">
          <div class="about-wrap">
            <div class="heading-section heading-section-white mb-5 ftco-animate">
              <h2 class="mb-2">Meet The Administration</h2>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
            <div class="list-services d-flex ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-check2"></span>
              </div>
              <div class="text">
                <h3>Well Experience Team</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
            <div class="list-services d-flex ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-check2"></span>
              </div>
              <div class="text">
                <h3>High Technology Facilities</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
            <div class="list-services d-flex ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-check2"></span>
              </div>
              <div class="text">
                <h3>Comfortable Clinics</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    
    {{-- <div class="container-wrap mt-5">
      <div class="row d-flex no-gutters">
        <div class="col-md-6 img" style="background-image: url(/maindir/images/M3.jpg);">
        </div>
        <div class="col-md-6 d-flex">
          <div class="about-wrap">
            <div class="heading-section heading-section-white mb-5 ftco-animate">
              <h2 class="mb-2">{{$homepage->meet_header}}</h2>
              <p>{{$homepage->meet_body}}</p>
            </div>
  
            @if ($homepage->meet1_title != '')
              <div class="list-services d-flex ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-check2"></span>
                </div>
                <div class="text">
                  <h3>{{$homepage->meet1_title}}</h3>
                  <p>{{$homepage->meet1_text}}</p>
                </div>
              </div>
            @endif
  
            @if ($homepage->meet2_title != '')
              <div class="list-services d-flex ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-check2"></span>
                </div>
                <div class="text">
                  <h3>{{$homepage->meet2_title}}</h3>
                  <p>{{$homepage->meet2_text}}</p>
                </div>
              </div>
            @endif
  
            @if ($homepage->meet3_title != '')
              <div class="list-services d-flex ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-check2"></span>
                </div>
                <div class="text">
                  <h3>{{$homepage->meet3_title}}</h3>
                  <p>{{$homepage->meet3_text}}</p>
                </div>
              </div>
            @endif
  
          </div>
        </div>
      </div>
    </div> --}}
  </section>

@endsection
