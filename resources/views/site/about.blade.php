@extends('layout')

@section('title', 'About Studio Rhizome Team - Architects')

@section('content')
    @parent
    <section class="parallax" data-parallax-background-ratio="0.5" style="background-image:url('assets/img/team_image.jpg');">
            <div class="opacity-extra-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-stretch justify-content-center small-screen">
                    <div class="col-12 position-relative page-title-extra-small text-center d-flex align-items-center justify-content-center flex-column">
                        <h1 class="alt-font text-white opacity-6 margin-20px-bottom">About our company</h1>
                        <h2 class="text-white alt-font font-weight-500 w-55 md-w-65 sm-w-80 center-col xs-w-100 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">we are a creative design studio</h2>
                    </div>
                    <div class="down-section text-center"><a href="#about" class="section-link"><i class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section id="about" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 col-md-12 ps-lg-0 d-flex sm-margin-30px-bottom">
                        <div class="justify-content-center w-100 d-flex flex-column bg-white padding-5-half-rem-lr lg-padding-3-rem-lr md-padding-4-rem-all">
                            <span class="text-extra-large alt-font font-weight-500 text-black margin-20px-bottom d-block">Rhizome is a knowledge system of A-Centered
multiplicities.</span>
                            <p class="text-black opacity-7">A system of learning which challenges traditional
model by interconnection and non- hierarchical
approach. Explored initially as an application of
post-structural thought, Rhizome is characterized by
ceaselessly
established
connections
between
semiotic chains, organizations of power and
circumstances relative to the arts, sciences and
social struggles. Rhizome challenges the known
truth and arrives at a new dimension by using
principles
of
Connections,
Heterogeneity,
Multiplicity, Asignifying Rapture, Cartography and
Decalcomania.</p>
                            <a href="our-services.html" class="btn btn-large btn-link text-red text-red-hover align-self-start">Our Services</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6">
                        <img src="assets/img/banner_rest/banner_12.jpg" alt="" />
                        <div class="bg-white padding-3-half-rem-lr padding-3-rem-tb lg-padding-2-rem-all md-padding-2-half-rem-all sm-padding-4-rem-all last-paragraph-no-margin">
                            <span class="alt-font text-extra-dark-gray font-weight-500 margin-10px-bottom d-block">About Rhizome</span>
                            <p>“Rhizome has no beginning or end; it is always in the middle, between
things, interbeing, intermezzo.”</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="half-section parallax" data-parallax-background-ratio="0.5" style="background-image:url('images/portfolio-bg.jpg'); padding:0;height:150px;">
            <div class="container">
                <div class="row align-items-stretch justify-content-center extra-small-screen" style="height:100px;">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h2 class="text-extra-dark-gray alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Our Team</h2>
                    </div>
                </div>
            </div>
        </section>

        <section id="down-section" class="padding-100px-top md-padding-70px-top md-padding-40px-bottom sm-padding-50px-top xs-padding-20px-top sm-padding-25px-bottom" style="padding-top:0;">
            <div class="container-fluid padding-seven-lr xl-padding-three-lr md-padding-2-half-rem-lr xs-padding-15px-lr">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 justify-content-center">
                    <!-- start team item -->
                    @for ($i = 0; $i < count($persons); $i++)
                    <div class="col team-style-02 text-center">
                        <figure>
                            <div class="team-member-image border-radius-5px overflow-hidden modal-popup" style="cursor:pointer;" href="#team_popup{{$i}}">
                                <img alt="" src="assets/img/{{$persons[$i]->img}}" style="height:350px;">
                                
                            </div>
                            <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                                <div class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500" >{{$persons[$i]->name}}</div>
                                <span class="text-small text-uppercase">{{$persons[$i]->designation}}</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div id="team_popup{{$i}}" class="mfp-hide subscribe-popup">
                    @if ($persons[$i]->small_text == 0)
                    <div class="container-fluid">
                    @else
                    <div class="container">
                    @endif
                            
                                <div class="row justify-content-center">
                                    
                                    <div class="col-12 col-lg-8 col-md-10 bg-white modal-popup-main">
                                        
                                        <div class="row">
                                            <div class="col-12 col-sm-7 order-2 order-sm-1 newsletter-popup padding-6-rem-all lg-padding-4-rem-all xs-padding-3-rem-all">
                                                <span class="text-extra-large font-weight-500 text-extra-dark-gray d-block margin-10px-bottom">{{$persons[$i]->name}}</span>
                                                <span class="text-large font-weight-500 text-extra-dark-gray d-block margin-10px-bottom">{{$persons[$i]->designation}} - {{$persons[$i]->qualification}}</span>
                                                <p class="margin-30px-bottom xs-margin-20px-bottom">{{$persons[$i]->text}}</p>
                                                
                                            </div>
                                            <div class="col-12 col-sm-5 cover-background order-1 order-sm-2 xs-h-150px" style="background-image:url('assets/img/{{$persons[$i]->img}}');">
                                                <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                    <!-- end team item -->
                                    
                </div>
            </div>
        </section>
@endsection

