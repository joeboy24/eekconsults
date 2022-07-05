
@extends('layouts.app')


@section('navlist')

  <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
  <li class="nav-item dropbtn"><a href="/about" class="nav-link">About</a></li>
  <li class="nav-item active dropdown"><a href="" class="nav-link dropbtn">Admissions</a>
    <div class="dropdown-content">
      <a class="nav-item dropdown" href="/admissions#apply"><i class="fa fa-send li_icon"></i>&nbsp;&nbsp; How to Apply</a>
      <a class="nav-item dropdown" href="/admissions#programs"><i class="fa fa-graduation-cap li_icon"></i>&nbsp; Programs Offered</a>
    </div>
  </li>
  <li class="nav-item"><a href="/news" class="nav-link">News</a></li>
  <li class="nav-item dropdown"><a class="nav-link dropbtn">Portals</a>
    <div class="dropdown-content">
      <a href="/exam_portal"><i class="fa fa-pencil li_icon"></i>&nbsp;&nbsp; Examinations</a>
      <a href="/student_portal"><i class="fa fa-graduation-cap li_icon"></i>&nbsp; Student Portal</a>
      <a href="/staff_portal"><i class="fa fa-user-circle-o li_icon"></i>&nbsp;&nbsp; Staff Portal</a>
      <a href="/admin_portal"><i class="fa fa-unlock-alt li_icon"></i>&nbsp;&nbsp;&nbsp; Administration</a>
    </div>
  </li> 
  <li class="nav-item"><a href="#my_footer" class="nav-link">Contact</a></li>
  {{-- <li class="nav-item"><a href="/gallery" class="nav-link">Gallery</a></li> --}}
  <li class="nav-item cta"><a href="https://apply.healthtraining.gov.gh/application" class="nav-link"><span>Apply Now</span></a></li>
	        
@endsection


@section('content')

<section class="home-slider owl-carousel">
  <div class="slider-item bread-item" style="background-image: url('/storage/classified/Nursing/img5.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container" data-scrollax-parent="true">
      <div class="row slider-text align-items-end">
        <div class="col-md-7 col-sm-12 ftco-animate mb-5">
          <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/">Home</a></span> <span>About</span></p>
          <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Admissions</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Goal -->
<section id="apply" class="my_section1 myBg">
  <div class="bg_overlay">
    <div class="blank_space2" style="height: 70px"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-3 goal_left">
          <h2>APPLY</h2>
          <h2>here</h2>
          <p class="phone_globe"><i class="fa fa-globe"></i>&nbsp;&nbsp;apply.healthtraining.gov.gh</p>
          <span>&nbsp;</span>
        </div>

        <div class="col-md-5 goal_right">
          <h2>Follow procedure bellow to apply</h2>
          <p><i class="fa fa-check"></i>&nbsp;&nbsp;Purchase a voucher for 200GH from GCB or ADB</p>
          <p><i class="fa fa-check"></i>&nbsp;&nbsp;Visit 'healthtraining.gov.gh'</p>
          <p><i class="fa fa-check"></i>&nbsp;&nbsp;Click on apply located on top of this page</p>
          <p><i class="fa fa-check"></i>&nbsp;&nbsp;Enter serial and pin found on voucher</p>
          <p><i class="fa fa-check"></i>&nbsp;&nbsp;Fill form with your details</p>
          <p><i class="fa fa-check"></i>&nbsp;&nbsp;Attach certificate/s and photo</p>
          <p><i class="fa fa-check"></i>&nbsp;&nbsp;Submit and print-out application summary</p>
          <p><i class="fa fa-check"></i>&nbsp;&nbsp;Regularly check your application status with pin and serial.</p>
          <h2>&nbsp;</h2>
          <p class="phone_globe">{{ $company->name }} - Akim-Oda</p>
          <p class="phone_globe"><i class="fa fa-phone-square"></i>&nbsp;&nbsp;{{ $company->contact }}</p>
          <p>&nbsp;</p>
        </div>

        <div class="col-md-4 goal_right">
          <h2>Admission</h2>
          <p><i class="fa fa-check"></i>&nbsp;&nbsp;Confirm invitation and attend interview</p>
          <p><i class="fa fa-check"></i>&nbsp;&nbsp;Check interview result</p>
          <p><i class="fa fa-check"></i>&nbsp;&nbsp;Check and print out offer letter</p>
          <p><i class="fa fa-check"></i>&nbsp;&nbsp;Confirm Admission Fee</p>
          <p><i class="fa fa-check"></i>&nbsp;&nbsp;Pay at designated bank</p>
          <p><i class="fa fa-check"></i>&nbsp;&nbsp;Report to college</p>
          
          <h2>Academics</h2>
          <p><i class="fa fa-check"></i>&nbsp;&nbsp;Report to school on time</p>
          <p><i class="fa fa-check"></i>&nbsp;&nbsp;Attend classes</p>
          <p><i class="fa fa-check"></i>&nbsp;&nbsp;Take part in quizzes and exams</p>
          <p><i class="fa fa-check"></i>&nbsp;&nbsp;Pass your clinicals</p>
          <p><i class="fa fa-check"></i>&nbsp;&nbsp;Pass final exams</p>
        </div>
      </div>
    </div>
    <div class="blank_space2" style="height: 70px"></div>
  </div>
</section>



<!-- Admissions -->
<section id="programs" class="my_section1 myBlue2">
  <div class="blank_space" style="height: 70px"></div>

  <div class="blank_space2" style="height: 70px"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 goal_left">
        <h2 style="color: #fff">Programs</h2>
        <h2 style="color: #fff">offered</h2>
        <span>&nbsp;</span>
      </div>

      <div class="col-md-8 goal_right">
        <h4 style="color: #fff"><i class="fa fa-bullseye"></i>&nbsp;&nbsp;The School currently runs a 3year HND Nursing programme with options in the final year. The options are: Dip. Public Health Nursing, Dip. Post Basic Midwifery, Cert. Community Health Nursing.</h4>
        <span>&nbsp;</span>
        @foreach (session('program') as $program)
          <p><i class="fa fa-check"></i>&nbsp;&nbsp;{{ $program->program_name }}</p>
        @endforeach
      </div>

    </div>
  </div>
  <div class="blank_space2" style="height: 70px"></div>

  {{-- <div class="container">
    <div class="row">
      <div class="col-md-6 admi_left">
        <h2>{{ date('Y') }}</h2>
        <h2>Registration</h2>
        <h3>Gone Digital</h3>
        <a href="/sregister_course"><button type="button" class="admi_inverse">Register Now</button></a>
        <p class="phone_globe">chntc-akimoda.edu.gh/apply-now</p>
        <p class="phone_globe"><i class="fa fa-phone-square"></i>&nbsp;&nbsp;&nbsp;+233 (0)24 265 6449 &nbsp;&nbsp;&nbsp; 
        <i class="fa fa-globe"></i>&nbsp;&nbsp;chntc-akimoda.edu.gh</p>
      </div>

      <div class="col-md-6 admi_right">
        <h2>The School currently runs a 3year HND Nursing programme with options in the final year. The options are: Dip. Public Health Nursing, Dip. Post Basic Midwifery, Cert. Community Health Nursing.</h2>
      </div>
    </div>
  </div> --}}
  <div class="blank_space" style="height: 70px"></div>
</section>


@endsection
    
  