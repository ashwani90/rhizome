@extends('layout')

@section('title', 'Project Architecture')

@section('content')
    @parent
    <section class="cover-background h-700px sm-h-400px" style="background-image: url(assets/img/projects_all/{{$images[0]->url}});background-position: center;
    background-repeat: no-repeat;
    background-size: cover;"></section>
        <!-- end banner section -->
        <!-- start section -->
        <section class="wow animate__fadeIn padding-sixteen-lr xl-padding-ten-lr lg-padding-six-lr xs-no-padding-lr">
            <div class="container-fluid">
                <div class="row text-center text-sm-start">
                    <div class="col-12 col-lg-2 col-sm-4 xs-margin-15px-bottom">
                        <span class="alt-font text-small text-uppercase d-block">Year</span>
                        <span class="alt-font font-weight-500 text-extra-dark-gray">January 2020</span>
                    </div>
                    <div class="col-12 col-lg-2 col-sm-4 xs-margin-15px-bottom">
                        <span class="alt-font text-small text-uppercase d-block">Our role</span>
                        <span class="alt-font font-weight-500 text-extra-dark-gray">Product design</span>
                    </div>
                    <div class="col-12 col-lg-2 col-sm-4">
                        <span class="alt-font text-small text-uppercase d-block">Industry</span>
                        <span class="alt-font font-weight-500 text-extra-dark-gray">Food and drink</span>
                    </div>
                    <div class="col-12 col-xl-5 offset-xl-1 col-lg-6 md-margin-30px-top last-paragraph-no-margin">
                        <p>Simply oj is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. when an unknown printer took a galley.</p>
                    </div>                    
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->

        @if (count($images) > 3)
        <section class="py-0 wow animate__fadeIn">
            <div class="container-fluid px-0">
                <div class="row row-cols-1 row-cols-md-3 text-center g-0">
                    <div class="col sm-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s"><img src="assets/img/projects_all/{{$images[1]->url}}" class="w-100 h-400" alt=""/></div>
                    <div class="col sm-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s"><img src="assets/img/projects_all/{{$images[2]->url}}" class="w-100 h-400" alt=""/></div>
                    <div class="col wow animate__fadeIn" data-wow-delay="0.6s"><img src="assets/img/projects_all/{{$images[3]->url}}" class="w-100 h-400" alt=""/></div>
                </div>
            </div>
        </section>
                                @endif
        
        
        <!-- end section -->
        <!-- start section -->
        <section class="overlap-height">
            <div class="container">
                <div class="row overlap-gap-section">
                    <div class="col-12 col-lg-6 col-sm-12 text-center text-md-start md-margin-20px-bottom">
                        <div class="d-flex alt-font margin-15px-bottom"><span class="align-self-center w-30px h-1px bg-orange margin-10px-right d-none d-md-inline-block"></span><div class="flex-grow-1 text-orange font-weight-500">Fresh fruit juice</div></div>
                        <h4 class="alt-font font-weight-500 text-extra-dark-gray mb-0">A wonderful mix of food style and music</h4>
                    </div>
                    <div class="col-12 col-lg-6 text-center text-md-start last-paragraph-no-margin">
                        <p class="w-95 lg-w-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae lorem ligula. Fusce at mauris sit amet ligula tristique fringilla. Suspendisse sagittis nunc ante, sit amet aliquet turpis tristique. Nullam ultrices felis sit amet consectetur sodales. Phasellus nunc elit, porta quis iaculis.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        @if (count($images) == 2)
        <section class="bg-light-gray overflow-visible wow animate__fadeIn" >
            <div class="container">
                <div class="row overlap-section-three-fourth">
                    <div class="col px-md-0">
                        <ul class="portfolio-overlay portfolio-wrapper grid grid-loading grid-2col xl-grid-2col lg-grid-2col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                            <li class="grid-sizer"></li>
                            <!-- start lightbox gallery item -->
                            <li class="grid-item grid-item-double wow animate__fadeIn">
                                <a href="assets/img/projects_all/{{$images[1]->url}}" title="Lightbox gallery image title..." data-group="lightbox-gallery" class="lightbox-group-gallery-item">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-extra-dark-gray">
                                            <img src="assets/img/projects_all/{{$images[1]->url}}" alt="" />
                                            <div class="portfolio-hover justify-content-end d-flex flex-column padding-50px-tb lg-padding-30px-tb xs-padding-15px-tb">
                                                <i class="feather icon-feather-zoom-in portfolio-plus-icon font-weight-300 text-white absolute-middle-center icon-small move-top-bottom"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        @endif

        @if (count($images) == 3)
        <section class="bg-light-gray overflow-visible wow animate__fadeIn">
            <div class="container">
                <div class="row overlap-section-three-fourth">
                    <div class="col px-md-0">
                        <ul class="portfolio-overlay portfolio-wrapper grid grid-loading grid-2col xl-grid-2col lg-grid-2col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                            <li class="grid-sizer"></li>
                            <!-- start lightbox gallery item -->
                            <!-- end lightbox gallery item -->
                            <!-- start lightbox gallery item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                                <a href="assets/img/projects_all/{{$images[1]->url}}" title="Lightbox gallery image title..." data-group="lightbox-gallery" class="lightbox-group-gallery-item">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-extra-dark-gray">
                                            <img src="assets/img/projects_all/{{$images[1]->url}}" alt="" />
                                            <div class="portfolio-hover justify-content-end d-flex flex-column padding-50px-tb lg-padding-30px-tb xs-padding-15px-tb">
                                                <i class="feather icon-feather-zoom-in portfolio-plus-icon font-weight-300 text-white absolute-middle-center icon-small move-top-bottom"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end lightbox gallery item -->
                            <!-- start lightbox gallery item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.4s">
                                <a href="assets/img/projects_all/{{$images[2]->url}}" title="Lightbox gallery image title..." data-group="lightbox-gallery" class="lightbox-group-gallery-item">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-extra-dark-gray">
                                            <img src="assets/img/projects_all/{{$images[2]->url}}" alt="" />
                                            <div class="portfolio-hover justify-content-end d-flex flex-column padding-50px-tb lg-padding-30px-tb xs-padding-15px-tb">
                                                <i class="feather icon-feather-zoom-in portfolio-plus-icon font-weight-300 text-white absolute-middle-center icon-small move-top-bottom"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        @endif
        <!-- start section -->
        @if (count($images) > 4)
        <section class="bg-light-gray overflow-visible wow animate__fadeIn">
            <div class="container">
                <div class="row overlap-section-three-fourth">
                    <div class="col px-md-0">
                        <ul class="portfolio-overlay portfolio-wrapper grid grid-loading grid-2col xl-grid-2col lg-grid-2col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                            <li class="grid-sizer"></li>
                            <!-- start lightbox gallery item -->
                            @if (count($images) > 4)
                            <li class="grid-item grid-item-double wow animate__fadeIn">
                                <a href="assets/img/projects_all/{{$images[4]->url}}" title="Lightbox gallery image title..." data-group="lightbox-gallery" class="lightbox-group-gallery-item">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-extra-dark-gray">
                                            <img src="assets/img/projects_all/{{$images[4]->url}}" alt="" />
                                            <div class="portfolio-hover justify-content-end d-flex flex-column padding-50px-tb lg-padding-30px-tb xs-padding-15px-tb">
                                                <i class="feather icon-feather-zoom-in portfolio-plus-icon font-weight-300 text-white absolute-middle-center icon-small move-top-bottom"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endif
                            @if (count($images) > 6)
                            <!-- end lightbox gallery item -->
                            <!-- start lightbox gallery item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                                <a href="assets/img/projects_all/{{$images[5]->url}}" title="Lightbox gallery image title..." data-group="lightbox-gallery" class="lightbox-group-gallery-item">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-extra-dark-gray">
                                            <img src="assets/img/projects_all/{{$images[5]->url}}" alt="" />
                                            <div class="portfolio-hover justify-content-end d-flex flex-column padding-50px-tb lg-padding-30px-tb xs-padding-15px-tb">
                                                <i class="feather icon-feather-zoom-in portfolio-plus-icon font-weight-300 text-white absolute-middle-center icon-small move-top-bottom"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end lightbox gallery item -->
                            <!-- start lightbox gallery item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.4s">
                                <a href="assets/img/projects_all/{{$images[6]->url}}" title="Lightbox gallery image title..." data-group="lightbox-gallery" class="lightbox-group-gallery-item">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-extra-dark-gray">
                                            <img src="assets/img/projects_all/{{$images[6]->url}}" alt="" />
                                            <div class="portfolio-hover justify-content-end d-flex flex-column padding-50px-tb lg-padding-30px-tb xs-padding-15px-tb">
                                                <i class="feather icon-feather-zoom-in portfolio-plus-icon font-weight-300 text-white absolute-middle-center icon-small move-top-bottom"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endif
                            <!-- end lightbox gallery item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        @endif
        <section class="wow animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-5 col-lg-6 col-sm-8 text-center margin-5-rem-bottom lg-margin-4-rem-bottom">
                        <h5 class="alt-font text-extra-dark-gray font-weight-500">Similar Works</h5>
                    </div>
                </div>
            </div>
            <div class="container-fluid padding-nine-lr xl-padding-three-lr sm-padding-15px-lr">
                <div class="row">
                    <div class="col px-md-0">
                        <ul class="portfolio-overlay portfolio-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                            <li class="grid-sizer"></li>
                            <!-- start portfolio item -->
                            @foreach ($projects as $project)
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                                <a href="/project?id={{$project->id}}">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image" >
                                            <img src="assets/img/projects/{{$project->url}}" alt="" />
                                            <div class="portfolio-hover justify-content-between d-flex flex-row align-items-end padding-3-rem-tb padding-4-rem-lr xl-padding-2-rem-all">
                                                <div class="text-start">
                                                    <div class="alt-font text-small text-white text-uppercase margin-5px-bottom move-top-bottom-self"><span>{{$project->title}}</span></div>
                                                    <h6 class="font-weight-600 alt-font text-white text-uppercase no-margin-bottom move-bottom-top-self"><span>{{$project->subtitle}}</span></h6>
                                                </div>
                                                <span class="position-absolute top-50px right-50px move-right-left lg-top-30px lg-right-30px sm-top-20px sm-right-20px"><i class="ti-arrow-top-right icon-small text-white"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->  
@endsection
