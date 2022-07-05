
@extends('layouts.app')


@section('navlist')

  <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
  <li class="nav-item dropbtn"><a href="/about" class="nav-link">About</a></li>
  <li class="nav-item dropdown"><a href="" class="nav-link dropbtn">Admissions</a>
    <div class="dropdown-content">
      <a class="nav-item dropdown" href="/admissions#apply"><i class="fa fa-send li_icon"></i>&nbsp;&nbsp; How to Apply</a>
      <a class="nav-item dropdown" href="/admissions#programs"><i class="fa fa-graduation-cap li_icon"></i>&nbsp; Programs Offered</a>
    </div>
  </li>
  <li class="nav-item"><a href="/news" class="nav-link">News</a></li>
  {{-- <li class="nav-item dropdown"><a href="" class="nav-link dropbtn">Programs</a>
    <div class="dropdown-content">
      @foreach (session('program') as $program)
        <a href="/student_portal">{{ $program->program_name }}</a>
      @endforeach
    </div>
  </li> --}}
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
            <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/">Home</a></span> <span>Gallery</span></p>
            <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Our Gallery</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <span>&nbsp;</span>
<!-- Gallery -->
<section class="ftco-gallery">
  <div class="container-wrap">
    <div class="row no-gutters">
      @foreach ($gallery as $item)
        <div class="col-md-3 ftco-animate">
          {{-- <li class="nav-item cta"><a class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Apply Now</span></a></li> --}}
            <a href="#" class="gallery img d-flex align-items-center" data-toggle="modal" data-target="#imgRequest{{$item->id}}" style="background-image: url(/storage/classified/gallery/{{$item->photo}});">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-search"></span>
              </div>
            </a>
        </div>

        <div class="modal fade" id="imgRequest{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="imgRequestLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="imgRequestLabel">Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              
                <img src="/storage/classified/gallery/{{$item->photo}}" width="100%">
                
              </div>
              
            </div>
          </div>
        </div>

      @endforeach
      {{-- <a href="/gallery"  class="gallery_btn"><span>View More..</span></a> --}}
    </div>
  </div>

    <span>&nbsp;</span>
    <div class="col-md-4">
        {{ $gallery->links() }}
    </div>

</section>

{{-- <div id="map"></div> --}}


@endsection
    
  