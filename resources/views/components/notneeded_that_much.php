<section id="blog" class="blog">
          <div class="custom-container">
          
            <div class="row">
              @if ($instaData)
            @foreach ($instaData as $data)
              <div class="col-lg-4  col-md-6 d-flex align-items-stretch  blog-box" data-aos="fade-up">
                <article class="entry">

                  <div class="entry-img">
                    @if (@isset($data['caption'])) 
                      <img src="{{$data['media_url']}}" alt="{{$data['caption']}}" class="img-fluid">
                    @else
                    <img src="{{$data['media_url']}}"  class="img-fluid">
                    @endif
                    
                  </div>

                  <h2 class="entry-title">
                  @if (@isset($data['caption'])) 
                  <a href="{{$data['permalink']}}">{{$data['caption']}}</a>
                    @else
                    <a href="{{$data['permalink']}}">Instagram Post</a>
                    @endif
                    
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <time datetime="{{date('Y-m-d', strtotime($data['timestamp']))}}">{{date('Y-m-d', strtotime($data['timestamp']))}}</time></li>
                    </ul>
                  </div>

                </article><!-- End blog entry -->
              </div>
              @endforeach
              @endif

                </article><!-- End blog entry -->
              </div>

            </div>

          </div>
        </section><!-- End Blog Section -->

        <section  id="expertise-section" class="half-section parallax" data-parallax-background-ratio="0.5" style="background-image:url('images/portfolio-bg.jpg'); padding:0;height:150px; ">
            <div class="container">
                <div class="row align-items-stretch justify-content-center extra-small-screen" style="height:100px;">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h2 class="text-extra-dark-gray alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Our Expertise</h2>
                    </div>
                </div>
            </div>
        </section>
<section class="py-0 wow animate__fadeIn" >
                <div class="container-fluid lg-padding-30px-lr xs-padding-15px-lr">
                    <div class="row row-cols-1 row-cols-xl-4 row-cols-md-2">
                        <!-- start interactive banner item -->
                        <div class="col interactive-banners-style-09 lg-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s" style="min-height: 600px">                        
                            <figure class="m-0" style="height:100%">
                                <img src="assets/img/banner_rest/banner_12.jpg" alt="" style="height:100%"/>
                                <div class="opacity-very-light bg-black"></div>
                                <figcaption>
                                    <div class="interactive-banners-content align-items-start padding-4-rem-all last-paragraph-no-margin">
                                        <h6 class="alt-font font-weight-500 text-white w-55 position-relative z-index-1 xl-w-80 lg-w-40 md-w-50 xs-w-60">Architecture design</h6>
                                        <span class="interactive-banners-hover-icon w-40px h-40px line-height-44px text-center d-inline-block bg-white rounded-circle"><i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i></span>
                                    </div>
                                    <div class="interactive-banners-hover-action align-items-end d-flex bg-transparent-gradiant-white-black">
                                        <div class="padding-4-rem-all last-paragraph-no-margin">
                                            <p class="interactive-banners-action-content w-85 md-w-95">Lorem ipsum is simply dummy text of the printing and typesetting.</p>
                                            <a href="/projects?category=A" class="alt-font text-parrot-green text-white-hover text-small text-uppercase d-inline-block font-weight-500">See Portfolio<i class="feather icon-feather-arrow-right align-middle margin-5px-left"></i></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end interactive banner item -->
                        <!-- start interactive banner item -->
                        <div class="col interactive-banners-style-09 lg-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.4s" style="min-height: 600px">                        
                            <figure class="m-0" style="height:100%">
                                <img src="assets/img/banner_rest/banner_22.jpg" alt=""  style="height:100%"/>
                                <div class="opacity-very-light bg-black"></div>
                                <figcaption>
                                    <div class="interactive-banners-content align-items-start padding-4-rem-all last-paragraph-no-margin">
                                        <h6 class="alt-font font-weight-500 text-white w-55 position-relative z-index-1 xl-w-80 lg-w-40 md-w-50 xs-w-60">Structure design</h6>
                                        <span class="interactive-banners-hover-icon w-40px h-40px line-height-44px text-center d-inline-block bg-white rounded-circle"><i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i></span>
                                    </div>
                                    <div class="interactive-banners-hover-action align-items-end d-flex bg-transparent-gradiant-white-black">
                                        <div class="padding-4-rem-all last-paragraph-no-margin">
                                            <p class="interactive-banners-action-content w-85 md-w-95">Lorem ipsum is simply dummy text of the printing and typesetting.</p>
                                            <a href="/projects?category=A" class="alt-font text-parrot-green text-white-hover text-small text-uppercase d-inline-block font-weight-500">See Portfolio<i class="feather icon-feather-arrow-right align-middle margin-5px-left"></i></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end interactive banner item -->
                        <!-- start interactive banner item -->
                        <div class="col interactive-banners-style-09 sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.6s" style="min-height: 600px">
                            <figure class="m-0" style="height:100%">
                                <img src="assets/img/banner_rest/banner_23.jpg" alt=""  style="height:100%"/>
                                <div class="opacity-very-light bg-black"></div>
                                <figcaption>
                                    <div class="interactive-banners-content align-items-start padding-4-rem-all last-paragraph-no-margin">
                                        <h6 class="alt-font font-weight-500 text-white w-55 position-relative z-index-1 xl-w-80 lg-w-40 md-w-50 xs-w-60">Furnitures design</h6>
                                        <span class="interactive-banners-hover-icon w-40px h-40px line-height-44px text-center d-inline-block bg-white rounded-circle"><i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i></span>
                                    </div>
                                    <div class="interactive-banners-hover-action align-items-end d-flex bg-transparent-gradiant-white-black">
                                        <div class="padding-4-rem-all last-paragraph-no-margin">
                                            <p class="interactive-banners-action-content w-85 md-w-95">Lorem ipsum is simply dummy text of the printing and typesetting.</p>
                                            <a href="/projects?category=A" class="alt-font text-parrot-green text-white-hover text-small text-uppercase d-inline-block font-weight-500">See Portfolio<i class="feather icon-feather-arrow-right align-middle margin-5px-left"></i></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end interactive banner item -->
                        <!-- start interactive banner item -->
                        <div class="col interactive-banners-style-09 wow animate__fadeIn" data-wow-delay="0.8s" style="min-height: 600px">
                            <figure class="m-0" style="height:100%">
                                <img src="assets/img/banner_rest/banner_42.jpg" alt=""  style="height:100%"/>
                                <div class="opacity-very-light bg-black"></div>
                                <figcaption>
                                    <div class="interactive-banners-content align-items-start padding-4-rem-all last-paragraph-no-margin">
                                        <h6 class="alt-font font-weight-500 text-white w-55 position-relative z-index-1 xl-w-80 lg-w-40 md-w-50 xs-w-60">Landscape design</h6>
                                        <span class="interactive-banners-hover-icon w-40px h-40px line-height-44px text-center d-inline-block bg-white rounded-circle"><i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i></span>
                                    </div>
                                    <div class="interactive-banners-hover-action align-items-end d-flex bg-transparent-gradiant-white-black">
                                        <div class="padding-4-rem-all last-paragraph-no-margin">
                                            <p class="interactive-banners-action-content w-85 md-w-95">Lorem ipsum is simply dummy text of the printing and typesetting.</p>
                                            <a href="/projects?category=A" class="alt-font text-parrot-green text-white-hover text-small text-uppercase d-inline-block font-weight-500">See Portfolio<i class="feather icon-feather-arrow-right align-middle margin-5px-left"></i></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end interactive banner item -->
                    </div>
                </div>
            </section>

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
                            <a href="{{url('/research')}}" class="btn btn-large btn-link text-red text-red-hover align-self-start">Our Services</a>
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