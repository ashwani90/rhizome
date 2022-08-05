@extends('layout')

@section('title', 'Projects Architectural Design')

@section('content')
    @parent
    <section class="half-section parallax" data-parallax-background-ratio="0.5" style="background-image:url('images/portfolio-bg.jpg'); padding:0;">
            <div class="container">
                <div class="row align-items-stretch justify-content-center extra-small-screen">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h2 class="text-extra-dark-gray alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Projects</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-0" style="margin-top:-70px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8 text-center">
                        <!-- start filter navigation -->
                        <ul class="portfolio-filter grid-filter nav nav-tabs justify-content-center border-0 text-uppercase font-weight-500 alt-font padding-6-rem-bottom md-padding-4-half-rem-bottom sm-padding-2-rem-bottom">
                        <li class="nav active"><a data-filter="*" href="#" onclick="removeClasses()">All</a></li>
                            
                        <li class="nav"><a data-filter=".house" href="#" onclick="removeClasses()">Architecture</a></li>
                            <li class="nav"><a data-filter=".interior" href="#" onclick="removeClasses()">Interior</a></li>
                            <li class="nav"><a data-filter=".others" href="#" onclick="removeClasses()">Urban Design</a></li>
                        </ul>
                        <!-- end filter navigation -->
                    </div>
                    <div class="col-12 col-lg-4 nav-item dropdown simple-dropdown dropdown-big-size" style="background-color: white; padding-right: 50px;">
                                    <a class="nav-link typology-link" style="font-size: 15px; font-weight: 500; margin-left: 0px; border: 0;color: inherit;color: #828282;text-align:center;">FILTERS</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <ul class="dropdown-menu menu-background" role="menu" style="background-color: white; left: 50px;">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Type<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu portfolio-filter grid-filter justify-content-center">
                                                <li class="nav justify-content-center nav-first-item" ><a data-filter=".hotels" href="#">Houses</a></li>
                                                <li class="nav justify-content-center"><a data-filter=".interior" href="#">Institutional</a></li>
                                                <li class="nav justify-content-center"><a data-filter=".others" href="#">Residential</a></li>
                                                <li class="nav justify-content-center"><a data-filter=".others" href="#">Interior Design</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Office Location<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu portfolio-filter grid-filter ">
                                                <li class="nav  nav-first-item" ><a data-filter=".hotels" href="#" >Gurugram</a></li>
                                                <li class="nav"><a data-filter=".others" href="#">Sydney</a></li>
                                            </ul>
                                        </li>
                                    </ul>
</div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 filter-content">
                        <ul class="portfolio-colorful portfolio-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center" data-opacity="0.9" data-backgroundcolor="#58bc4b,#d9a026,#813ea9,#82bc13,#214bdf,#e28e1a,#04c05c,#e52d8c,#029bd3,#e77345,#0575c4,#e2731a,#9fb012,#13c7b8,#e8074c,">
                        @foreach ($projects as $project)      
                        <li class="grid-sizer"></li>
                            <!-- start portfolio item -->
                            @if ($project->is_half == 1)
                            <li class=" grid-item {{$project->type}} animate__fadeInUp wow">
                            @else
                            <li class=" grid-item {{$project->type}} grid-item-double animate__fadeInUp wow">
                            @endif
                            
                                <a href="/project?id={{$project->id}}">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image">
                                            <img src="assets/img/{{$project->url}}" alt="" />
                                            <div class="portfolio-hover bg-transparent-white justify-content-between d-flex flex-row align-items-end padding-3-rem-tb padding-4-rem-lr xl-padding-2-rem-all">
                                                <div class="text-start">
                                                    <div class="alt-font text-small text-white text-uppercase margin-5px-bottom opacity-7 move-top-bottom-self"><span>{{$project->title}}</span></div>
                                                    <h6 class="font-weight-600 alt-font text-white text-uppercase no-margin-bottom move-bottom-top-self"><span>{{$project->subtitle}}</span></h6>
                                                </div>
                                                <span class="position-absolute top-50px right-50px move-right-left lg-top-30px lg-right-30px sm-top-20px sm-right-20px"><i class="ti-arrow-top-right icon-small text-white"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                            <!-- end portfolio item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <script>
            function removeClasses() {
                var elementsToShow = document.querySelectorAll('.grid-item');
                Array.prototype.forEach.call(elementsToShow, function(element){
                element.classList.add('animate__fadeIn');
                element.classList.remove('animated');
                element.classList.remove('animatedFadeInUp');
                element.classList.remove('fadeInUp');
                element.classList.remove('show-on-scroll');
                element.classList.remove('is-visible');
            }); 
            }
            </script>
@endsection
