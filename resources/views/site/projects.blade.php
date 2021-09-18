@extends('layout')

@section('title', 'Studio Rhizome - Projects')

@section('content')
    @parent
    <section style="padding-top: 100px; margin: 0 10px;" id="portfolio" class="portfolio">
        <div class="custom-container">
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div>
          <div class="row portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                <div class="image-hover-content black-hover">
                                                        <span class="hover-content">
                                                            <span class="image-hover-title">Villa in the Woods</span>
                                                            <span class="image-hover-subtitle">Homes</span>
                                                            <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                            <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                        </span>
                                                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <div class="image-hover-content black-hover">
                                                                        <span class="hover-content">
                                                                            <span class="image-hover-title">Villa in the Woods</span>
                                                                            <span class="image-hover-subtitle">Homes</span>
                                                                            <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                                            <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                                        </span>
                                                                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
               <div class="image-hover-content black-hover">
                                                                                       <span class="hover-content">
                                                                                           <span class="image-hover-title">Villa in the Woods</span>
                                                                                           <span class="image-hover-subtitle">Homes</span>
                                                                                           <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                                                           <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                                                       </span>
                                                                               </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                <div class="image-hover-content black-hover">
                                                                                        <span class="hover-content">
                                                                                            <span class="image-hover-title">Villa in the Woods</span>
                                                                                            <span class="image-hover-subtitle">Homes</span>
                                                                                            <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                                                            <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                                                        </span>
                                                                                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
               <div class="image-hover-content black-hover">
                                                                                       <span class="hover-content">
                                                                                           <span class="image-hover-title">Villa in the Woods</span>
                                                                                           <span class="image-hover-subtitle">Homes</span>
                                                                                           <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                                                           <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                                                       </span>
                                                                               </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
               <div class="image-hover-content black-hover">
                                                                                       <span class="hover-content">
                                                                                           <span class="image-hover-title">Villa in the Woods</span>
                                                                                           <span class="image-hover-subtitle">Homes</span>
                                                                                           <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                                                           <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                                                       </span>
                                                                               </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                <div class="image-hover-content black-hover">
                                                                                        <span class="hover-content">
                                                                                            <span class="image-hover-title">Villa in the Woods</span>
                                                                                            <span class="image-hover-subtitle">Homes</span>
                                                                                            <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                                                            <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                                                        </span>
                                                                                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                <div class="image-hover-content black-hover">
                                                                                        <span class="hover-content">
                                                                                            <span class="image-hover-title">Villa in the Woods</span>
                                                                                            <span class="image-hover-subtitle">Homes</span>
                                                                                            <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                                                            <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                                                        </span>
                                                                                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
               <div class="image-hover-content black-hover">
                                                                                       <span class="hover-content">
                                                                                           <span class="image-hover-title">Villa in the Woods</span>
                                                                                           <span class="image-hover-subtitle">Homes</span>
                                                                                           <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                                                           <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                                                       </span>
                                                                               </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/build1.jfif" class="img-fluid" alt="">
               <div class="image-hover-content black-hover">
                                                                                       <span class="hover-content">
                                                                                           <span class="image-hover-title">Villa in the Woods</span>
                                                                                           <span class="image-hover-subtitle">Homes</span>
                                                                                           <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                                                           <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                                                       </span>
                                                                               </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/build2.jpg" class="img-fluid" alt="">
                <div class="image-hover-content black-hover">
                                                                                        <span class="hover-content">
                                                                                            <span class="image-hover-title">Villa in the Woods</span>
                                                                                            <span class="image-hover-subtitle">Homes</span>
                                                                                            <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                                                            <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                                                        </span>
                                                                                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/build3.jpg" class="img-fluid" alt="">
                <div class="image-hover-content black-hover">
                                                                                        <span class="hover-content">
                                                                                            <span class="image-hover-title">Villa in the Woods</span>
                                                                                            <span class="image-hover-subtitle">Homes</span>
                                                                                            <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                                                            <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                                                        </span>
                                                                                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/build4.jpg" class="img-fluid" alt="">
                <div class="image-hover-content black-hover">
                                                                                        <span class="hover-content">
                                                                                            <span class="image-hover-title">Villa in the Woods</span>
                                                                                            <span class="image-hover-subtitle">Homes</span>
                                                                                            <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                                                            <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                                                        </span>
                                                                                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/build5.jpg" class="img-fluid" alt="">
                <div class="image-hover-content black-hover">
                                                                                        <span class="hover-content">
                                                                                            <span class="image-hover-title">Villa in the Woods</span>
                                                                                            <span class="image-hover-subtitle">Homes</span>
                                                                                            <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                                                            <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                                                        </span>
                                                                                </div>
              </div>
            </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/build6.jpg" class="img-fluid" alt="">
              <div class="image-hover-content black-hover">
                                                                                      <span class="hover-content">
                                                                                          <span class="image-hover-title">Villa in the Woods</span>
                                                                                          <span class="image-hover-subtitle">Homes</span>
                                                                                          <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                                                          <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                                                      </span>
                                                                              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/build7.jpg" class="img-fluid" alt="">
              <div class="image-hover-content black-hover">
                                                                                      <span class="hover-content">
                                                                                          <span class="image-hover-title">Villa in the Woods</span>
                                                                                          <span class="image-hover-subtitle">Homes</span>
                                                                                          <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                                                          <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                                                      </span>
                                                                              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/build8.jfif" class="img-fluid" alt="">
              <div class="image-hover-content black-hover">
                                                                                      <span class="hover-content">
                                                                                          <span class="image-hover-title">Villa in the Woods</span>
                                                                                          <span class="image-hover-subtitle">Homes</span>
                                                                                          <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                                                          <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                                                      </span>
                                                                              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/build9.jpg" class="img-fluid" alt="">
              <div class="image-hover-content black-hover">
                                                                                      <span class="hover-content">
                                                                                          <span class="image-hover-title">Villa in the Woods</span>
                                                                                          <span class="image-hover-subtitle">Homes</span>
                                                                                          <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                                                          <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                                                      </span>
                                                                              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/build10.jpg" class="img-fluid" alt="">
              <div class="image-hover-content black-hover">
                                                                                      <span class="hover-content">
                                                                                          <span class="image-hover-title">Villa in the Woods</span>
                                                                                          <span class="image-hover-subtitle">Homes</span>
                                                                                          <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                                                          <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                                                      </span>
                                                                              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="image-hover-content black-hover">
                                                                                      <span class="hover-content">
                                                                                          <span class="image-hover-title">Villa in the Woods</span>
                                                                                          <span class="image-hover-subtitle">Homes</span>
                                                                                          <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                                                          <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                                                      </span>
                                                                              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="image-hover-content black-hover">
                                                                                      <span class="hover-content">
                                                                                          <span class="image-hover-title">Villa in the Woods</span>
                                                                                          <span class="image-hover-subtitle">Homes</span>
                                                                                          <span class="image-hover-para">An Eco-Conscious Sanctuary in the Himalayas</span>
                                                                                          <a href="/project?id=1" class="btn btn-default" title="">See</a>
                                                                                      </span>
                                                                              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
      </section>
@endsection
