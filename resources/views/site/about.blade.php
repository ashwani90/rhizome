@extends('layout')

@section('title', 'About Studio Rhizome Team - Architects')

@section('content')
    @parent
    <section class="parallax" style="background-image:url('assets/img/slide/Housing_Sydney.jpg');background-position: cover;">
            <div class="opacity-extra-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-stretch justify-content-center small-screen">
                    <div class="col-12 position-relative page-title-extra-small text-center d-flex align-items-center justify-content-center flex-column">
                        <h1 class="alt-font text-white opacity-6 margin-20px-bottom">About our company</h1>
                        <h2 class="about-us-main-text text-white alt-font font-weight-500 w-55 md-w-65 sm-w-80 center-col xs-w-100 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">We are an International architecture practice based on Sydney and Gurugram.</h2>
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
                            <a href="{{ url('/research') }}" class="btn btn-large btn-link text-red text-red-hover align-self-start">Our Services</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6">
                        <img src="assets/img/about-rhizome-architecture.jpg" alt="" />
                        <div class="bg-white padding-3-half-rem-lr padding-3-rem-tb lg-padding-2-rem-all md-padding-2-half-rem-all sm-padding-4-rem-all last-paragraph-no-margin">
                            <span class="alt-font text-extra-dark-gray font-weight-500 margin-10px-bottom d-block">About Rhizome</span>
                            <p>“Rhizome has no beginning or end; it is always in the middle, between
things, interbeing, intermezzo.”</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="half-section parallax" style="background-image:url('images/about-rhizome-studio-main.jpg'); background-position: right; padding:0;height:150px;">
            <div class="container">
                <div class="row align-items-stretch justify-content-center extra-small-screen" style="height:100px;">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h2 class="text-extra-dark-gray alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Our Team</h2>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="bg-light-gray">
            <div class="container">

            @for ($i = 0; $i < count($persons); $i++)
            <div id="small-team-page" class="row" style="margin: 30px 0;">
                    <div class="col-lg-4 col-xs-12 col-sm-12 pe-lg-0 d-flex md-margin-30px-bottom">
                        <div class="w-100 md-h-700px sm-h-550px xs-h-450px cover-background" style="background-image:url('assets/img/{{$persons[$i]->img}}');"></div>
                    </div>
                    <div class="col-lg-8 col-xs-12 col-md-8 col-sm-12 ps-lg-0 d-flex sm-margin-30px-bottom">
                        <div class="justify-content-center w-100 d-flex flex-column padding-5-half-rem-lr lg-padding-3-rem-lr md-padding-4-rem-all">
                            <span class="text-extra-large alt-font font-weight-500 text-black margin-10px-bottom d-block">{{$persons[$i]->name}}</span>
                            <span class="text-large alt-font font-weight-400 text-black margin-20px-bottom d-block">{{$persons[$i]->designation}} - {{$persons[$i]->qualification}}</span>
                            <p class="text-black opacity-7">{{$persons[$i]->text}}</p>
                        </div>
                    </div>
                </div>
            
                @endfor

            @for ($i = 0; $i < count($persons); $i++)
            <div id="team-page" class="row" style="margin: 30px 0;">
                    <div class="col-lg-4 col-xs-12 col-sm-12 pe-lg-0 d-flex md-margin-30px-bottom">
                        <div class="w-100 md-h-700px sm-h-550px xs-h-450px cover-background" style="background-image:url('assets/img/{{$persons[$i]->img}}');"></div>
                    </div>
                    <div class="col-lg-8 col-xs-12 col-md-8 col-sm-12 ps-lg-0 d-flex sm-margin-30px-bottom">
                        <div class="justify-content-center w-100 d-flex flex-column padding-5-half-rem-lr lg-padding-3-rem-lr md-padding-4-rem-all">
                            <span class="text-extra-large alt-font font-weight-500 text-black margin-10px-bottom d-block">{{$persons[$i]->name}}</span>
                            <span class="text-large alt-font font-weight-400 text-black margin-20px-bottom d-block">{{$persons[$i]->designation}} - {{$persons[$i]->qualification}}</span>
                            <p class="text-black opacity-7">{{$persons[$i]->text}}</p>
                        </div>
                    </div>
                </div>
            
                @endfor
               
            </div>
        </section>

         <section id="down-section" class="padding-100px-top md-padding-70px-top md-padding-40px-bottom sm-padding-50px-top xs-padding-20px-top sm-padding-25px-bottom" style="padding-top:0;">
            <div class="container-fluid padding-seven-lr xl-padding-three-lr md-padding-2-half-rem-lr xs-padding-15px-lr">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 justify-content-center">
                    <!-- start team item -->
                    @for ($i = 0; $i < count($people); $i++)
                    <div class="col team-style-02 text-center">
                        <figure>
                            <div class="team-member-image border-radius-5px overflow-hidden modal-popup" style="cursor:pointer;" href="#team_popup{{$i}}">
                                <img alt="" src="assets/img/{{$people[$i]->img}}" style="height:350px;">
                                
                            </div>
                            <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                                <div class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500" >{{$people[$i]->name}}</div>
                                <span class="text-small text-uppercase">{{$people[$i]->designation}}</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div id="team_popup{{$i}}" class="mfp-hide subscribe-popup">
                    @if ($people[$i]->small_text == 0)
                    <div class="container-fluid">
                    @else
                    <div class="container">
                    @endif
                            
                                <div class="row justify-content-center">
                                    
                                    <div class="col-12 col-lg-8 col-md-10 bg-white modal-popup-main">
                                        
                                        <div class="row">
                                            <div class="col-12 col-sm-7 order-2 order-sm-1 newsletter-popup padding-6-rem-all lg-padding-4-rem-all xs-padding-3-rem-all">
                                                <span class="text-extra-large font-weight-500 text-extra-dark-gray d-block margin-10px-bottom">{{$people[$i]->name}}</span>
                                                <span class="text-large font-weight-500 text-extra-dark-gray d-block margin-10px-bottom">{{$people[$i]->designation}} - {{$people[$i]->qualification}}</span>
                                                <p class="margin-30px-bottom xs-margin-20px-bottom">{{$people[$i]->text}}</p>
                                                
                                            </div>
                                            <div class="col-12 col-sm-5 cover-background order-1 order-sm-2 xs-h-150px" style="background-image:url('assets/img/{{$people[$i]->img}}');">
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
            <div class="container">
            <div class="bg-medium-light-gray margin-6-rem-bottom margin-3-rem-top w-100 h-1px"></div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-xl-7 col-md-8 col-sm-10 text-center text-md-start sm-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.1s">
                        <h6 class="alt-font text-extra-dark-gray font-weight-500 mb-0 md-w-90 sm-w-100"><strong class="text-decoration-underline">Creative thinkers,</strong> seasoned architects and young talent apply for work with us.</h6>
                    </div>
                    <div class="col-12 col-xl-5 col-md-4 text-center text-md-end wow animate__fadeIn" data-wow-delay="0.2s">
                        <a href="contact-us-classic.html" class="btn btn-large btn-round-edge btn-transparent-fast-blue btn-slide-right-bg">Join the team<span class="bg-fast-blue"></span></a>
                    </div>
                </div>
</div>
        </section> 
@endsection

