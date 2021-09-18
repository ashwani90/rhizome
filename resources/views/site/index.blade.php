@extends('layout')

@section('title', 'Studio Rhizome - Home')


@section('content')

    @parent
    @include('components.carousel')
        <section id="portfolio" class="portfolio">
          <div class="custom-container">

            <div class="section-title pl-5">
              <p>Recent Works</p>
            </div>

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
                <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets/img/clients/marriot.jfif" class="img-fluid" alt="">
              </div>

            </div>

          </div>
        </section><!-- End Clients Section -->

        <section class="spacer">
          <div class="testimonial-section">
            <div class="testi-user-img">
              <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img class="u3" src="https://md-aqil.github.io/images/2091127763_1_1_1.jpg" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img class="u1" src="https://md-aqil.github.io/images/beautiful-beauty-face-2657838.jpg" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img class="u2" src="https://md-aqil.github.io/images/attractive-beautiful-beauty-1986684.jpg" alt="">
                  </div>

                  <div class="swiper-slide">
                    <img class="u4" src="https://md-aqil.github.io/images/beautiful-beauty-face-2657838.jpg" alt="">
                  </div>

                </div>
              </div>
            </div>
            <div class="user-saying">
              <div class="swiper-container testimonial">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper ">
                  <!-- Slides -->
                  <div class="swiper-slide">
                    <div class="quote">
                      <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="">
                      <p>
                        “This is best and biggest unified platform
                        for instant online admission. We can easily
                        take admission for any course in any institute..“
                      </p>
                      <div class="name">-Ramkishor Verma-</div>
                      <div class="designation">University Student</div>

                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="quote">
                      <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="">

                      <p>
                        “This is best and biggest unified platform
                        for instant online admission. We can easily
                        take admission for any course in any institute..“
                      </p>
                      <div class="name">-Ramkishor Verma-</div>
                      <div class="designation">University Student</div>

                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="quote">
                      <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="">

                      <p>
                        “This is best and biggest unified platform
                        for instant online admission. We can easily
                        take admission for any course in any institute..“
                      </p>
                      <div class="name">-Ramkishor Verma-</div>
                      <div class="designation">University Student</div>

                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="quote">
                      <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="">

                      <p>
                        “This is best and biggest unified platform
                        for instant online admission. We can easily
                        take admission for any course in any institute..“
                      </p>
                      <div class="name">-Ramkishor Verma-</div>
                      <div class="designation">University Student</div>

                    </div>
                  </div>

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination swiper-pagination-white"></div>

              </div>
            </div>
          </div>
        </section>

        <section id="blog" class="blog">
          <div class="custom-container">

            <div class="row">

              <div class="col-lg-4  col-md-6 d-flex align-items-stretch  blog-box" data-aos="fade-up">
                <article class="entry">

                  <div class="entry-img">
                    <img src="assets/img/blog-1.jpg" alt="" class="img-fluid">
                  </div>

                  <h2 class="entry-title">
                    <a href="blog-single.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>
                      Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta zena prista maraeda talan mas indera.
                    </p>
                    <div class="read-more">
                      <a href="blog-single.html">Read More</a>
                    </div>
                  </div>

                </article><!-- End blog entry -->
              </div>

              <div class="col-lg-4  col-md-6 d-flex align-items-stretch blog-box" data-aos="fade-up">
                <article class="entry">

                  <div class="entry-img">
                    <img src="assets/img/blog-2.jpg" alt="" class="img-fluid">
                  </div>

                  <h2 class="entry-title">
                    <a href="blog-single.html">Nisi magni odit consequatur autem nulla dolorem</a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>
                      Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et quia molestias laboriosam. Tempora nam odit omnis eum corrupti qui aliquid excepturi molestiae. Facilis et sint quos sed voluptas. Maxime sed tempore enim omnis non alias.
                    </p>
                    <div class="read-more">
                      <a href="blog-single.html">Read More</a>
                    </div>
                  </div>

                </article><!-- End blog entry -->
              </div>

              <div class="col-lg-4  col-md-6 d-flex align-items-stretch  blog-box" data-aos="fade-up">
                <article class="entry">

                  <div class="entry-img">
                    <img src="assets/img/blog-3.jpg" alt="" class="img-fluid">
                  </div>

                  <h2 class="entry-title">
                    <a href="blog-single.html">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>
                      Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis tara kero pakla metaruna nedore stan.
                    </p>
                    <div class="read-more">
                      <a href="blog-single.html">Read More</a>
                    </div>
                  </div>

                </article><!-- End blog entry -->
              </div>

            </div>

          </div>
        </section><!-- End Blog Section -->
@endsection
