
        <section class="half-section parallax" data-parallax-background-ratio="0.5" style="background-image:url('images/portfolio-bg.jpg'); padding:0;height:150px;">
            <div class="container">
                <div class="row align-items-stretch justify-content-center extra-small-screen" style="height:100px;">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h2 class="text-extra-dark-gray alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Team</h2>
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