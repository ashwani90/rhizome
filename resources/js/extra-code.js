
<header id="header">
<div class="logo-container">
<a class="logo custom-logo"><img src="assets/img/logo6.png" alt="" class="img-fluid"></a>

</div>
<nav class="navigation-menu">
<hr/>
    <ul>
     <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
     <hr/>
     <li class="{{ Request::is('research') ? 'active' : '' }}"><a href="{{ url('/research') }}">Expertise</a></li>
     <hr/>
      <li class="{{ Request::is('projects') ? 'active' : '' }}"><a href="{{ url('/projects') }}">Projects</a></li>
      <hr/>
      
      <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('/about') }}">About Us</a></li>
      <hr/>
      <li class="{{ Request::is('team') ? 'active' : '' }}"><a href="{{ url('/team') }}">Team</a></li>
      <hr/>
      <li class="{{ Request::is('social-posts') ? 'active' : '' }}"><a href="{{ url('/social-posts') }}">Social Posts</a></li>
      <hr/>
      <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}">Contact</a></li>
      <hr/>
      <!-- <li>
          <span class="material-icons-outlined">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
          </span>
      </li> -->
    </ul>

  </nav>
</header>


<section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

          <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

          <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(assets/img/slide/banner_1.png)">

            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/banner_2.png)">

            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/banner_3.png)">

            </div>
            <div class="carousel-item" style="background-image: url(assets/img/slide/banner_4.jpg)">

            </div>
            <div class="carousel-item" style="background-image: url(assets/img/slide/banner_5.jpg)">

            </div>
            <div class="carousel-item" style="background-image: url(assets/img/slide/banner_6.jpg)">

            </div>
            <div class="carousel-item" style="background-image: url(assets/img/slide/banner_7.jpg)">

            </div>

          </div>

          <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>

          <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>
      </section><!-- End Hero -->


      @extends('layout')

@section('title', 'Studio Rhizome - Architecture')


@section('content')
    @include('components.research')
        <section id="portfolio" class="portfolio">
          <div class="custom-container">

            <div class="section-title pl-5">
              <p>Recent Works</p>
            </div>

            <div class="row portfolio-container">
            @foreach ($projects as $project)
          @if ($project->not_show)
            @continue
          @endif

          @if ($project->next_empty)
            @if ($project->image_dim == 5 && !$project->add_below)
            <div class="{{$project->class}} full-height  portfolio-item filter-{{$project->type}}" >
              <div class="row"  style="margin:0;padding:0;">
                <div class="col-md-12 sol-sm-12 half-height">
                <div class="portfolio-wrap background-class" style="background-image: url(assets/img/projects/{{$project->url}});height:100%;background-position:center;">
                
                <div class="image-hover-content black-hover">
                                                        <span class="hover-content">
                                                            <span class="image-hover-title">{{$project->title}}</span>
                                                            @if(isset($project->location) && isset($project->date))
                                                            <span class="image-hover-subtitle">{{$project->location}} | 
                                                            {!! date('d/M/y', strtotime($project->date)) !!}  </span>
                                                         @elseif (isset($project->location))
                                                            <span class="image-hover-subtitle">{{$project->location}}</span>
                                                            @elseif (isset($project->date))
                                                            <span class="image-hover-subtitle">{!! date('d/M/y', strtotime($project->date)) !!} </span>
                                                            @else
                                                            <span class="image-hover-subtitle">{{$project->name}}</span>
                                                            @endif
                                                            <span class="image-hover-para">{{$project->subtitle}}</span>
                                                            <a href="/project?id={{$project->id}}" class="btn btn-default" title="">View</a>
                                                        </span>
                                                </div>
              </div>
              <div class="col-md-12 col-sm-12 half-height">
              <div class="text-place">
           <p >Be it master plans, buildings or interiors, <sup>our Process focuses on innovation</sup> that enriches our Clients’ lives and businesses, and hopes to add value to all it touches.</p>
</div>      
          </div>
                </div>
              
              </div>
            </div>
            @elseif ($project->image_dim == 4 || $project->image_dim == 2 || ($project->image_dim == 5 && $project->add_below))
            <div class="{{$project->class}} {{$project->height}} portfolio-item filter-{{$project->type}}" >
              
                <div class="portfolio-wrap background-class" style="background-image: url(assets/img/projects/{{$project->url}});height:100%;background-position:center;">
                
                <div class="image-hover-content black-hover">
                                                        <span class="hover-content">
                                                            <span class="image-hover-title">{{$project->title}}</span>
                                                            @if(isset($project->location) && isset($project->date))
                                                            <span class="image-hover-subtitle">{{$project->location}} | 
                                                            {!! date('d/M/y', strtotime($project->date)) !!}  </span>
                                                            @elseif (isset($project->location))
                                                            <span class="image-hover-subtitle">{{$project->location}}</span>
                                                            @elseif (isset($project->date))
                                                            <span class="image-hover-subtitle">{!! date('d/M/y', strtotime($project->date)) !!} </span>
                                                            @else
                                                            <span class="image-hover-subtitle">{{$project->name}}</span>
                                                            @endif
                                                            <span class="image-hover-para">{{$project->subtitle}}</span>
                                                            <a href="/project?id={{$project->id}}" class="btn btn-default" title="">View</a>
                                                        </span>
                                                </div>
</div>
</div>
              <div class="col-lg-4 col-md-4 col-sm-12 {{$project->height}} portfolio-item filter-{{$project->type}}" >
                <div class="text-place">
                <p >Be it master plans, buildings or interiors, <sup>our Process focuses on innovation</sup> that enriches our Clients’ lives and businesses, and hopes to add value to all it touches.</p>
</div>
           
                </div>
            @endif
            @elseif ($project->next_horizontal)
            
            <div class="{{$project->class}} full-height  portfolio-item filter-{{$project->type}}" >
              <div class="row" style="margin:0;padding:0;">
                <div class="col-md-12 sol-sm-12 half-height">
                <div class="portfolio-wrap background-class" style="background-image: url(assets/img/projects/{{$project->url}});height:100%;background-position:center;">
                
                <div class="image-hover-content black-hover">
                                                        <span class="hover-content">
                                                            <span class="image-hover-title">{{$project->title}}</span>
                                                            @if(isset($project->location) && isset($project->date))
                                                            <span class="image-hover-subtitle">{{$project->location}} | 
                                                            {!! date('d/M/y', strtotime($project->date)) !!}  </span>
                                                            @elseif (isset($project->location))
                                                            <span class="image-hover-subtitle">{{$project->location}}</span>
                                                            @elseif (isset($project->date))
                                                            <span class="image-hover-subtitle">{!! date('d/M/y', strtotime($project->date)) !!} </span>
                                                            @else
                                                            <span class="image-hover-subtitle">{{$project->name}}</span>
                                                            @endif
                                                            <span class="image-hover-para">{{$project->subtitle}}</span>
                                                            <a href="/project?id={{$project->id}}" class="btn btn-default" title="">View</a>
                                                        </span>
                                                </div>
              </div>
</div>
              <div class="col-md-12 col-sm-12 half-height" style="padding-top: 5px;">
              <div class="portfolio-wrap background-class" style="background-image: url(assets/img/projects/{{$project->nextPro->url}});height:100%;background-position:center;">
                
                <div class="image-hover-content black-hover">
                                                        <span class="hover-content">
                                                            <span class="image-hover-title">{{$project->nextPro->title}}</span>
                                                            @if(isset($project->nextPro->location) && isset($project->nextPro->date))
                                                            <span class="image-hover-subtitle">{{$project->nextPro->location}} | 
                                                            {!! date('d/M/y', strtotime($project->nextPro->date)) !!}  </span>
                                                            @elseif (isset($project->nextPro->location))
                                                            <span class="image-hover-subtitle">{{$project->nextPro->location}}</span>
                                                            @elseif (isset($project->nextPro->date))
                                                            <span class="image-hover-subtitle">{!! date('d/M/y', strtotime($project->nextPro->date)) !!} </span>
                                                            @else
                                                            <span class="image-hover-subtitle">{{$project->nextPro->name}}</span>
                                                            @endif
                                                            <span class="image-hover-para">{{$project->nextPro->subtitle}}</span>
                                                            <a href="/project?id={{$project->id}}" class="btn btn-default" title="">View</a>
                                                        </span>
                                                </div>
              </div>
            </div>
              
              </div>
            </div>
            @else
            <div class="{{$project->class}} {{$project->height}} portfolio-item filter-{{$project->type}}" >
              <div class="portfolio-wrap background-class" style="background-image: url(assets/img/projects/{{$project->url}});height:100%;background-position:center;">
                
                <div class="image-hover-content black-hover">
                                                        <span class="hover-content">
                                                            <span class="image-hover-title">{{$project->title}}</span>
                                                            @if(isset($project->location) && isset($project->date))
                                                            <span class="image-hover-subtitle">{{$project->location}} | 
                                                            {!! date('d/M/y', strtotime($project->date)) !!}  </span>
                                                            @elseif (isset($project->location))
                                                            <span class="image-hover-subtitle">{{$project->location}}</span>
                                                            @elseif (isset($project->date))
                                                            <span class="image-hover-subtitle">{!! date('d/M/y', strtotime($project->date)) !!} </span>
                                                            @else
                                                            <span class="image-hover-subtitle">{{$project->name}}</span>
                                                            @endif
                                                            <span class="image-hover-para">{{$project->subtitle}}</span>
                                                            <a href="/project?id={{$project->id}}" class="btn btn-default" title="">View</a>
                                                        </span>
                                                </div>
              </div>
            </div>
          @endif

          
          @endforeach

            </div>

          </div>
        </section>
       

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
          <div class="container">

            <div class="row">

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/marriot.jfif" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client2.svg" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client3.png" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client4.jpeg" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client-6.webp" class="img-fluid" alt="">
              </div>

            </div>

          </div>
        </section><!-- End Clients Section -->


        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title', 'Studio Rhizome')</title>
  <meta content="Studio Rhizome is an architecture practice involved in developing solutions for contemporary design, architecture and urban issues." name="description">
  <meta content="architectural design architecture architect near me residential houses industrial interior" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo2.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;1,100&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="">
  <!-- Vendor CSS Files -->
  <link href="fassetsvendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">
  <link href="assets/css/testimonial.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/swiper.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
        rel="stylesheet">
</head>
<body>
<main id="main">
    @include('components.header')
    @yield('content')

</main>
@include('components.footer')
</body>
</html>



<!-- ======= Clients Section ======= -->
<section id="clients" class="clients section-bg">
          <div class="container">

            <div class="row">

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/marriot.jfif" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client2.svg" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client3.png" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client4.jpeg" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client-6.webp" class="img-fluid" alt="">
              </div>

            </div>

          </div>
        </section><!-- End Clients Section -->


        <section id="breadcrumbs" class="breadcrumbs top-moved">
<div class="section-title pl-5">
              <p>Expertise</p>
            </div>
              <!-- <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                  <h2>Expertise</h2>
                </div>
              </div> -->
            </section>
    <section style="padding:0px!important; margin: 0 10px;" id="portfolio" class="portfolio">
        <div class="custom-container">
          <div class="row portfolio-cusatome-container">
            <div class="col-lg-6 col-sm-12 research-item filter-app">
              <div class="research-wrap" style="background-image: url(assets/img/banner_rest/banner_12.jpg)">
                <!-- <img src="assets/img/banner_rest/banner_12.jpg" class="img-fluid" alt=""> -->
                <h1 class="research__head">Design
                </h1>
                <div class="hover_research_item">
                  <ul>
                    <li>Masterplanning
                    </li>
                    <li>Urban Design
                    </li>
                    <li>Architecture Design
                    </li>
                    <li>Interior Design
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12 research-item filter-web">
              <div class="research-wrap"  style="background-image: url(assets/img/banner_rest/banner_22.jpg)">
                <!-- <img src="assets/img/banner_rest/banner_22.jpg" class="img-fluid" alt=""> -->
                <h1 class="research__head">Sustainability
                </h1>
                <div class="hover_research_item">
                  <ul>
                    <li>Energy Simulations
                    </li>
                    <li>Energy Audits
                    </li>
                    <li>Green Certification
                    </li>
                    <li>Net Zero Design
                    </li>
                    <li>Innovative Technologies
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12 research-item filter-app">
              <div class="research-wrap" style="background-image: url(assets/img/banner_rest/banner_23.jpg)">
                <!-- <img src="assets/img/banner_rest/banner_23.jpg" class="img-fluid" alt=""> -->
                <h1  class="research__head">Allied Engineering
                </h1>
                <div class="hover_research_item">
                  <ul>
                    <li>Structure
                    </li>
                    <li>Mechanical
                    </li>
                    <li>Electrical
                    </li>
                    <li>Fire Protection
                    </li>
                    <li>Plumbing
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12 research-item filter-card">
              <div class="research-wrap" style="background-image: url(assets/img/banner_rest/banner_42.jpg)">
                <img src="assets/img/banner_rest/banner_42.jpg" class="img-fluid" alt="">
                <h1 class="research__head">Project Management
                </h1>
                <div class="hover_research_item">
                  <ul>
                    <li>Construction Administration
                    </li>
                    <li>Project Management
                    </li>
                    <li>Value Engineering
                    </li>
                    <li>Quantity Estimation
                    </li>
                    <li>Quality Control
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- <section class="container-fluid">
                  <div class="custom-container-fluid">
                  <div id="projects" class="skew">
					<div>
            <a class="circle">
              <p>hotels & resorts</p>
            </a>
            <a class="circle">
              <p>Mixuse</p>
            </a>
            <a class="circle">
              <p>Residential</p>
            </a>
            <a class="circle">
              <p>Institutions</p>
            </a>
            <a class="circle">
              <p>Houses</p>
            </a>
            <a class="circle">
              <p>Architecture & Interior</p>
            </a>
            <a class="circle">
              <p>Interiors & Retail</p>
            </a>
            <a class="circle">
              <p>Hospitals</p>
            </a>
            <a class="circle">
              <p>Industrial</p>
            </a>
          </div>
					
	</div>
                       </div>
              </section> -->


              <footer id="footer" style="display:block;margin-bottom:10px;">
    <div class="container">
      <span class="copyright" style="float: left;">
        &copy; Copyright <strong><span>Studio Rhizome</span></strong>.
      </span>
      <span class="copyright" style="float: right;">
               <i class="icon-font icofont-instagram"></i>
                    <i class="icon-font icofont-facebook"></i>
                    <i class="icon-font icofont-linkedin"></i>
                    <i class="icon-font icofont-twitter"></i>
            </span>

    </div>
  </footer>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/js/swiper.min.js"></script>

  <!-- Template Main JS File -->
<!--    <script src="assets/js/testimonial.js"></script>-->
  <script src="assets/js/main.js"></script>
<script>
  var galleryThumbs = new Swiper('.gallery-thumbs', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: '2',
    // coverflowEffect: {
    //   rotate: 50,
    //   stretch: 0,
    //   depth: 100,
    //   modifier: 1,
    //   slideShadows : true,
    // },

    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 50,
      modifier: 6,
      slideShadows : false,
    },

  });


  var galleryTop = new Swiper('.swiper-container.testimonial', {
    speed: 400,
    spaceBetween: 50,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    direction: 'vertical',
    pagination: {
      clickable: true,
      el: '.swiper-pagination',
      type: 'bullets',
    },
    thumbs: {
      swiper: galleryThumbs
    }
  });

</script>
<section id="breadcrumbs" class="breadcrumbs pt-1" style="padding-bottom:0;margin-bottom:0;">
    <div class="section-title pl-5">
              <p>Projects</p>
            </div>
          
        </section>
    <section style="padding-top:0px; margin: 0 10px;" id="portfolio" class="portfolio">
        <div class="custom-container">
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-house">House</li>
                <li data-filter=".filter-masterplanning">Master Planning</li>
                <li data-filter=".filter-interior">Interior</li>
                <li data-filter=".filter-institutional">Institutional</li>
                <li data-filter=".filter-residential">Residential</li>
                <li data-filter=".filter-mixuse">Mixuse</li>
                <li data-filter=".filter-industrial">Industrial</li>
                <li data-filter=".filter-hotels">Hotels & Resorts</li>
                <li data-filter=".filter-others">Others</li>
              </ul>
            </div>
          </div>
          <div class="row portfolio-container">
          @foreach ($projects as $project)
          @if ($project->not_show)
            @continue
          @endif

          @if ($project->next_empty)
            @if ($project->image_dim == 5 && !$project->add_below)
            <div class="{{$project->class}} full-height  portfolio-item filter-{{$project->type}} image-type-{{$project->image_dim}}" >
              <div class="row"  style="margin:0;padding:0;">
                <div class="col-md-12 sol-sm-12 half-height">
                <div class="portfolio-wrap background-class" style="background-image: url(assets/img/projects/{{$project->url}});height:100%;background-position:center;">
                
                <div class="image-hover-content black-hover">
                                                        <span class="hover-content">
                                                            <span class="image-hover-title">{{$project->title}}</span>
                                                            @if(isset($project->location) && isset($project->date))
                                                            <span class="image-hover-subtitle">{{$project->location}} | 
                                                            {!! date('d/M/y', strtotime($project->date)) !!}  </span>
                                                            @elseif (isset($project->location))
                                                            <span class="image-hover-subtitle">{{$project->location}}</span>
                                                            @elseif (isset($project->date))
                                                            <span class="image-hover-subtitle">{!! date('d/M/y', strtotime($project->date)) !!} </span>
                                                            @else
                                                            <span class="image-hover-subtitle">{{$project->name}}</span>
                                                            @endif
                                                            <span class="image-hover-para">{{$project->subtitle}}</span>
                                                            <a href="/project?id={{$project->id}}" class="btn btn-default" title="">View</a>
                                                        </span>
                                                </div>
              </div>
              <div class="col-md-12 col-sm-12 half-height">
              <div class="text-place">
           <p >Be it master plans, buildings or interiors, <sup>our Process focuses on innovation</sup> that enriches our Clients’ lives and businesses, and hopes to add value to all it touches.</p>
</div>      
          </div>
                </div>
              
              </div>
            </div>
            @elseif ($project->image_dim == 4 || $project->image_dim == 2 || ($project->image_dim == 5 && $project->add_below))
            <div class="{{$project->class}} {{$project->height}} portfolio-item filter-{{$project->type}} image-type-{{$project->image_dim}}" >
              
                <div class="portfolio-wrap background-class" style="background-image: url(assets/img/projects/{{$project->url}});height:100%;background-position:center;">
                
                <div class="image-hover-content black-hover">
                                                        <span class="hover-content">
                                                            <span class="image-hover-title">{{$project->title}}</span>
                                                            @if(isset($project->location) && isset($project->date))
                                                            <span class="image-hover-subtitle">{{$project->location}} | 
                                                            {!! date('d/M/y', strtotime($project->date)) !!}  </span>
                                                            @elseif (isset($project->location))
                                                            <span class="image-hover-subtitle">{{$project->location}}</span>
                                                            @elseif (isset($project->date))
                                                            <span class="image-hover-subtitle">{!! date('d/M/y', strtotime($project->date)) !!} </span>
                                                            @else
                                                            <span class="image-hover-subtitle">{{$project->name}}</span>
                                                            @endif
                                                            <span class="image-hover-para">{{$project->subtitle}}</span>
                                                            <a href="/project?id={{$project->id}}" class="btn btn-default" title="">View</a>
                                                        </span>
                                                </div>
</div>
</div>
              <div class="col-lg-4 col-md-4 col-sm-12 {{$project->height}} portfolio-item filter-{{$project->type}}" >
                <div class="text-place">
                <p >Be it master plans, buildings or interiors, <sup>our Process focuses on innovation</sup> that enriches our Clients’ lives and businesses, and hopes to add value to all it touches.</p>
</div>
           
                </div>
            @endif
            @elseif ($project->next_horizontal)
            
            <div class="{{$project->class}} full-height  portfolio-item filter-{{$project->type}} image-type-{{$project->image_dim}}" >
              <div class="row" style="margin:0;padding:0;">
                <div class="col-md-12 sol-sm-12 half-height">
                <div class="portfolio-wrap background-class" style="background-image: url(assets/img/projects/{{$project->url}});height:100%;background-position:center;">
                
                <div class="image-hover-content black-hover">
                                                        <span class="hover-content">
                                                            <span class="image-hover-title">{{$project->title}}</span>
                                                            @if(isset($project->location) && isset($project->date))
                                                            <span class="image-hover-subtitle">{{$project->location}} | 
                                                            {!! date('d/M/y', strtotime($project->date)) !!}  </span>
                                                            @elseif (isset($project->location))
                                                            <span class="image-hover-subtitle">{{$project->location}}</span>
                                                            @elseif (isset($project->date))
                                                            <span class="image-hover-subtitle">{!! date('d/M/y', strtotime($project->date)) !!} </span>
                                                            @else
                                                            <span class="image-hover-subtitle">{{$project->name}}</span>
                                                            @endif
                                                            <span class="image-hover-para">{{$project->subtitle}}</span>
                                                            <a href="/project?id={{$project->id}}" class="btn btn-default" title="">View</a>
                                                        </span>
                                                </div>
              </div>
</div>
              <div class="col-md-12 col-sm-12 half-height" style="padding-top: 5px;">
              <div class="portfolio-wrap background-class" style="background-image: url(assets/img/projects/{{$project->nextPro->url}});height:100%;background-position:center;">
                
                <div class="image-hover-content black-hover">
                                                        <span class="hover-content">
                                                            <span class="image-hover-title">{{$project->nextPro->title}}</span>
                                                            @if(isset($project->nextPro->location) && isset($project->nextPro->date))
                                                            <span class="image-hover-subtitle">{{$project->nextPro->location}} | 
                                                            {!! date('d/M/y', strtotime($project->nextPro->date)) !!}  </span>
                                                            @elseif (isset($project->nextPro->location))
                                                            <span class="image-hover-subtitle">{{$project->nextPro->location}}</span>
                                                            @elseif (isset($project->nextPro->date))
                                                            <span class="image-hover-subtitle">{!! date('d/M/y', strtotime($project->nextPro->date)) !!} </span>
                                                            @else
                                                            <span class="image-hover-subtitle">{{$project->nextPro->name}}</span>
                                                            @endif
                                                            <span class="image-hover-para">{{$project->nextPro->subtitle}}</span>
                                                            <a href="/project?id={{$project->nextPro->id}}" class="btn btn-default" title="">View</a>
                                                        </span>
                                                </div>
              </div>
            </div>
              
              </div>
            </div>
            @else
            <div class="{{$project->class}} {{$project->height}} portfolio-item filter-{{$project->type}} image-type-{{$project->image_dim}}" >
              <div class="portfolio-wrap background-class" style="background-image: url(assets/img/projects/{{$project->url}});height:100%;background-position:center;">
                
                <div class="image-hover-content black-hover">
                                                        <span class="hover-content">
                                                            <span class="image-hover-title">{{$project->title}}</span>
                                                            @if(isset($project->location) && isset($project->date))
                                                            <span class="image-hover-subtitle">{{$project->location}} | 
                                                            {!! date('d/M/y', strtotime($project->date)) !!}  </span>
                                                            @elseif (isset($project->location))
                                                            <span class="image-hover-subtitle">{{$project->location}}</span>
                                                            @elseif (isset($project->date))
                                                            <span class="image-hover-subtitle">{!! date('d/M/y', strtotime($project->date)) !!} </span>
                                                            @else
                                                            <span class="image-hover-subtitle">{{$project->name}}</span>
                                                            @endif
                                                            <span class="image-hover-para">{{$project->subtitle}}</span>
                                                            <a href="/project?id={{$project->id}}" class="btn btn-default" title="">View</a>
                                                        </span>
                                                </div>
              </div>
            </div>
          @endif

          
          @endforeach
        </div>
        </div>
        </div>
      </section>

      <div class="fixed-circle">
      <a href="{{ url('/text-projects') }}"><i class="icofont-listing-box"></i></a>
      </div>

      <header>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top sticky navbar-boxed navbar-static-overlay" style="position:fixed;">
                <div class="container-fluid h-140px lg-h-100px md-h-70px">
                    <div class="col-6 col-lg-2 me-auto me-auto ps-lg-0">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo6.png" data-at2x="assets/img/logo6.png" class="default-logo" alt="">
                            <img src="assets/img/logo6.png" data-at2x="assets/img/logo6.png" class="alt-logo" alt="">
                            <img src="assets/img/logo6.png" data-at2x="assets/img/logo6.png" class="mobile-logo" alt="">
                        </a>
                    </div>
                    <div class="col-auto text-end pe-lg-0">
                        <div class="header-push-button">
                            <a href="javascript:void(0);" class="push-button ">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
            <!-- start hamburger menu popup -->
            <div class="hamburger-menu hamburger-menu-big-font bg-black w-25 xl-w-60 lg-w-70 md-w-50 sm-w-100">
                <a href="javascript:void(0);" class="close-menu text-white"><i class="ti-close"></i></a>
                <div class="row g-0 h-100">
                    <div class="col-lg-12">
                        <div class="row g-0 align-items-center justify-content-center h-100 padding-7-rem-all xs-padding-3-rem-all">
                            <div class="col-12 menu-list-wrapper menu-list-wrapper-small text-center text-md-start" data-scroll-options='{ "theme": "light" }'>
                                <!-- start menu -->
                                <ul class="menu-list alt-font w-100">
                                    <!-- start menu item -->
                                    <li class="menu-list-item"><a href="{{ url('/') }}">home</a>
                                    </li>
                                    <!-- end menu item -->
                                    <!-- start menu item -->
                                    <li class="menu-list-item"><a href="{{ url('/research') }}">expertise</a></li>
                                    <!-- end menu item -->
                                    <!-- start menu item -->
                                    <li class="menu-list-item"><a href="{{ url('/projects') }}">projects</a></li>
                                    <!-- end menu item -->
                                    <!-- start menu item -->
                                    <li class="menu-list-item"><a href="{{ url('/about') }}">about us</a></li>
                                    <!-- end menu item -->
                                    <!-- start menu item -->
                                    <li class="menu-list-item"><a href="{{ url('/social-posts') }}">social posts</a></li>
                                    <!-- end menu item -->
                                    <!-- start menu item -->
                                    <li class="menu-list-item"><a href="{{ url('/contact') }}">contact</a></li>
                                    <!-- end menu item -->
                                </ul>
                                <!-- end menu -->
                            </div>
                            <div class="col-12 d-none d-md-block">
                                <div class="alt-font margin-50px-top">
                                    <span class="margin-10px-bottom font-weight-300 text-extra-large d-inline-block">Let's work together?</span>
                                    <h6><a href="mailto:info@domain.com" class="text-white text-decoration-line-bottom">info@domain.com</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end hamburger menu popup -->
        </header>

        <section id="breadcrumbs" class="breadcrumbs pt-1">
    <div class="section-title pl-5">
              <p>Contact us</p>
            </div>
          
        </section>
    <section id="contact" class="contact" style="margin-top: -50px;">
          <div class="contact-container">
          <div class="row">
          <div class="col-lg-4 col-sm-12 contact-comp">
          <div class="pl-4 pt-2">
                                      <div class="info">
                                        <div class="address">
                                          <i class="icofont-google-map"></i>
                                          <h4>Location:</h4>
                                          <p>P 2/21, DLF Phase 2, Gurugram, Haryana 122001</p>
                                        </div>

                                        <div class="email">
                                          <i class="icofont-envelope"></i>
                                          <h4>Email:</h4>
                                          <p>info@studiorhizome.com</p>
                                        </div>

                                        <div class="phone">
                                          <i class="icofont-phone"></i>
                                          <h4>Call:</h4>
                                          <p>+91 01244351477</p>
                                        </div>

                                      </div>

                                    </div>
                                    </div>
            <div class="col-lg-8 col-sm-12 contact-comp">
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.7747818849425!2d77.08510031554358!3d28.486328497432797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce402455385a9%3A0xf232434f358e9d5a!2sStudio%20Rhizome!5e0!3m2!1sen!2sin!4v1633022847818!5m2!1sen!2sin" frameborder="0" allowfullscreen loading="lazy"></iframe>
            </div>
            </div>

          </div>
        </section><!-- End Contact Section -->
         <section class="form-container contact" style"margin: 0!important; padding: 0!important;">
                    <div class="container">

                    <form action="/send_mail" method="post" role="form" class="php-email-form">
                    @csrf
                                      <div class="form-row">
                                        <div class="col-md-6 form-group">
                                          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                          <div class="validate"></div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                          <div class="validate"></div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                        <div class="validate"></div>
                                      </div>
                                      <div class="form-group">
                                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                        <div class="validate"></div>
                                      </div>
                                      <div class="mb-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                      </div>
                                      <div class="text-center"><button type="submit">Send Message</button></div>
                                    </form>
                    </div>
                    </section>


                    <section id="breadcrumbs" class="breadcrumbs pt-1" style="margin-bottom:0;padding-bottom:0;">
    <div class="section-title pl-5" style="margin-top:0;padding-top:0;padding-bottom:20px;">
              <p>Project</p>
            </div>
          
        </section>
    <section class="breadcrumbs" style="margin-top:0;padding-top:0;">
         					<div class="container-fluid">
                             
                                 <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-7 project-image project-image-long" >
                                    <div style="background-image: url(assets/img/projects_all/{{$images[0]->url}});">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 project-image project-image-small">
                                    <div class="row">
                                    
                                        <div class="col-md-12 project-info" >
                                            <h1>{{$project->title}}</h1>
                                            <h4>{{$project->location}}</h4>
                                            <ul>
                                                <li><b>Project Office - </b> Gurugram</li>
                                                    <li>Typology - {{$project->type}}</li>
                                                    @if($project->scale)
                                                    <li>Scale - {{$project->scale}}</li>
                                                    @endif
                                                    @if($project->scope)
                                                    <li>{{$project->scope}}</li>
                                                    @endif
                                                    @if($project->opened)
                                                    <li>Completion - {{$project->opened}}</li>
                                                    @endif
                                                    @if($project->studio)
                                                    <li>{{$project->studio}}</li>
                                                    @endif
                                                    
                                            </ul>
                                        </div>
                                    </div>
                                
                                </div>
                                @if (count($images) > 1)
                                <div class="col-xs-12 col-md-12 project-image-long mt-2 image-type-2" >
                                <div class="background-class" style="background-image: url(assets/img/projects_all/{{$images[1]->url}});">
                                    </div>
                            </div>
                                @endif
                                @if (count($images) > 2)
                                <div class="col-xs-12 col-md-7 project-image project-image-long mt-2 image-type-2" >
                            <div class="background-class" style="background-image: url(assets/img/projects_all/{{$images[2]->url}});">
                                    </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-5 project-image project-image-small mt-2">
                            <div class="row">
                            @if (count($images) > 3)
                                    <div class="col-md-12 background-class" style="background-image: url(assets/img/projects_all/{{$images[3]->url}});">
                                    </div>
                                    @endif
                                    @if (count($images) > 4)
                                    <div class="col-md-12 background-class" style="background-image: url(assets/img/projects_all/{{$images[4]->url}});">
                                    </div>
                                    @endif
                            </div>
                            </div>
                            @endif
                            @if (count($images) > 5)
                            <div class="col-xs-12 col-sm-12 col-md-7 project-image project-image-long mt-2 image-type-2" >
                                    <div class="background-class"  style="background-image: url(assets/img/projects_all/{{$images[5]->url}});">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 project-image project-image-small mt-2">
                                    <div class="row">
                                    @if (count($images) > 6)
                                    <div class="col-md-12 background-class" style="background-image: url(assets/img/projects_all/{{$images[6]->url}});">
                                    </div>
                                    @endif
                                    
                                    </div>
                                
                                </div>
                            @endif
                            @if (count($images) > 7)

                                <div class="col-xs-12 col-sm-12 col-md-7 project-image project-image-long mt-2 image-type-2" >
                                    <div class="background-class"  style="background-image: url(assets/img/projects_all/{{$images[7]->url}});">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 project-image project-image-small mt-2">
                                    <div class="row project-image">
                                    @if (count($images) > 8)
                                    <div class="col-md-12 background-class" style="background-image: url(assets/img/projects_all/{{$images[8]->url}});">
                                    </div>
                                    @endif
                                    @if (count($images) > 9)
                                    <div class="col-md-12 background-class" style="background-image: url(assets/img/projects_all/{{$images[9]->url}});">
                                    </div>
                                    @endif
                                    </div>
                                
                                </div>
                           @endif

</div>
</div>

<div class="more-block fadeInUp animated container-fluid">
                <div class="row">
                    <div class="col-sm-12" style="padding: 20px 20px 10px 30px;">
                        <h3>Similar Works</h3>
                    </div>
								                    
					                    @foreach ($projects as $project)
                    <div class="col-md-4 col-sm-12 half-height portfolio-item">
              <div class="portfolio-wrap background-class" style="background-image: url(assets/img/projects/{{$project->url}});height:100%;background-position:center;">
                
                <div class="image-hover-content black-hover" style="background: rgba(0,0,0,0.7); cursor: pointer;">
                                                        <span class="hover-content">
                                                            <span class="image-hover-title">{{$project->title}}</span>
                                                            @if(isset($project->location) && isset($project->date))
                                                            <span class="image-hover-subtitle">{{$project->location}} | 
                                                            {!! date('d/M/y', strtotime($project->date)) !!}  </span>
                                                            @elseif (isset($project->location))
                                                            <span class="image-hover-subtitle">{{$project->location}}</span>
                                                            @elseif (isset($project->date))
                                                            <span class="image-hover-subtitle">{!! date('d/M/y', strtotime($project->date)) !!} </span>
                                                            @else
                                                            <span class="image-hover-subtitle">{{$project->name}}</span>
                                                            @endif
                                                            <span class="image-hover-para">{{$project->subtitle}}</span>
                                                            <a href="/project?id={{$project->id}}" class="btn btn-default" title="">View</a>
                                                        </span>
                                                </div>
              </div>
            </div>
            @endforeach
                                        
									                </div>
            </div>

         </section>

        <!-- SnapWidget -->
         <!-- <section class="our_projects_area">
                           <div class="container">
                               <p class="pStyle">Architecture is not just about making impressive buildings on paper, but more importantly to deliver projects which are functional, safe, easy to maintain, sustainable and long lasting. We have been engaging with architecture in a holistic
                                   manner since the inception of the firm and have all allied services like Structure, Engineering, Project Management, Value Engineering and Green Building as an integral part of the organisation. </p>
                           </div>
                       </section> -->